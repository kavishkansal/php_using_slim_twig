<?php

/* about.twig */
class __TwigTemplate_36009e5a9ca300f06c40b033fd17b002c603d2ac9eaacba9f68aad12e034a1e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.twig", "about.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <strong>About</strong>
    <h2>Ralph Waldo Emerson</h2>

    <p>Ralph Waldo Emerson <em>(May 25, 1803 – April 27, 1882)</em> was an American essayist, lecturer, and poet, who led the Transcendentalist movement of the mid-19th century. He was seen as a champion of individualism and a prescient critic of the countervailing pressures of society, and he disseminated his thoughts through dozens of published essays and more than 1,500 public lectures across the United States.</p>

    <p>Emerson gradually moved away from the religious and social beliefs of his contemporaries, formulating and expressing the philosophy of Transcendentalism in his 1836 essay, Nature. Following this ground-breaking work, he gave a speech entitled \"The American Scholar\" in 1837, which Oliver Wendell Holmes, Sr. considered to be America's \"Intellectual Declaration of Independence\".</p>

    <p>Emerson wrote most of his important essays as lectures first, then revised them for print. His first two collections of essays – Essays: First Series and Essays: Second Series, published respectively in 1841 and 1844 – represent the core of his thinking, and include such well-known essays as Self-Reliance, The Over-Soul, Circles, The Poet and Experience. Together with Nature, these essays made the decade from the mid-1830s to the mid-1840s Emerson's most fertile period.</p>

    <p>Emerson wrote on a number of subjects, never espousing fixed philosophical tenets, but developing certain ideas such as individuality, freedom, the ability for humankind to realize almost anything, and the relationship between the soul and the surrounding world. Emerson's \"nature\" was more philosophical than naturalistic: \"Philosophically considered, the universe is composed of Nature and the Soul.\" Emerson is one of several figures who \"took a more pantheist or pandeist approach by rejecting views of God as separate from the world.\"\"
    </p>
    <p>He remains among the linchpins of the American romantic movement, and his work has greatly influenced the thinkers, writers and poets that have followed him. When asked to sum up his work, he said his central doctrine was \"the infinitude of the private man.\" Emerson is also well known as a mentor and friend of fellow Transcendentalist Henry David Thoreau.</p>

    <p><em>Learn more about Ralph Waldo Emerson from <a href=\"http://en.wikipedia.org/wiki/Ralph_Waldo_Emerson\">Wikipedia</a></em></p>
";
    }

    public function getTemplateName()
    {
        return "about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'main.twig' %}*/
/* */
/* {% block content %}*/
/*     <strong>About</strong>*/
/*     <h2>Ralph Waldo Emerson</h2>*/
/* */
/*     <p>Ralph Waldo Emerson <em>(May 25, 1803 – April 27, 1882)</em> was an American essayist, lecturer, and poet, who led the Transcendentalist movement of the mid-19th century. He was seen as a champion of individualism and a prescient critic of the countervailing pressures of society, and he disseminated his thoughts through dozens of published essays and more than 1,500 public lectures across the United States.</p>*/
/* */
/*     <p>Emerson gradually moved away from the religious and social beliefs of his contemporaries, formulating and expressing the philosophy of Transcendentalism in his 1836 essay, Nature. Following this ground-breaking work, he gave a speech entitled "The American Scholar" in 1837, which Oliver Wendell Holmes, Sr. considered to be America's "Intellectual Declaration of Independence".</p>*/
/* */
/*     <p>Emerson wrote most of his important essays as lectures first, then revised them for print. His first two collections of essays – Essays: First Series and Essays: Second Series, published respectively in 1841 and 1844 – represent the core of his thinking, and include such well-known essays as Self-Reliance, The Over-Soul, Circles, The Poet and Experience. Together with Nature, these essays made the decade from the mid-1830s to the mid-1840s Emerson's most fertile period.</p>*/
/* */
/*     <p>Emerson wrote on a number of subjects, never espousing fixed philosophical tenets, but developing certain ideas such as individuality, freedom, the ability for humankind to realize almost anything, and the relationship between the soul and the surrounding world. Emerson's "nature" was more philosophical than naturalistic: "Philosophically considered, the universe is composed of Nature and the Soul." Emerson is one of several figures who "took a more pantheist or pandeist approach by rejecting views of God as separate from the world.""*/
/*     </p>*/
/*     <p>He remains among the linchpins of the American romantic movement, and his work has greatly influenced the thinkers, writers and poets that have followed him. When asked to sum up his work, he said his central doctrine was "the infinitude of the private man." Emerson is also well known as a mentor and friend of fellow Transcendentalist Henry David Thoreau.</p>*/
/* */
/*     <p><em>Learn more about Ralph Waldo Emerson from <a href="http://en.wikipedia.org/wiki/Ralph_Waldo_Emerson">Wikipedia</a></em></p>*/
/* {% endblock content %}*/
