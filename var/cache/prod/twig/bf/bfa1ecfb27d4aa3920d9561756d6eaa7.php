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

/* components/_textband.html.twig */
class __TwigTemplate_dc988166b8e2cb12b420d7084881c098 extends Template
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
        echo "<div class=\"shadow-sm\" style=\"background-color: ";
        echo twig_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
        echo "; color: ";
        echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
        echo ";\">
    <div class=\"container h-30 d-flex align-items-center justify-content-center small fw-bold\">
        ";
        // line 3
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "components/_textband.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_textband.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/_textband.html.twig");
    }
}
