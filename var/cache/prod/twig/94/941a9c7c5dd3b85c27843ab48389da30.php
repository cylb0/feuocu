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

/* profile/index.html.twig */
class __TwigTemplate_3add4e9d51afd9de6f6c7b19dd51058f extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "
        <div class=\"container my-3 text-center\">
            <div class=\"row\">
                <div class=\"col-12 mx-auto border-bottom\">
                    <h1>Mon compte</h1>
                    <h2 class=\"h5\">Ici vous pouvez gérer les informations relatives à votre compte.</h2>
                </div>
            </div>
            <div class=\"row mt-3\">
                <ul class=\"list-unstyled d-flex flex-column gap-2\">
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_profile");
            echo "\">
                            Modifier mon profil
                        </a>
                    </li>
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password");
            echo "\">
                            Changer votre mot de passe
                        </a>
                    </li>
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none fw-bolder\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    ";
        }
    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  82 => 23,  74 => 18,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/profile/index.html.twig");
    }
}
