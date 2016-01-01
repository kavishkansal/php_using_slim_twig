<?php

/* contact.twig */
class __TwigTemplate_d30081e5bc6531042e1bea489ea960ea8f3eab3cc241bf238ec4e2f319da55f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.twig", "contact.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Contact Ralph ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <strong>Contact</strong>
    <h2>Ralph Waldo Emerson</h2>

    <p>Unfortately, Ralph Waldo Emerson has been deceased for over 100 years so he's not particularly expediant at replying to email but you can make an attempt below. However, if you require face to gravestone contact you can visit his remains at:</p>
    <address>
      <h4>Sleepy Hollow Cemetery</h4>
      <p>34 Bedford Street<br>
      Concord, MA 01742, United States<br>
    <a href=\"https://www.google.com/maps/place/Sleepy+Hollow+Cemetery/@42.464126,-71.343098,15z/data=!4m2!3m1!1s0x0:0x9c41d0f83df689a6?sa=X&ei=ZCgLVZb5Io_hoASc7oHwCQ&ved=0CH0Q_BIwCw\">Google Map</a></p>
    </address>

    <form action=\"\" method=\"post\">
      <fieldset>
        <input name=\"name\" type=\"text\" placeholder=\"Full Name\">
        <input name=\"email\" type=\"email\" placeholder=\"Email Address\">
        <textarea name=\"msg\" placeholder=\"Your message...\"></textarea>
      </fieldset>
      <input type=\"submit\" class=\"button\">
    </form>
 ";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'main.twig' %}*/
/* */
/* {% block title %} Contact Ralph {% endblock title %}*/
/* {% block content %}*/
/*     <strong>Contact</strong>*/
/*     <h2>Ralph Waldo Emerson</h2>*/
/* */
/*     <p>Unfortately, Ralph Waldo Emerson has been deceased for over 100 years so he's not particularly expediant at replying to email but you can make an attempt below. However, if you require face to gravestone contact you can visit his remains at:</p>*/
/*     <address>*/
/*       <h4>Sleepy Hollow Cemetery</h4>*/
/*       <p>34 Bedford Street<br>*/
/*       Concord, MA 01742, United States<br>*/
/*     <a href="https://www.google.com/maps/place/Sleepy+Hollow+Cemetery/@42.464126,-71.343098,15z/data=!4m2!3m1!1s0x0:0x9c41d0f83df689a6?sa=X&ei=ZCgLVZb5Io_hoASc7oHwCQ&ved=0CH0Q_BIwCw">Google Map</a></p>*/
/*     </address>*/
/* */
/*     <form action="" method="post">*/
/*       <fieldset>*/
/*         <input name="name" type="text" placeholder="Full Name">*/
/*         <input name="email" type="email" placeholder="Email Address">*/
/*         <textarea name="msg" placeholder="Your message..."></textarea>*/
/*       </fieldset>*/
/*       <input type="submit" class="button">*/
/*     </form>*/
/*  {% endblock content %}*/
