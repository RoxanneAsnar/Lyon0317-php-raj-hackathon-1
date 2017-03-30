<?php

/* home.html.twig */
class __TwigTemplate_06f325db6bff0fd3a0b271cd7ded88c764a7209d581021e431285a988c8ddc14 extends Twig_Template
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
        echo "<h1>test</h1>

<div id=\"products\" class=\"row list-group\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "        <div class=\"item col-xs-4 col-lg-4\">
            <div class=\"thumbnail\">
                <img class=\"group list-group-image\" src=\"http://placehold.it/400x250/000/fff\" alt=\"\" />
                <div class=\"caption\">
                    <h4 class=\"group inner list-group-item-heading\">
                        Movie title
                    </h4>
                    <p class=\"group inner list-group-item-text\">
                        Movie description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-6\">
                            <p class=\"lead\">
                                IMBD ID
                            </p>
                        </div>
                        <div class=\"col-xs-12 col-md-6\">
                            <a class=\"btn btn-success\" href=\"http://www.jquery2dotnet.com\">
                                More information
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>
";
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
        return array (  59 => 31,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/www/hackathon/Lyon0317-php-raj-hackathon-1/view/home.html.twig");
    }
}
