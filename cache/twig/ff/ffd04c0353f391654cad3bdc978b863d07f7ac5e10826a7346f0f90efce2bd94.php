<?php

/* partials/header.html.twig */
class __TwigTemplate_531317d1e9fa2101004e6fa9b42254b41570b0dbe4298cca533090b1c7b860c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title> ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo " </title>

    <!-- Bootstrap Core CSS -->
       ";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 24
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62537419-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
";
        // line 45
        $this->loadTemplate("partials/menu.html.twig", "partials/header.html.twig", 45)->display($context);
        // line 46
        echo "    
    <!-- Header -->
    <header id=\"top\" class=\"header\" style=\"background: url(user/pages/images/bg.jpg) no-repeat center center scroll;\">
        <div class=\"text-vertical-center\">
            <h1> ";
        // line 50
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo " </h1>
            <h3> ";
        // line 51
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "intro", array());
        echo " </h3>
            <br>
            <a href=\"#about\" class=\"btn btn-dark btn-lg\">Find Out More</a>
        </div>
    </header>";
    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 16
        echo "        
          
          ";
        // line 18
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css"), "method");
        // line 19
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/stylish-portfolio.css"), "method");
        // line 20
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://fonts/font-awesome/fonts/font-awesome.min.css"), "method");
        // line 21
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"), "method");
        // line 22
        echo "          
        ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  102 => 21,  99 => 20,  96 => 19,  94 => 18,  90 => 16,  87 => 15,  78 => 51,  74 => 50,  68 => 46,  66 => 45,  41 => 24,  39 => 15,  33 => 12,  20 => 1,);
    }
}
/*  <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title> {{ page.title }} </title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*        {% block stylesheet %}*/
/*         */
/*           */
/*           {% do assets.addCss('theme://css/bootstrap.min.css') %}*/
/*           {% do assets.addCss('theme://css/stylish-portfolio.css') %}*/
/*           {% do assets.addCss('theme://fonts/font-awesome/fonts/font-awesome.min.css') %}*/
/*           {% do assets.addCss("http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic") %}*/
/*           */
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* <script>*/
/*   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*   ga('create', 'UA-62537419-1', 'auto');*/
/*   ga('send', 'pageview');*/
/* */
/* </script>*/
/* </head>*/
/* */
/* <body>*/
/* {% include 'partials/menu.html.twig' %}*/
/*     */
/*     <!-- Header -->*/
/*     <header id="top" class="header" style="background: url(user/pages/images/bg.jpg) no-repeat center center scroll;">*/
/*         <div class="text-vertical-center">*/
/*             <h1> {{ page.title }} </h1>*/
/*             <h3> {{ page.header.intro }} </h3>*/
/*             <br>*/
/*             <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>*/
/*         </div>*/
/*     </header>*/
