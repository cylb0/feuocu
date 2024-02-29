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

/* components/_footer.html.twig */
class __TwigTemplate_4eeddeaabaeda8a8a9892d7bf60dbe6d extends Template
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
        echo "<footer class=\"footer container-fluid bg-fd2048 text-white px-3 py-4 ps-md-5\">
    <div class=\"row\">
        <p>
            Des questions, Appelez le (+33) 6 69 69 69 69
        </p>
    </div>
    <div class=\"row d-flex justify-content-between mb-3\">
        <div class=\"col-10 col-md-3 mx-auto\">
            <h5 class=\"mb-3\">Service client</h5>
            <ul class=\"list-unstyled d-block\">
                <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delivery");
        echo "\">Livraison et discrétion</a></li>
                <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_return");
        echo "\">Retours</a></li>
                <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payments");
        echo "\">Modes de paiement</a></li>
            </ul>
        </div>

        <div class=\"col-10 col-md-3 mx-auto\">
            <h5 class=\"mb-3\">A propos</h5>
            <ul class=\"list-unstyled d-block\">
                <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a></li>
                <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">A propos de nous</a></li>
            </ul>
        </div>

        <div class=\"col-10 col-md-3 mx-auto\">
            <h5 class=\"mb-3\">Fidélité</h5>
            <ul class=\"list-unstyled d-block\">
                <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gift");
        echo "\">Cartes cadeaux</a></li>
                <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\">Mon compte</a></li>
            </ul>
        </div>

        <div class=\"col-10 col-md-3 mx-auto\">
            <h5 class=\"mb-3\">Informations</h5>
            <ul class=\"list-unstyled d-block\">
                <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu");
        echo "\">Conditions générales</a></li>
                <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rgpd");
        echo "\">Mentions légales</a></li>
                <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq");
        echo "\">FAQ</a></li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-10 col-md-3 me-auto\">
            <img
                    class=\"logo-image\"
                    src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_white.png"), "html", null, true);
        echo "\"
                    alt=\"Logo Header\"
                    style=\"max-height: 60px;\">
            <p>
                FeuOCul France
            </p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "components/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  103 => 38,  99 => 37,  95 => 36,  85 => 29,  81 => 28,  71 => 21,  67 => 20,  57 => 13,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_footer.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/_footer.html.twig");
    }
}
