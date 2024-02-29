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

/* components/header/_icons.html.twig */
class __TwigTemplate_932af3b50245cef29d3a3fe040014f82 extends Template
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
        echo "<div class=\"icons ms-auto d-none d-md-flex justify-content-end gap-0\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\" class=\"icon d-flex flex-column align-items-center text-decoration-none\">
            <img
                class=\"icon-logo img-fluid\"
                alt=\"icône profil\"
                src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/user.png"), "html", null, true);
            echo "\">
            <div class=\"text-white smaller mt-3 d-none d-md-block\">Mon profil</div>
        </a>
        <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"icon d-flex flex-column align-items-center text-decoration-none\">
            <img
                class=\"icon-logo img-fluid\"
                alt=\"icône déconnexion\"
                src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/logout.png"), "html", null, true);
            echo "\">
            <div class=\"text-white smaller mt-3 d-none d-md-block\">Déconnexion</div>
        </a>
    ";
        } else {
            // line 18
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"icon d-flex flex-column align-items-center text-decoration-none\">
            <img
                class=\"icon-logo\"
                alt=\"icône connexion\"
                src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/login.png"), "html", null, true);
            echo "\">
            <div class=\"text-white smaller mt-3 d-none d-md-block\">Connexion</div>
        </a>
    ";
        }
        // line 26
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\" id=\"basket\" class=\"icon d-flex flex-column align-items-center text-decoration-none\">
        <div class=\"position-relative\">
            <img
                class=\"icon-logo\"
                alt=\"icône panier\"
                src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/cart.png"), "html", null, true);
        echo "\">
            ";
        // line 32
        $this->loadTemplate("./components/header/_cartsize.html.twig", "components/header/_icons.html.twig", 32)->display($context);
        // line 33
        echo "        </div>
        <div class=\"text-white smaller mt-3 d-none d-md-block\">Panier</div>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "components/header/_icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  98 => 32,  94 => 31,  85 => 26,  78 => 22,  70 => 18,  63 => 14,  56 => 10,  50 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/header/_icons.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/header/_icons.html.twig");
    }
}
