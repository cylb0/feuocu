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

/* components/_infos.html.twig */
class __TwigTemplate_9fff93b8bb665a9376996bc3a1f61d72 extends Template
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
        echo "<div class=\"infos container-fluid bg-fd2048 py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-2 col-md-4 col-sm-6 d-flex flex-column text-center\">
            <img class=\"infos-image mx-auto\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/startup.png"), "html", null, true);
        echo "\" alt=\"icône fusée\">
            <h2 class=\"fw-bold fs-5 text-dark\">Livraison rapide</h2>
            <p class=\"fs-6 text-dark\">Colissimo, Chronopost 24h, Mondial relay, Click & Collect</p>
        </div>
        <div class=\"col-lg-2 col-md-4 col-sm-6 d-flex flex-column text-center\">
            <img class=\"infos-image mx-auto\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/carnival-mask-silhouette.png"), "html", null, true);
        echo "\" alt=\"icône incognito\">
            <h2 class=\"fw-bold fs-5 text-dark\">Discretion assurée</h2>
            <p class=\"fs-6 text-dark\">Colis sans mention</p>
        </div>
        <div class=\"col-lg-2 col-md-4 col-sm-6 d-flex flex-column text-center\">
            <img class=\"infos-image mx-auto\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/credit-card.png"), "html", null, true);
        echo "\" alt=\"icône paiement\">
            <h2 class=\"fw-bold fs-5 text-dark\">Paiement en 3x sans frais</h2>
            <p class=\"fs-6 text-dark\">Dès 150 euros d'achat</p>
        </div>
        <div class=\"col-lg-2 col-md-4 col-sm-6 d-flex flex-column text-center\">
            <img class=\"infos-image mx-auto\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/money.png"), "html", null, true);
        echo "\" alt=\"icône satisfait remboursé\">
            <h2 class=\"fw-bold fs-5 text-dark\">Satisfait ou remboursé</h2>
            <p class=\"fs-6 text-dark\">15 jours pour se rétracter</p>
        </div>
        <div class=\"col-lg-2 col-md-4 col-sm-6 d-flex flex-column text-center\">
            <img class=\"infos-image mx-auto\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/free-delivery.png"), "html", null, true);
        echo "\" alt=\"icône livraison\">
            <h2 class=\"fw-bold fs-5 text-dark\">Livraison offerte</h2>
            <p class=\"fs-6 text-dark\">Dès 100 euros d'achat</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "components/_infos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  66 => 19,  58 => 14,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_infos.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/_infos.html.twig");
    }
}
