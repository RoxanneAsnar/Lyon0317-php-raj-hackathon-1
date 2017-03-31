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
        echo "<div class=\"container-fluid\" id=\"movies-results\">

    <div id=\"grid-or-list\">
        <strong>Display movies</strong>
        <div class=\"btn-group\">
            <a href=\"#\" id=\"list\" class=\"btn btn-default btn-sm\">
                <span class=\"glyphicon glyphicon-th-list\"> </span>
                List
            </a>
            <a href=\"#\" id=\"grid\" class=\"btn btn-default btn-sm\">
                <span class=\"glyphicon glyphicon-th\"></span>
                Grid
            </a>
        </div>
    </div>

    <div id=\"products\" class=\"row list-group\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 19
            echo "            <div class=\"item col-xs-6 col-md-4 col-lg-3\">
                <div class=\"thumbnail\">
                    <div class=\"movie-img\">
                        <img class=\"group list-group-image\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "Poster", array()), "html", null, true);
            echo "\" alt=\"\"/>
                    </div>
                    <div class=\"caption\">
                        <h4 class=\"group inner list-group-item-heading\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "Title", array()), "html", null, true);
            echo "
                        </h4>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-6\">
                                <p class=\"lead\">
                                    ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "imdbID", array()), "html", null, true);
            echo "
                                </p>
                            </div>
                            <div class=\"col-xs-12 col-md-6\">
                                <a class=\"btn btn-success\" href=\"movie.html.twig?idmovie=";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "imdbID", array()), "html", null, true);
            echo "\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
</div>";
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
        return array (  84 => 44,  69 => 35,  62 => 31,  54 => 26,  47 => 22,  42 => 19,  38 => 18,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/www/hackathon/Lyon0317-php-raj-hackathon-1/view/home.html.twig");
    }
}
