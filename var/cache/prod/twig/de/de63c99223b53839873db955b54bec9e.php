<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./components/header/_searchbar.html.twig */
class __TwigTemplate_573c5565378d7c276a0fff4c1741eb08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"d-flex justify-content-center align-items-center\">
    <form
        class=\"form-inline text-center\"
        action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_products");
        echo "\"
        method=\"GET\">
        <div class=\"form-group mx-sm-3 align-self-center\">
            <input type=\"text\" class=\"form-control\" name=\"searchInput\" placeholder=\"Rechercher un produit\">
        </div>
        <button type=\"submit\" class=\"btn align-self-center search-button\" data-mdb-ripple-duration = 0>
            <span class=\"search-icon-circle\">
                <img class=\"search-icon\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/search.png"), "html", null, true);
        echo "\" alt=\"Search Icon\">
            </span>
        </button>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "./components/header/_searchbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./components/header/_searchbar.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/header/_searchbar.html.twig");
    }
}
