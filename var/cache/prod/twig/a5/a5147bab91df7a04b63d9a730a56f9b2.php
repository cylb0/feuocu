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

/* shop/_filtersBrand.html.twig */
class __TwigTemplate_922db52172eb9dea3a9c8bd8a61f16ac extends Template
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
        echo "<div class=\"row d-flex justify-content-between mt-1 mb-2\">
    <div>
        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary border-0 dropdown-toggle\" type=\"button\" data-mdb-ripple-duration=\"0\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                Trier par
            </button>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_brand", ["slug" => twig_get_attribute($this->env, $this->source, ($context["brand"] ?? null), "slug", [], "any", false, false, false, 8), "sort" => "popularity"]), "html", null, true);
        echo "\">Popularité</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_brand", ["slug" => twig_get_attribute($this->env, $this->source, ($context["brand"] ?? null), "slug", [], "any", false, false, false, 9), "sort" => "new"]), "html", null, true);
        echo "\">Date</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_brand", ["slug" => twig_get_attribute($this->env, $this->source, ($context["brand"] ?? null), "slug", [], "any", false, false, false, 10), "sort" => "price_ascending"]), "html", null, true);
        echo "\">Prix croissant</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_brand", ["slug" => twig_get_attribute($this->env, $this->source, ($context["brand"] ?? null), "slug", [], "any", false, false, false, 11), "sort" => "price_descending"]), "html", null, true);
        echo "\">Prix décroissant</a></li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "shop/_filtersBrand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/_filtersBrand.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/shop/_filtersBrand.html.twig");
    }
}
