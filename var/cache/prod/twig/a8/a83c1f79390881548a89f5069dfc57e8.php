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

/* admin/_headeradmin.html.twig */
class __TwigTemplate_025a14e337ebbf25ede20027ed4ccbd8 extends Template
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
        echo "<div class=\"container-fluid bg-dark shadow-lg position-fixed top-0 left-0\" style=\"height: 50px; z-index: 999;\">
    <div class=\"row align-items-center justify-content-between p-1 my-1\">
        <div class=\"col-4 col-md-2 d-flex text-center me-auto\">
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" class=\"img-fluid\" style=\"min-width: 60px; max-height: 30px;\">
            </a>
            <div class=\"d-block d-lg-none text-white ps-3\" data-action=\"click->admin-toggle-sidebar#toggle\">
                <i class=\"bi bi-list text-white fs-3\"></i>
            </div>
        </div>
        <div class=\"col-4 col-md-6 text-center\">
            <span style=\"font-size: 16px; color: white; letter-spacing: 5px;\">Administration</span>
        </div>
        <div class=\"col-4 col-md-2 text-center ms-auto\">
            <div class=\"d-flex justify-content-center gap-3\">
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"d-flex flex-column align-items-center text-white text-decoration-none smaller\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/www.png"), "html", null, true);
        echo "\" alt=\"icône vers le site\" class=\"mr-2\" style=\"width: 1.8rem; height: 1.8rem;\">
                    <span class=\"d-none\">Vers le site</span>
                </a>
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"d-flex flex-column align-items-center text-white text-decoration-none smaller\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/logout.png"), "html", null, true);
        echo "\" alt=\"icône déconnexion\" class=\"mr-2\" style=\"width: 1.8rem; height: 1.8rem;\">
                    <span class=\"d-none\">Déconnexion</span>
                </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/_headeradmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  70 => 20,  64 => 17,  60 => 16,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_headeradmin.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/admin/_headeradmin.html.twig");
    }
}
