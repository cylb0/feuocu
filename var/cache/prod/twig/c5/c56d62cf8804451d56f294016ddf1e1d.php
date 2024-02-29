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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_8e913ee4d0d1f810ca9e1fb3d59de8f7 extends Template
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
        echo "Qui c'est qui a un compte maintenant ? C'est toi !
<a href=\"https://www.feuocu.fr\">Viens chercher le plus gros truc que tu peux te mettre !</a>";
    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/confirmation_email.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/registration/confirmation_email.html.twig");
    }
}
