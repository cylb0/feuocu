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

/* admin/_sidebaradmin.html.twig */
class __TwigTemplate_ca8de0baad4e70096cca0eca2dfdc15e extends Template
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
        echo "<div class=\"col-6 col-lg-2 d-none d-lg-block admin-sidebar border-end bg-dark shadow-lg p-3 position-fixed mx-auto\"
     style=\"height: 100vh; z-index: 999;\"
     data-admin-toggle-sidebar-target=\"sidebar\">
    <h2 class=\"small text-uppercase fw-bold text-white border-bottom border-light py-2\">Contenu</h2>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/folded-ribbon.png"), "html", null, true);
        echo "\" alt=\"icône bannière\">
        <a class=\"small text-white text-decoration-none h6 py-1\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_index");
        echo "\">Bannières</a>
    </div>

    <h2 class=\"small text-uppercase fw-bold text-white border-bottom border-light py-3\">Options</h2>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/options.png"), "html", null, true);
        echo "\" alt=\"icône variations\">
        <a class=\"small text-white text-decoration-none h6 py-1\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_option_index");
        echo "\">Types</a>
    </div>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/choose.png"), "html", null, true);
        echo "\" alt=\"icône type d'option\">
        <a class=\"small text-white text-decoration-none h6 py-1\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_option_value_index");
        echo "\">Variations</a>
    </div>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/choice.png"), "html", null, true);
        echo "\" alt=\"icône caractéristiques\">
        <a class=\"small text-white text-decoration-none h6 py-1\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature_index");
        echo "\">Caractéristiques</a>
    </div>

    <h2 class=\"small text-uppercase fw-bold text-white border-bottom border-light py-3\">Produits</h2>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/brand.png"), "html", null, true);
        echo "\" alt=\"icône marque\">
        <a class=\"small text-white text-decoration-none h6 py-1\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand_index");
        echo "\">Marques</a>
    </div>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/category.png"), "html", null, true);
        echo "\" alt=\"icône catégories\">
        <a class=\"small text-white text-decoration-none h6 py-1\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        echo "\">Catégories</a>
    </div>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/add-product.png"), "html", null, true);
        echo "\" alt=\"icône produits\">
        <a class=\"small text-white text-decoration-none h6 py-1\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\">Articles</a>
    </div>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/coupon.png"), "html", null, true);
        echo "\" alt=\"icône réductions\">
        <a class=\"small text-white text-decoration-none h6 py-1\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_discount_index");
        echo "\">Réductions</a>
    </div>

    <h2 class=\"small text-uppercase fw-bold text-white border-bottom border-light py-3\">Utilisateurs</h2>
    <div class=\"admin-sidebar-element d-flex justify-content-start align-items-center gap-3 ps-3\">
        <img class=\"admin-icon\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/group.png"), "html", null, true);
        echo "\" alt=\"icône utilisateurs\">
        <a class=\"small text-white text-decoration-none h6 py-3\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Comptes</a>
    </div>
</div>

<div id=\"admin-sidebar-overlay\"
     class=\"position-fixed d-none top-0 start-0 w-100 h-100 bg-white opacity-50\"
     data-admin-toggle-sidebar-target=\"mask\"
     data-action=\"click->admin-toggle-sidebar#toggle\"
     style=\"z-index: 998;\">
</div>";
    }

    public function getTemplateName()
    {
        return "admin/_sidebaradmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 45,  130 => 44,  122 => 39,  118 => 38,  112 => 35,  108 => 34,  102 => 31,  98 => 30,  92 => 27,  88 => 26,  80 => 21,  76 => 20,  70 => 17,  66 => 16,  60 => 13,  56 => 12,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_sidebaradmin.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/admin/_sidebaradmin.html.twig");
    }
}
