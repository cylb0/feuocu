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

/* pages/return.html.twig */
class __TwigTemplate_ae5791172b7f826ecd84986ca11baf0f extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "pages/return.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Retours";
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
                    <h1>Retours</h1>
                    <p>Chez FeuOcu, nous voulons que vous soyez satisfait de votre achat. Si pour une raison quelconque vous n'êtes pas satisfait, nous acceptons les retours de produits dans les 14 jours suivant la date de réception.</p>
                </div>
                <div class=\"row text-center mx-auto mt3\">
                    <h2 class=\"h4\">Conditions de retour</h2>
                    <div class=\"col-12 col-md-4 mt-1\">Les produits doivent être retournés dans leur état d'origine, non ouverts et non utilisés.</div>
                    <div class=\"col-12 col-md-4 mt-1\">Les produits doivent être accompagnés d'une preuve d'achat.</div>
                    <div class=\"col-12 col-md-4 mt-1\">Les frais d'expédition de retour sont à la charge du client.</div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"d-flex gap-3\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/customer-service.png"), "html", null, true);
        echo "\"
                             alt=\"icone service client\"
                             style=\"max-height: 50px;\">
                        <p>Si vous souhaitez retourner un produit, veuillez contacter notre service clientèle par téléphone ou par e-mail pour obtenir des instructions sur la façon de procéder. Nous traiterons votre demande de retour dans les plus brefs délais.</p>
                    </div>
                    <div class=\"d-flex gap-3\">
                        <p>Veuillez noter que certaines exceptions peuvent s'appliquer à notre politique de retour, notamment pour les produits en vente, personnalisés ou intimes. Si vous avez des questions sur notre politique de retour, n'hésitez pas à contacter notre service clientèle pour obtenir des clarifications.</p>
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/rolling-eyes.png"), "html", null, true);
        echo "\"
                            alt=\"icone yeux en l'air\"
                            style=\"max-height: 50px;\">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "pages/return.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  75 => 21,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/return.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/pages/return.html.twig");
    }
}
