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

/* components/_sidebarcategories.html.twig */
class __TwigTemplate_ff8f12c61ee52cea47217b3c4bd64d99 extends Template
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
        echo "<div id=\"sidebar-wrap\" class=\"d-none\">
    <div class=\"sidebar-categories col-12 col-md-4 text-black position-absolute bg-white min-vh-100\"
        style=\"z-index: 999;\">
        <div class=\"d-flex justify-content-between align-items-center bg-dark p-3\">
            <a class=\"mb-2\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                <img class=\"logo-image img-fluid\"
                    src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"
                    alt=\"Logo Header\"
                    style=\"max-width: 120px;\">
            </a>
            <i class=\"bi bi-x me-3 fa-lg text-white\" data-action=\"click->toggle-sidebar-categories#toggle\"></i>
        </div>
        <ul class=\"d-block list-unstyled bg-white px-3\">
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <li>
                    <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\" class=\"text-decoration-none d-flex justify-content-between border-bottom align-items-center my-auto px-3\">
                        <div class=\"d-block d-md-none sidebar-login d-flex gap-3 align-items-center my-3\">
                            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/user-pink.png"), "html", null, true);
            echo "\"
                                 alt=\"icône profil\"
                                 style=\"max-height: 50px\">
                            <h3 class=\"category-header text-f46a79 fw-bold\">Mon compte</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"text-decoration-none d-flex justify-content-between border-bottom align-items-center my-auto px-3\">
                        <div class=\"d-block d-md-none sidebar-login d-flex gap-3 align-items-center my-3\">
                            <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/logout-pink.png"), "html", null, true);
            echo "\"
                                 alt=\"icône déconnexion\"
                                 style=\"max-height: 50px\">
                            <h3 class=\"category-header text-f46a79 fw-bold\">Déconnexion</h3>
                        </div>
                    </a>
                </li>
            ";
        } else {
            // line 36
            echo "                <li>
                    <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"text-decoration-none d-flex justify-content-between border-bottom align-items-center my-auto px-3\">
                        <div class=\"d-block d-md-none sidebar-login d-flex gap-3 align-items-center my-3\">
                            <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/login-pink.png"), "html", null, true);
            echo "\"
                                 alt=\"icône connexion\"
                                 style=\"max-height: 50px\">
                            <h3 class=\"category-header text-f46a79 fw-bold\">Connexion</h3>
                        </div>
                    </a>
                </li>
            ";
        }
        // line 47
        echo "            <li>
                <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\" class=\"text-decoration-none d-flex justify-content-between border-bottom align-items-center my-auto px-3\">
                    <div class=\"d-block d-md-none sidebar-login d-flex gap-3 align-items-center my-3\">
                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/cart-pink.png"), "html", null, true);
        echo "\"
                             alt=\"icône panier\"
                             style=\"max-height: 50px\">
                        <h3 class=\"category-header text-f46a79 fw-bold\">Panier</h3>
                    </div>
                </a>
            </li>
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 58
            echo "                <li>
                    <div class=\"main-category d-flex justify-content-between border-bottom align-items-center my-auto px-3\"
                         data-target=\"";
            // line 60
            echo twig_escape_filter($this->env, ("subcategory" . twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60)), "html", null, true);
            echo "\">
                        <div class=\"d-flex gap-3 align-items-center my-3\">
                            <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 62), "path", [], "any", false, false, false, 62))), "html", null, true);
            echo "\"
                                alt=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 63), "alt", [], "any", false, false, false, 63), "html", null, true);
            echo "\"
                                style=\"max-height: 50px\">
                            <h3 class=\"category-header text-f46a79 fw-bold\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</h3>
                        </div>
                        <i class=\"bi bi-caret-right align-self-center text-fd2048\"></i>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </ul>
    </div>
    <div id=\"sidebar-overlay\"
         class=\"position-fixed top-0 start-0 w-100 h-100 bg-white opacity-50\"
         data-action=\"click->toggle-sidebar-categories#toggle click->toggle-sidebar-categories#hide\"
         style=\"z-index: 1;\">
    </div>
</div>

";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 81
            echo "    <div id =\"";
            echo twig_escape_filter($this->env, ("subcategory" . twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 81)), "html", null, true);
            echo "\"
         class=\"child-category col-12 col-md-4 text-black position-absolute bg-white min-vh-100 d-none px-3\"
         data-controller=\"toggle-subcategory\"
         style=\"z-index: 999;\">
        <div class=\"d-flex align-items-center my-3 gap-3 border-bottom\"
             data-action=\"click->toggle-subcategory#toggle\">
            <i class=\"bi bi-caret-left align-self-center text-fd2048\"></i>
            <div class=\"d-flex gap-3 align-items-center my-3\">
                <h2 class=\"text-f46a79 category-header\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</h2>
                <img src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 90), "path", [], "any", false, false, false, 90))), "html", null, true);
            echo "\"
                     alt=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 91), "alt", [], "any", false, false, false, 91), "html", null, true);
            echo "\"
                     style=\"max-height: 50px\">
            </div>
        </div>
        ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 96
                echo "            <h3 class=\"text-f46a79\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 96), "html", null, true);
                echo "</h3>
            ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "children", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
                    // line 98
                    echo "                <a class=\"text-reset text-decoration-none\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["slug" => twig_get_attribute($this->env, $this->source, $context["subcat"], "slug", [], "any", false, false, false, 98)]), "html", null, true);
                    echo "\">
                    <p class=\"category-link\" style=\"margin-left: 10px;\">";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcat"], "name", [], "any", false, false, false, 99), "html", null, true);
                    echo "</p>
                </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "components/_sidebarcategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 103,  235 => 102,  226 => 99,  221 => 98,  217 => 97,  212 => 96,  208 => 95,  201 => 91,  197 => 90,  193 => 89,  181 => 81,  177 => 80,  166 => 71,  154 => 65,  149 => 63,  145 => 62,  140 => 60,  136 => 58,  132 => 57,  122 => 50,  117 => 48,  114 => 47,  103 => 39,  98 => 37,  95 => 36,  84 => 28,  79 => 26,  68 => 18,  63 => 16,  60 => 15,  58 => 14,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_sidebarcategories.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/_sidebarcategories.html.twig");
    }
}
