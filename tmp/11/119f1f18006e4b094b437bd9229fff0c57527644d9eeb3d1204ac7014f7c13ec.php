<?php

/* index.html.twig */
class __TwigTemplate_e203c84b12859c6bbc9bda4481788da46e24034891745fd9fb2de2a2b8f08497 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    ";
        // line 4
        echo twig_include($this->env, $context, "partial/head.html.twig");
        echo "
</head>

<body>
<div class=\"container-fluid\">
    <header>
        ";
        // line 10
        echo twig_include($this->env, $context, "partial/header.html.twig");
        echo "
    </header>

    <main>
        ";
        // line 14
        echo twig_include($this->env, $context, "home.html.twig");
        echo "
    </main>

    <footer>
        ";
        // line 18
        echo twig_include($this->env, $context, "partial/footer.html.twig");
        echo "
    </footer>
</div>

";
        // line 22
        echo twig_include($this->env, $context, "partial/scripts.html.twig");
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  47 => 18,  40 => 14,  33 => 10,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/var/www/html/Lyon0317-php-raj-hackathon-1/view/index.html.twig");
    }
}
