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

/* pages/contact.html.twig */
class __TwigTemplate_4b98033e0f2601f44c84a626e42358de extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "pages/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contact";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container my-3\">
        <div class=\"row\">
            <h1>Contactez-nous</h1>
            <p>Nous sommes ravis de vous aider avec toutes vos questions ou préoccupations. Vous pouvez nous contacter à tout moment en utilisant les informations ci-dessous, nous vous répondrons dans les plus brefs délais :</p>
            <div class=\"col-12 col-md-6 d-flex justify-content-center align-items-center\">
                <ul class=\"w-75 list-unstyled d-flex flex-column\">
                    <li class=\"d-flex justify-content-between px-3\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/telephone.png"), "html", null, true);
        echo "\" alt=\"icône téléphone\">
                        <span><strong>Téléphone :</strong> 01 23 45 67 89</span>
                    </li>
                    <li class=\"d-flex justify-content-between px-3\">
                        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/email.png"), "html", null, true);
        echo "\" alt=\"icône email\">
                        <span><strong>Email :</strong> contact@feuocu.com</span>
                    </li>
                    <li class=\"d-flex justify-content-between px-3\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/adresse.png"), "html", null, true);
        echo "\" alt=\"icône adresse\">
                        <span><strong>Adresse :</strong> 2, Les amelots, 18260 Assigny</span>
                    </li>
                </ul>
            </div>
            <div class=\"col-12 col-md-6\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1352.0958475137984!2d2.739539740266974!3d47.42980335304209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47efffc7cea08129%3A0x7dda0ac213998a93!2s13%20Rue%20de%20Veaugues%2C%2058200%20Cosne-Cours-sur-Loire!5e1!3m2!1sfr!2sfr!4v1683794481125!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
            </div>
        </div>
    </div>

    ";
        // line 32
        $this->loadTemplate("components/_infos.html.twig", "pages/contact.html.twig", 32)->display($context);
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  95 => 32,  81 => 21,  74 => 17,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contact.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/pages/contact.html.twig");
    }
}
