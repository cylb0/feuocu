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

/* components/header/_hamburger.html.twig */
class __TwigTemplate_61a70fb4f1da5c3452518b2c53641ffa extends Template
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
        echo "<div class=\"d-block d-md-none me-3\">
    <i class=\"bi bi-list text-white fs-3\" data-action=\"click->toggle-sidebar-categories#toggle\"></i>
</div>";
    }

    public function getTemplateName()
    {
        return "components/header/_hamburger.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/header/_hamburger.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/header/_hamburger.html.twig");
    }
}
