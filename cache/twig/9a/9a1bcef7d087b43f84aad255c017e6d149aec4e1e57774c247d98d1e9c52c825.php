<?php

/* partials/menu.html.twig */
class __TwigTemplate_f8b008167f68e25d2f714239272546e3dfa7ade431cd37550f08fb98268498f9 extends Twig_Template
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
    <a id=\"menu-toggle\" href=\"#\" class=\"btn btn-dark btn-lg toggle\"><i class=\"fa fa-bars\"></i></a>
    <nav id=\"sidebar-wrapper\">
     
        <a id=\"menu-close\" href=\"#\" class=\"btn btn-light btn-lg pull-right toggle\"><i class=\"fa fa-times\"></i></a>
            <ul class=\"sidebar-nav\"> 
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "menu_items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "                <li>
                    <a href=\"";
            // line 10
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" onclick = \$(\"#menu-close\").click(); >
                        ";
            // line 11
            echo $this->getAttribute($context["item"], "label", array());
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ul>
    </nav>


 ";
    }

    public function getTemplateName()
    {
        return "partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  39 => 11,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* */
/*     <!-- Navigation -->*/
/*     <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>*/
/*     <nav id="sidebar-wrapper">*/
/*      */
/*         <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>*/
/*             <ul class="sidebar-nav"> */
/*                 {% for item in page.header.menu_items %}*/
/*                 <li>*/
/*                     <a href="{{ item.url }}" onclick = $("#menu-close").click(); >*/
/*                         {{ item.label }}</a>*/
/*                 </li>*/
/*                 {% endfor %}*/
/*         </ul>*/
/*     </nav>*/
/* */
/* */
/*  */
