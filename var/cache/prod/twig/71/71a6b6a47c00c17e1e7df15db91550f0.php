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

/* pages/about.html.twig */
class __TwigTemplate_115e89f13dba0c667f1e553268082745 extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "pages/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "A propos";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-8 mx-auto my-3\">
                <h1>Qui sommes-nous ?</h1>
                <div class=\"row\">
                    Bienvenue sur Feuocu, votre sexshop en ligne dédié à l'érotisme et à la sensualité. Notre objectif est de vous proposer une sélection de produits de qualité pour satisfaire toutes vos envies et fantasmes.

                    Chez Feuocu, nous croyons que la sexualité est une partie importante de la vie et nous sommes là pour vous aider à découvrir de nouveaux plaisirs. Nous nous engageons à offrir un environnement sûr et respectueux à nos clients et à respecter leur vie privée.

                    Nous sommes fiers de proposer une large gamme de produits, des sex toys aux lubrifiants en passant par la lingerie et les accessoires. Tous nos produits sont soigneusement sélectionnés pour leur qualité et leur sécurité.

                    Nous travaillons avec les meilleurs fournisseurs pour vous offrir des produits de qualité à des prix compétitifs. Notre équipe est composée de professionnels passionnés qui sont là pour vous aider à trouver les produits qui répondent le mieux à vos besoins.

                    Nous sommes également là pour vous fournir des informations et des conseils sur la sexualité et l'utilisation de nos produits. N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations.

                    <p class=\"mt-3\"><i><b>Merci de votre confiance et nous sommes impatients de vous aider à explorer votre sexualité avec Feuocu.</b></i></p>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/love-and-romance.png"), "html", null, true);
        echo "\" alt=\"icone love\">
                </div>
            </div>
        </div>
    </div>

    ";
        // line 30
        $this->loadTemplate("components/_infos.html.twig", "pages/about.html.twig", 30)->display($context);
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  87 => 30,  78 => 24,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/about.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/pages/about.html.twig");
    }
}
