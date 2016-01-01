<?php

/* main.twig */
class __TwigTemplate_35273b1c711c7e300ffd1c0901bb5fd4776870fe5b04567b59b75c339b970278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'hero' => array($this, 'block_hero'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<html lang=\"en\">
<head>
  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "</head>

<body>
<!--
  <div id=\"feedback\" class=\"success\">
    <h3>Success!</h3>
    <p>You're reading all about Emerson.</p>
  </div>
-->


  <header>
    <h1>Ralph Waldo Emerson</h1>
    <nav>
      <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("home"), "html", null, true);
        echo "\" class=\"selected\">About</a>
      <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("contact"), "html", null, true);
        echo "\">Contact</a>
    </nav>
  </header>

  <div class=\"emerson\">
    ";
        // line 35
        $this->displayBlock('hero', $context, $blocks);
        // line 36
        echo "  </div>

  <main>
    ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "  </main>

  <footer>
    ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "  </footer>

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "  <meta charset=\"utf-8\">
  <title> ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"description\" content=\"Ralph Waldo Emerson\">
  <meta name=\"author\" content=\"Treehouse\">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel=\"stylesheet\" href=\"css/master.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
  <script src=\"js/global.js\"></script>
  ";
    }

    public function block_title($context, array $blocks = array())
    {
        echo " Ralph Waldo Emerson ";
    }

    // line 35
    public function block_hero($context, array $blocks = array())
    {
        echo " <img src=\"images/emerson.jpg\" alt=\"Picture of Ralph Waldo Emerson\"> ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "      
    ";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "    <p>A project from <strong><a href=\"http://teamtreehouse.com\">Treehouse</a></strong></p>
    <nav>
      <a href=\"index.html\" class=\"selected\">About</a>
      <a href=\"contact.html\">Contact</a>
    </nav>
    ";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  121 => 45,  116 => 40,  113 => 39,  107 => 35,  90 => 7,  87 => 6,  84 => 5,  76 => 52,  74 => 45,  69 => 42,  67 => 39,  62 => 36,  60 => 35,  52 => 30,  48 => 29,  32 => 15,  30 => 5,  24 => 1,);
    }
}
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* <head>*/
/*   {% block head %}*/
/*   <meta charset="utf-8">*/
/*   <title> {% block title %} Ralph Waldo Emerson {% endblock title %}</title>*/
/*   <meta name="description" content="Ralph Waldo Emerson">*/
/*   <meta name="author" content="Treehouse">*/
/*   <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>*/
/*   <link rel="stylesheet" href="css/master.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/*   <script src="js/global.js"></script>*/
/*   {% endblock head %}*/
/* </head>*/
/* */
/* <body>*/
/* <!--*/
/*   <div id="feedback" class="success">*/
/*     <h3>Success!</h3>*/
/*     <p>You're reading all about Emerson.</p>*/
/*   </div>*/
/* -->*/
/* */
/* */
/*   <header>*/
/*     <h1>Ralph Waldo Emerson</h1>*/
/*     <nav>*/
/*       <a href="{{ urlFor('home') }}" class="selected">About</a>*/
/*       <a href="{{ urlFor('contact') }}">Contact</a>*/
/*     </nav>*/
/*   </header>*/
/* */
/*   <div class="emerson">*/
/*     {% block hero %} <img src="images/emerson.jpg" alt="Picture of Ralph Waldo Emerson"> {% endblock hero %}*/
/*   </div>*/
/* */
/*   <main>*/
/*     {% block content %}*/
/*       */
/*     {% endblock content %}*/
/*   </main>*/
/* */
/*   <footer>*/
/*     {% block footer %}*/
/*     <p>A project from <strong><a href="http://teamtreehouse.com">Treehouse</a></strong></p>*/
/*     <nav>*/
/*       <a href="index.html" class="selected">About</a>*/
/*       <a href="contact.html">Contact</a>*/
/*     </nav>*/
/*     {% endblock footer %}*/
/*   </footer>*/
/* */
/* </body>*/
/* </html>*/
/* */
