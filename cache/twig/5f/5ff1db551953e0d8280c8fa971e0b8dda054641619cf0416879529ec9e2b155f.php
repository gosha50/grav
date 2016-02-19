<?php

/* partials/footer.html.twig */
class __TwigTemplate_64155de0df7804b824ad156cc06317bae84c8d429d1df29ac438518fdccef18a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    <!-- Footer -->
    <footer id=\"contact_2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 col-lg-offset-1 text-center\">
                    <h4><strong>Contact Info</strong>
                    </h4>
                    <p>";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "address", array());
        echo " <br> ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "city", array());
        echo ", ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "state", array());
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "zip", array());
        echo ", ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "country", array());
        echo ".</p>

                    <ul class=\"list-unstyled\">
                        <li><i class=\"fa fa-phone fa-fw\"></i>  ";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "phone", array());
        echo "</li>
                        <li><i class=\"fa fa-envelope-o fa-fw\"></i>  <a href=\"mailto:name@akinian.com\"> ";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "email", array());
        echo "</a>
                        </li>
                    </ul>
                    <br>
                    <p> </p>

                    <!-- Social Accounts -->
                    <ul class=\"list-inline\">
                       

                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "accounts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 24
            echo "
                            <li>
                                <a href=\"";
            // line 26
            echo $this->getAttribute($context["account"], "url", array());
            echo "\">
                                    <i class=\"fa fa-";
            // line 27
            echo $this->getAttribute($context["account"], "social", array());
            echo " fa-fw fa-3x\"></i>
                                </a>
                            </li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    
                     
                    </ul>
                
                </div>
            </div>

        </div>
        ";
        // line 41
        $this->loadTemplate("partials/map.html.twig", "partials/footer.html.twig", 41)->display($context);
        // line 42
        echo "        <hr class=\"small\">
        <div class=\"container\">
            <div class=\"row\">
                <p class=\"text-muted\"><?php echo \$_SERVER['SERVER_NAME'] ?>  &copy; <?php echo date(\"Y\") ?> </p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->


";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "


 
    <script>
    // Closes the sidebar menu
    \$(\"#menu-close\").click(function(e) {
        e.preventDefault();
        console.log('yay');
        \$(\"#sidebar-wrapper\").toggleClass(\"active\");
    });

    // Opens the sidebar menu
    \$(\"#menu-toggle\").click(function(e) {
        e.preventDefault();
        \$(\"#sidebar-wrapper\").toggleClass(\"active\");
    });
    // Closes the sidebar menu when the body is clicked
    \$('header, footer, aside, section').click(function(e){
        if (e.target.nodeName != 'A' && e.target.nodeName != 'I' && e.target.nodeName != 'IMG') {
            e.preventDefault();
            \$(\"#sidebar-wrapper\").removeClass(\"active\");
        }
    });


    // Scrolls to the selected menu item on the page
    \$(function() {
        \$('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\\//, '') == this.pathname.replace(/^\\//, '') || location.hostname == this.hostname) {

                var target = \$(this.hash);
                target = target.length ? target : \$('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    \$('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.js", 1 => 100), "method");
        // line 55
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  167 => 54,  164 => 53,  112 => 57,  110 => 53,  97 => 42,  95 => 41,  84 => 32,  73 => 27,  69 => 26,  65 => 24,  61 => 23,  48 => 13,  44 => 12,  30 => 9,  20 => 1,);
    }
}
/* */
/*     <!-- Footer -->*/
/*     <footer id="contact_2">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-10 col-lg-offset-1 text-center">*/
/*                     <h4><strong>Contact Info</strong>*/
/*                     </h4>*/
/*                     <p>{{ page.header.address }} <br> {{ page.header.city }}, {{ page.header.state }} {{ page.header.zip }}, {{ page.header.country }}.</p>*/
/* */
/*                     <ul class="list-unstyled">*/
/*                         <li><i class="fa fa-phone fa-fw"></i>  {{ page.header.phone }}</li>*/
/*                         <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@akinian.com"> {{ page.header.email }}</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <br>*/
/*                     <p> </p>*/
/* */
/*                     <!-- Social Accounts -->*/
/*                     <ul class="list-inline">*/
/*                        */
/* */
/*                         {% for account in page.header.accounts %}*/
/* */
/*                             <li>*/
/*                                 <a href="{{ account.url }}">*/
/*                                     <i class="fa fa-{{ account.social }} fa-fw fa-3x"></i>*/
/*                                 </a>*/
/*                             </li>*/
/* */
/*                         {% endfor %}*/
/* */
/*     */
/*                      */
/*                     </ul>*/
/*                 */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         {% include 'partials/map.html.twig' %}*/
/*         <hr class="small">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <p class="text-muted"><?php echo $_SERVER['SERVER_NAME'] ?>  &copy; <?php echo date("Y") ?> </p>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/*     <!-- jQuery -->*/
/* */
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs('theme://js/jquery.js',100) %}*/
/*     {% do assets.addJs('theme://js/bootstrap.min.js') %}*/
/* {% endblock %}*/
/* {{ assets.js() }}*/
/* */
/* */
/*  */
/*     <script>*/
/*     // Closes the sidebar menu*/
/*     $("#menu-close").click(function(e) {*/
/*         e.preventDefault();*/
/*         console.log('yay');*/
/*         $("#sidebar-wrapper").toggleClass("active");*/
/*     });*/
/* */
/*     // Opens the sidebar menu*/
/*     $("#menu-toggle").click(function(e) {*/
/*         e.preventDefault();*/
/*         $("#sidebar-wrapper").toggleClass("active");*/
/*     });*/
/*     // Closes the sidebar menu when the body is clicked*/
/*     $('header, footer, aside, section').click(function(e){*/
/*         if (e.target.nodeName != 'A' && e.target.nodeName != 'I' && e.target.nodeName != 'IMG') {*/
/*             e.preventDefault();*/
/*             $("#sidebar-wrapper").removeClass("active");*/
/*         }*/
/*     });*/
/* */
/* */
/*     // Scrolls to the selected menu item on the page*/
/*     $(function() {*/
/*         $('a[href*=#]:not([href=#])').click(function() {*/
/*             if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {*/
/* */
/*                 var target = $(this.hash);*/
/*                 target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');*/
/*                 if (target.length) {*/
/*                     $('html,body').animate({*/
/*                         scrollTop: target.offset().top*/
/*                     }, 1000);*/
/*                     return false;*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/*     </script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
