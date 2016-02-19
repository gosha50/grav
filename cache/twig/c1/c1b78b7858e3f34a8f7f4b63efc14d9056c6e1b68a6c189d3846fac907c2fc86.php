<?php

/* partials/about.html.twig */
class __TwigTemplate_881a8f44a419d3e947d7a139f81717e46f4b1eda40199717c322f31d26da6037 extends Twig_Template
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
        echo " <!-- About -->
    <section id=\"about\" class=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                  <h2> ";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "text", array());
        echo " <h2>
                   <p class=\"lead\"> ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtext", array());
        echo " </p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>";
    }

    public function getTemplateName()
    {
        return "partials/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }
}
/*  <!-- About -->*/
/*     <section id="about" class="about">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                   <h2> {{ page.header.text }} <h2>*/
/*                    <p class="lead"> {{ page.header.subtext }} </p>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </section>*/
