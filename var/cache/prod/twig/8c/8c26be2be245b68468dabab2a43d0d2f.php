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

/* shop/_results.html.twig */
class __TwigTemplate_0347a6d5487967b44a6951691bf4f62b extends Template
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
        echo "<div class=\"container my-3 mx-auto\">
    <div class=\"row\">
        <div class=\"col-12 mt-3\">
            ";
        // line 4
        if (($context["products"] ?? null)) {
            // line 5
            echo "                <h1 class=\"mx-auto\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["products"] ?? null)), "html", null, true);
            echo " Résultat";
            echo (((twig_length_filter($this->env, ($context["products"] ?? null)) > 1)) ? ("s") : (""));
            echo "</h1>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 7
                echo "                    ";
                $this->loadTemplate("shop/_productcard.html.twig", "shop/_results.html.twig", 7)->display(twig_array_merge($context, ["product" => $context["product"]]));
                // line 8
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "                <h1 class=\"mx-auto\">Pas de résultats</h1>
            ";
        }
        // line 12
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "shop/_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 12,  88 => 10,  85 => 9,  71 => 8,  68 => 7,  51 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/_results.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/shop/_results.html.twig");
    }
}
