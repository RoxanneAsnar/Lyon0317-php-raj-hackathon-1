<?php

/* partial/header.html.twig */
class __TwigTemplate_a323370429faf332e85cee1838d66ec50dcc991e48963edef977bf0c120dffbd extends Twig_Template
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
        echo "<nav role=\"navigation\" class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"col-xs-9 col-lg-3\" >
            <a id=\"logo\" class=\"navbar-header\" href=\"#\"><img src=\"/public/img/logo.png\" width=\"200px\" height=\"50px\"> </a>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header \" >
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-right \"  id=\"bs-example-navbar-collapse-1 \">
            <ul class=\"nav navbar-nav\">
                <li  class=\"active\"><a href=\"#\">Home <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"#apropos\" class=\"scroll\"></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "partial/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partial/header.html.twig", "/www/hackathon/Lyon0317-php-raj-hackathon-1/view/partial/header.html.twig");
    }
}
