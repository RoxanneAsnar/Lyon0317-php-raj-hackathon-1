<?php

/* home.html.twig */
class __TwigTemplate_749c52241928ce4bfc5fbcac3cf347fd5cc3a26f3afc1d303a5fb5df3414eee2 extends Twig_Template
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
    <div class=\"container\" id=\"search-form\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <form class=\"input-group form-horizontal\" action=\"\" method=\"post\" id=\"adv-search\" role=\"form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for movies and series\" name=\"keyword\"/>
                    <div class=\"input-group-btn\">
                        <div class=\"btn-group\" role=\"group\">
                            <div class=\"dropdown dropdown-lg\" >
                                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span></button>
                                <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">

                                    <div>
                                        <div class=\"form-group\">
                                            <label for=\"filter\">Filter by</label>
                                            <select class=\"form-control\" name=\"type\">
                                                <option value=\"youpi\">All</option>
                                                <option value=\"films\">Films</option>
                                                <option value=\"Series\" >Series</option>
                                            </select>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"contain\" name=\"year\">Year</label>
                                            <input class=\"form-control\" type=\"text\" />
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button>
                                    </div>

                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--twig-->


    <div id=\"products\" class=\"row list-group\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 44
            echo "            <div class=\"item col-xs-6 col-md-4 col-lg-3\">
                <div class=\"thumbnail\">
                    <div class=\"movie-img\">
                        <img class=\"group list-group-image\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "Poster", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "Title", array()), "html", null, true);
            echo "\"/>
                    </div>
                    <div class=\"caption\">
                        <h4 class=\"group inner list-group-item-heading\">
                            ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "Title", array()), "html", null, true);
            echo "
                        </h4>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-6\">
                                <p class=\"lead\">
                                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "imdbID", array()), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        return array (  108 => 69,  89 => 56,  81 => 51,  72 => 47,  67 => 44,  63 => 43,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/var/www/html/Lyon0317-php-raj-hackathon-1/view/home.html.twig");
    }
}
