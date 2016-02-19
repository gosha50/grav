<?php

/* partials/portfolio.html.twig */
class __TwigTemplate_07fe6c39189ae17a7c2a3442fc212169f3741a8df761fd8c6b6bc053d5be6a2e extends Twig_Template
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
    <!-- Navigation -->

    <!-- Portfolio -->
    <section id=\"portfolio\" class=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 col-lg-offset-1 text-center\">
                    <h2>Our Work</h2>
                    <hr class=\"small\">
                    <div class=\"row\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "our_work_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "
                        <div class=\"col-md-6\">
                            <div class=\"portfolio-item\">
                                <a href=\"";
            // line 16
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">

                                      <img class=\"img-portfolio img-responsive\" src=\"user/pages/images/";
            // line 18
            echo $this->getAttribute($context["item"], "image", array());
            echo "\">   
                                </a>
                                <h5> ";
            // line 20
            echo $this->getAttribute($context["item"], "image_name", array());
            echo " </h5>
                            </div>
                        </div>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </div>
                    <!-- /.row (nested) -->
                   <!--  <a href=\"#\" class=\"btn btn-dark\">View More Items</a> -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class=\"call-to-action bg-primary\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h3> ";
        // line 40
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "upsite", array());
        echo " </h3>
                    <!-- <a href=\"#top\" class=\"btn btn-lg btn-light\">Top Page!</a> or
                    <a href=\"#contact_2\" class=\"btn btn-lg btn-dark\">Contact!</a> -->
                </div>
            </div>
        </div>
    </aside>

   ";
    }

    public function getTemplateName()
    {
        return "partials/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 40,  61 => 24,  51 => 20,  46 => 18,  41 => 16,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* */
/*     <!-- Navigation -->*/
/* */
/*     <!-- Portfolio -->*/
/*     <section id="portfolio" class="portfolio">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-10 col-lg-offset-1 text-center">*/
/*                     <h2>Our Work</h2>*/
/*                     <hr class="small">*/
/*                     <div class="row">*/
/*                         {% for item in page.header.our_work_images %}*/
/* */
/*                         <div class="col-md-6">*/
/*                             <div class="portfolio-item">*/
/*                                 <a href="{{ item.url }}">*/
/* */
/*                                       <img class="img-portfolio img-responsive" src="user/pages/images/{{ item.image }}">   */
/*                                 </a>*/
/*                                 <h5> {{ item.image_name}} </h5>*/
/*                             </div>*/
/*                         </div>*/
/*                            {% endfor %}*/
/*                     </div>*/
/*                     <!-- /.row (nested) -->*/
/*                    <!--  <a href="#" class="btn btn-dark">View More Items</a> -->*/
/*                 </div>*/
/*                 <!-- /.col-lg-10 -->*/
/*             </div>*/
/*             <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </section>*/
/* */
/*     <!-- Call to Action -->*/
/*     <aside class="call-to-action bg-primary">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <h3> {{ page.header.upsite }} </h3>*/
/*                     <!-- <a href="#top" class="btn btn-lg btn-light">Top Page!</a> or*/
/*                     <a href="#contact_2" class="btn btn-lg btn-dark">Contact!</a> -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </aside>*/
/* */
/*    */
