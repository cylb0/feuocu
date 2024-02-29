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

/* components/header/_cartsize.html.twig */
class __TwigTemplate_90f076410538b8bb6e5bee0e8de1627c extends Template
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
        echo "<div
    id=\"cart-count\"
    class=\"text-fd2048 fw-bold position-absolute top-50 start-50 translate-middle mt-1\"
    data-controller=\"cart-counter\"
    data-action=\"
        add-cart:added@window->cart-counter#update
        cart-quantity:updated@window->cart-counter#update
        cart-delete:removed@window->cart-counter#update\">
    <div data-cart-counter-target=\"count\"></div>
    <div id=\"spinner-cart-counter-div\" class=\"position-relative\" data-cart-counter-target=\"spinner\">
        <div class=\"spinner-border text-danger\" role=\"status\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "components/header/_cartsize.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/header/_cartsize.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/header/_cartsize.html.twig");
    }
}
