# php_using_slim_twig
A small PHP website using Slim Framework and Twig Template Management

You can know more about Slim Framework here: www.slimframework.com

Read more about Twig: twig.sensiolabs.org

You can download the zip version of my app and run it using XAMPP or any other local service.
Please note: You must have mod_rewrite enabled as urls are rewritten.

For sending out emails, edit index.php

$transport = Swift_SmtpTransport::newInstance('mail.example.com', 465, 'ssl')
			->setUsername('email@example.com')
			->setPassword('Password')
			;
