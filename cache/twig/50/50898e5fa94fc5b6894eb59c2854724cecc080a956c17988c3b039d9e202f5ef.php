<?php

/* home.html.twig */
class __TwigTemplate_f03ab04649968d2406ee3c8fa23d0665cc5c31b0d9cb6fd9d2a5c20ec99fa993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 

";
        // line 3
        $this->loadTemplate("partials/header.html.twig", "home.html.twig", 3)->display($context);
        // line 4
        $this->loadTemplate("partials/about.html.twig", "home.html.twig", 4)->display($context);
        // line 5
        $this->loadTemplate("partials/services.html.twig", "home.html.twig", 5)->display($context);
        // line 6
        $this->loadTemplate("partials/portfolio.html.twig", "home.html.twig", 6)->display($context);
        // line 7
        $this->loadTemplate("partials/footer.html.twig", "home.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/*  */
/* */
/* {% include 'partials/header.html.twig' %}*/
/* {% include 'partials/about.html.twig' %}*/
/* {% include 'partials/services.html.twig' %}*/
/* {% include 'partials/portfolio.html.twig' %}*/
/* {% include 'partials/footer.html.twig' %}*/
/* */
