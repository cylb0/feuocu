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

/* pages/delivery.html.twig */
class __TwigTemplate_2912ece53471e0948603efc69dc68e41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basenav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("basenav.html.twig", "pages/delivery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Livraison & Discretion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-8 mx-auto my-3\">
                <div class=\"row\">
                    <h1>Livraison discrète</h1>
                    <p>Chez FeuOcu, nous prenons la discrétion très au sérieux. Nous comprenons que la confidentialité est d'une importance vitale pour nos clients et nous mettons tout en œuvre pour assurer une livraison discrète de vos commandes. Dans cette page, nous allons vous expliquer en détail comment nous procédons pour garantir que votre commande arrive chez vous en toute discrétion.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-6 col-lg-3\">
                        <div class=\"d-flex align-items-center gap-3 mb-3\">
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/mute.png"), "html", null, true);
        echo "\"
                                alt=\"icone discretion\"
                                style=\"max-height: 50px;\">
                            <h2 class=\"text-center h4\">Emballage discret</h2>
                        </div>
                        <p>Nous expédions toutes les commandes dans des emballages neutres et discrets, sans aucune mention de notre nom ou de notre marque. De cette façon, personne ne saura ce que vous avez commandé et de qui cela vient.</p>
                    </div>
                    <div class=\"col-6 col-lg-3\">
                        <p>Nous travaillons avec des transporteurs de confiance qui respectent notre politique de discrétion et de confidentialité. Votre commande sera livrée directement à votre adresse de livraison, sans qu'il soit nécessaire de signer ou de fournir des informations personnelles.</p>
                        <div class=\"d-flex align-items-center gap-3 mb-3\">
                            <h2 class=\"text-center h4\">Livraison anonyme</h2>
                            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/incognito.png"), "html", null, true);
        echo "\"
                                 alt=\"icone incognito\"
                                 style=\"max-height: 50px;\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-3\">
                        <div class=\"d-flex align-items-center gap-3 mb-3\">
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/confidential.png"), "html", null, true);
        echo "\"
                                 alt=\"icone secret\"
                                 style=\"max-height: 50px;\">
                            <h2 class=\"text-center h4\">Informations de suivi</h2>
                        </div>
                        <p>Si vous choisissez de suivre votre commande en ligne, nous vous fournirons un numéro de suivi confidentiel qui ne contient aucune information sur la nature de votre commande ou de notre entreprise. Vous pouvez donc suivre l'acheminement de votre colis en toute discrétion.</p>
                    </div>
                    <div class=\"col-6 col-lg-3\">
                        <p>Nous ne partagerons jamais vos informations personnelles avec des tiers, sauf dans le cas où cela est nécessaire pour expédier votre commande. Nous vous garantissons une confidentialité totale et un respect de votre vie privée à tout moment.</p>
                        <div class=\"d-flex align-items-center gap-3 mb-3\">
                            <h2 class=\"text-center h4\">Respect total de la vie privée</h2>
                            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/confidential.png"), "html", null, true);
        echo "\"
                                 alt=\"icone confidentiel\"
                                 style=\"max-height: 50px;\">
                        </div>
                    </div>
                </div>
                <p>Chez FeuOcu, nous sommes fiers de notre engagement envers la discrétion de livraison. Nous comprenons que la confidentialité est d'une importance vitale pour nos clients et nous sommes déterminés à vous offrir la meilleure expérience de livraison possible. Si vous avez des questions ou des préoccupations concernant la discrétion de livraison, n'hésitez pas à nous contacter. Nous sommes là pour vous aider.</p>
            </div>
        </div>
    </div>

    ";
        // line 56
        $this->loadTemplate("components/_infos.html.twig", "pages/delivery.html.twig", 56)->display($context);
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/delivery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  122 => 56,  108 => 45,  94 => 34,  84 => 27,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/delivery.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/pages/delivery.html.twig");
    }
}
