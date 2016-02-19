<?php

/* partials/map.html.twig */
class __TwigTemplate_a625b39c257a3fc0ccb73360228d065e0a8a46a974b0578f0ec00143deb8a89c extends Twig_Template
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
<!-- Address  -->

";
        // line 4
        $context["string"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "address", array());
        // line 5
        $context["string"] = (((isset($context["string"]) ? $context["string"] : null) . ", ") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "city", array()));
        // line 6
        $context["string"] = (((isset($context["string"]) ? $context["string"] : null) . ",") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "state", array()));
        // line 7
        $context["string"] = (((isset($context["string"]) ? $context["string"] : null) . " ") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "zip", array()));
        // line 8
        echo "

";
        // line 10
        $context["newString"] = str_replace(" ", "+", (isset($context["string"]) ? $context["string"] : null));
        // line 11
        $context["stripString"] = str_replace(" ", "%20", $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "address", array()));
        // line 12
        echo "
";
        // line 13
        $context["snap"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "country", array());
        // line 14
        $context["uString"] = str_replace(" ", "%20", (isset($context["snap"]) ? $context["snap"] : null));
        // line 15
        echo "


 <!-- Map -->
    <section id=\"contact\" class=\"map\">
        <iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed/v1/place?q=";
        // line 20
        echo (isset($context["stripString"]) ? $context["stripString"] : null);
        echo " %2C%20";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "city", array());
        echo "%2C%20";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "state", array());
        echo "%2C%20";
        echo (isset($context["uString"]) ? $context["uString"] : null);
        echo "&key=AIzaSyDnTAHg5u8PZl-Ahh59oU3ZVmyAslMd9WA\"></iframe>
        <br />
        <small>
            <a href=\"https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,";
        // line 23
        echo (isset($context["newString"]) ? $context["newString"] : null);
        echo "&amp;aq=0&amp;oq=twitter&amp;sll=45.6599517,-122.5789116&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,";
        echo (isset($context["newString"]) ? $context["newString"] : null);
        echo "&amp;t=m&amp;z=15&amp;iwloc=A\"></a>
        </small>
        </iframe>
       <!-- https://www.google.com/maps/place/9120+NE+Vancouver+Mall+Loop,+Vancouver,+WA+98662/@45.6599517,-122.5789116,17z/data=!3m1!4b1!4m2!3m1!1s0x5495afe938cce8d3:0xf1b7084a7c2a1a10 -->
    </section>

    


 ";
    }

    public function getTemplateName()
    {
        return "partials/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  54 => 20,  47 => 15,  45 => 14,  43 => 13,  40 => 12,  38 => 11,  36 => 10,  32 => 8,  30 => 7,  28 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* */
/* <!-- Address  -->*/
/* */
/* {% set string = page.header.address %}*/
/* {% set string = string~", "~ page.header.city %}*/
/* {% set string = string~","~ page.header.state %}*/
/* {% set string = string~" "~ page.header.zip %}*/
/* */
/* */
/* {% set newString = str_replace(' ', '+', string) %}*/
/* {% set stripString = str_replace(' ', '%20',  page.header.address) %}*/
/* */
/* {% set snap = page.header.country %}*/
/* {% set uString = str_replace(' ', '%20', snap) %}*/
/* */
/* */
/* */
/*  <!-- Map -->*/
/*     <section id="contact" class="map">*/
/*         <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q={{ stripString }} %2C%20{{ page.header.city }}%2C%20{{ page.header.state }}%2C%20{{ uString }}&key=AIzaSyDnTAHg5u8PZl-Ahh59oU3ZVmyAslMd9WA"></iframe>*/
/*         <br />*/
/*         <small>*/
/*             <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,{{ newString }}&amp;aq=0&amp;oq=twitter&amp;sll=45.6599517,-122.5789116&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,{{ newString }}&amp;t=m&amp;z=15&amp;iwloc=A"></a>*/
/*         </small>*/
/*         </iframe>*/
/*        <!-- https://www.google.com/maps/place/9120+NE+Vancouver+Mall+Loop,+Vancouver,+WA+98662/@45.6599517,-122.5789116,17z/data=!3m1!4b1!4m2!3m1!1s0x5495afe938cce8d3:0xf1b7084a7c2a1a10 -->*/
/*     </section>*/
/* */
/*     */
/* */
/* */
/*  */
