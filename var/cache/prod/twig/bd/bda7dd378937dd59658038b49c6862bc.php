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

/* shop/_category.html.twig */
class __TwigTemplate_2f2c034dc784ca3d3b251dab3f028d8e extends Template
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

    ";
        // line 3
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 3)) > 0)) {
            // line 4
            echo "        <div class=\"row\">
            ";
            // line 5
            $this->loadTemplate("components/_categoriesTree.html.twig", "shop/_category.html.twig", 5)->display($context);
            // line 6
            echo "            <h1 class=\"category-title mx-auto\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</h1>
            <p class=\"category-description mx-auto\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
        </div>
        <div class=\"row subcategory-links justify-content-around g-3 flex-wrap mb-3 text-center\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 11
                echo "                <div class=\"col-auto mx-auto\">
                    <a class=\"text-center link-text btn-f9b4bc rounded-pill fw-bold text-white py-2\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "slug", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>

";
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 20));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 22
                echo "            ";
                $context["filteredProducts"] = twig_array_filter($this->env, ($context["products"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "category", [], "any", false, false, false, 22) == $context["child"]) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "category", [], "any", false, false, false, 22), "isDescendantOf", [0 => $context["child"]], "method", false, false, false, 22)); });
                // line 23
                echo "            ";
                if ((twig_length_filter($this->env, ($context["filteredProducts"] ?? null)) > 0)) {
                    // line 24
                    echo "                ";
                    $this->loadTemplate("components/_textband.html.twig", "shop/_category.html.twig", 24)->display(twig_array_merge($context, ["background" => "#f9b4bc", "color" => "white", "text" => twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 24)]));
                    // line 26
                    echo "                ";
                    $context["randomProducts"] = twig_slice($this->env, $this->extensions['App\Twig\ShuffleExtension']->shuffleArray(($context["filteredProducts"] ?? null)), 0, 10);
                    // line 27
                    echo "                ";
                    $this->loadTemplate("shop/slider/_productsslider.html.twig", "shop/_category.html.twig", 27)->display(twig_array_merge($context, ["products" => ($context["randomProducts"] ?? null)]));
                    // line 28
                    echo "            ";
                }
                // line 29
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
    ";
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "        <div class=\"row\">
            <div class=\"col-12 mt-3 mx-auto\">
                ";
            // line 35
            $this->loadTemplate("components/_categoriesTree.html.twig", "shop/_category.html.twig", 35)->display($context);
            // line 36
            echo "                <div class=\"row\">
                    <h1 class=\"category-title\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</h1>
                    <p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                </div>
                ";
            // line 40
            $this->loadTemplate("shop/_filtersCat.html.twig", "shop/_category.html.twig", 40)->display($context);
            // line 41
            echo "                ";
            if (($context["products"] ?? null)) {
                // line 42
                echo "                    ";
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
                    // line 43
                    echo "                        ";
                    $this->loadTemplate("shop/_productcard.html.twig", "shop/_category.html.twig", 43)->display(twig_array_merge($context, ["product" => $context["product"]]));
                    // line 44
                    echo "                    ";
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
                // line 45
                echo "                ";
            } else {
                // line 46
                echo "                    <p>Pas de produits à afficher.</p>
                ";
            }
            // line 48
            echo "            </div>
        </div>
    ";
        }
        // line 51
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "shop/_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 51,  205 => 48,  201 => 46,  198 => 45,  184 => 44,  181 => 43,  163 => 42,  160 => 41,  158 => 40,  153 => 38,  149 => 37,  146 => 36,  144 => 35,  140 => 33,  137 => 32,  134 => 30,  120 => 29,  117 => 28,  114 => 27,  111 => 26,  108 => 24,  105 => 23,  102 => 22,  84 => 20,  80 => 17,  70 => 13,  66 => 12,  63 => 11,  59 => 10,  53 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/_category.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/shop/_category.html.twig");
    }
}
