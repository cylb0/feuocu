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

/* components/_starcomponent.html.twig */
class __TwigTemplate_23ce362d9b492ed876e389bcb9ace47c extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            echo "    ";
            if (($context["i"] <= ($context["note"] ?? null))) {
                // line 3
                echo "        <i class=\"bi bi-star-fill\"></i>
    ";
            } elseif (((            // line 4
$context["i"] - 0.5) <= ($context["note"] ?? null))) {
                // line 5
                echo "        <i class=\"bi bi-star-half\"></i>
    ";
            } else {
                // line 7
                echo "        <i class=\"bi bi-star\"></i>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "components/_starcomponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  49 => 5,  47 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_starcomponent.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/_starcomponent.html.twig");
    }
}
