<?php
	
	require __DIR__ . '/vendor/autoload.php';
	date_default_timezone_set('Asia/Kolkata');


	// use Monolog\Logger;
	// use Monolog\Handler\StreamHandler;

	//Creating log of the data sent in app.txt file in the php directory
	// $log = new Logger('name');
	// $log->pushHandler(new StreamHandler('app.txt',Logger::WARNING));
	// $log->addWarning('Loggg');
	
	$app = new \Slim\Slim ( array(
		'view' => new \Slim\Views\Twig()
		));

	$view = $app->view();
	$view->parserOptions = array (
			'debug' => true,
			'cache' => dirname(__FILE__) . '/cache'
		);
	$view->parserExtensions = array (
			new \Slim\Views\TwigExtension()
		);

	$app->get('/', function() use($app){
		$app->render('about.twig');
	})->name('home');

	$app->get('/contact', function() use($app){
		$app->render('contact.twig');
	})->name('contact');

	$app->post('/contact', function() use($app){
		$name = $app->request->post('name');
		$email = $app->request->post('email');
		$msg = $app->request->post('msg');

		if(!empty($name) && !empty($email) && !empty($msg)){
			$cleanName = filter_var($name, FILTER_SANITIZE_STRING);
			$cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
			$cleanMsg = filter_var($msg, FILTER_SANITIZE_STRING);
		} else {
			//Message the user that there is a problem
			$app->redirect('/contact');
		}


		$transport = Swift_SmtpTransport::newInstance('mail.example.com', 465, 'ssl')
			->setUsername('email@example.com')
			->setPassword('Password')
			;
		$mailer = Swift_Mailer::newInstance($transport);

		$message = Swift_Message::newInstance();

		$message->setSubject('Email from PHP Application built using Slim and Twig!');
		$message->setFrom(array(
				$cleanEmail => $cleanName
			));
		$message->setTo(array(
				'markwebtechnologies@gmail.com' => 'CEO MWT'
			));
		$message->setBody($cleanMsg);
		$message->setReplyTo($cleanEmail);

		$result = $mailer->send($message);

		if($result > 0){
			$app->redirect('./');
		} else {
			$app->redirect('./contact');
		}


	});

	$app->run();

?>
