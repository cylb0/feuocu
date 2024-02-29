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

/* cart/_cartproduct.html.twig */
class __TwigTemplate_ad2e24093dc4cc3dfd3bd8dbf2e4243f extends Template
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
        echo "<div class=\"row my-3\" data-variant=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" style=\"height: 100px;\" data-controller=\"cart-quantity cart-delete\">
    <div class=\"col-3 d-flex align-items-center justify-content-center\" style=\"height: 100%;\">
        ";
        // line 3
        $context["images"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 3), "product", [], "any", false, false, false, 3), "images", [], "any", false, false, false, 3);
        // line 4
        echo "        ";
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 0)) {
            // line 5
            echo "            ";
            $context["image"] = (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
            // line 6
            echo "        ";
        } else {
            // line 7
            echo "            ";
            $context["image"] = ["path" => "products/default.png", "alt" => "Image default"];
            // line 8
            echo "        ";
        }
        // line 9
        echo "        <img
            src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 10))), "html", null, true);
        echo "\"
            alt=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
            style=\"height: 100%;\"/>
    </div>
    <div class=\"col-3 col-md-4\">
        <a class=\"text-reset text-decoration-none fw-bold\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 15), "product", [], "any", false, false, false, 15), "slug", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\">
            <p class=\"mb-0\">";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 16), "product", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16)), "html", null, true);
        echo "</p>
        </a>
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 18), "product", [], "any", false, false, false, 18), "discount", [], "any", false, false, false, 18)) {
            // line 19
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 19), "product", [], "any", false, false, false, 19), "discount", [], "any", false, false, false, 19), "type", [], "any", false, false, false, 19) == "percentage")) {
                // line 20
                echo "                <div>
                    <span
                            class=\"fw-bold\"
                            data-cart-quantity-target=\"price\">";
                // line 23
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 23), "product", [], "any", false, false, false, 23), "price", [], "any", false, false, false, 23) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 23), "price", [], "any", false, false, false, 23)) * (100 - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 23), "product", [], "any", false, false, false, 23), "discount", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23))) / 100), 2, ".", ""), "html", null, true);
                echo "</span>
                    <span class=\"fw-bold\">€</span>
                </div>
                <div>
                    <span><s>";
                // line 27
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 27), "product", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27)) . "€"), "html", null, true);
                echo "</s></span>
                    <span class=\"text-fd2048\">";
                // line 28
                echo twig_escape_filter($this->env, (("(-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 28), "product", [], "any", false, false, false, 28), "discount", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28)) . "%)"), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 31
                echo "                <div>
                    ";
                // line 32
                $context["totalPrice"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 32), "product", [], "any", false, false, false, 32), "price", [], "any", false, false, false, 32) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 32), "price", [], "any", false, false, false, 32)) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 32), "product", [], "any", false, false, false, 32), "discount", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32));
                // line 33
                echo "                    ";
                if ((($context["totalPrice"] ?? null) < 0)) {
                    // line 34
                    echo "                        ";
                    $context["totalPrice"] = 0;
                    // line 35
                    echo "                    ";
                }
                // line 36
                echo "                    <span class=\"fw-bold price\" data-cart-quantity-target=\"price\">";
                echo twig_escape_filter($this->env, ($context["totalPrice"] ?? null), "html", null, true);
                echo "</span>
                    <span class=\"fw-bold\">€</span>
                </div>
                <div>
                    <span><s>";
                // line 40
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 40), "product", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40)) . "€"), "html", null, true);
                echo "</s></span>
                    <span class=\"text-fd2048\">";
                // line 41
                echo twig_escape_filter($this->env, (("(-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 41), "product", [], "any", false, false, false, 41), "discount", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41)) . "€)"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 44
            echo "        ";
        } else {
            // line 45
            echo "            <span
                    class=\"fw-bold price\"
                    data-cart-quantity-target=\"price\">";
            // line 47
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 47), "product", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47)), "html", null, true);
            echo "</span>
            <span class=\"fw-bold\">€</span>
        ";
        }
        // line 50
        echo "        <p>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 51), "productVariantOptions", [], "any", false, false, false, 51));
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
        foreach ($context['_seq'] as $context["_key"] => $context["productVariantOption"]) {
            // line 52
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productVariantOption"], "value", [], "any", false, false, false, 52), "html", null, true);
            echo "
                ";
            // line 53
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 53)) {
                // line 54
                echo "                    -
                ";
            }
            // line 56
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productVariantOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </p>
    </div>
    <div class=\"col-3 col-md-2\">
        <input
                name=\"cart_item_quantity\"
                type=\"number\"
                step=\"1\"
                value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity", [], "any", false, false, false, 64), "html", null, true);
        echo "\"
                min=\"1\" max=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 65), "stock", [], "any", false, false, false, 65), "html", null, true);
        echo "\" required
                data-action=\"cart-quantity#update\"
                data-cart-quantity-target=\"quantityInput\">
    </div>
    <div class=\"col-2\">
        <span
                id=\"";
        // line 71
        echo twig_escape_filter($this->env, ("cart-total_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)), "html", null, true);
        echo "\"
                class=\"fw-bold\"
                data-cart-quantity-target=\"totalItem\"
                data-cart-total-target=\"totalItem\">
        </span>
        <span class=\"fw-bold\">€</span>
    </div>
    <div class=\"col-1\">
        <button class=\"bg-transparent border-0\">
            <i class=\"bi bi-trash\"></i>
        </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "cart/_cartproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 71,  213 => 65,  209 => 64,  200 => 57,  186 => 56,  182 => 54,  180 => 53,  175 => 52,  158 => 51,  155 => 50,  149 => 47,  145 => 45,  142 => 44,  136 => 41,  132 => 40,  124 => 36,  121 => 35,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  104 => 28,  100 => 27,  93 => 23,  88 => 20,  85 => 19,  83 => 18,  78 => 16,  74 => 15,  67 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/_cartproduct.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/cart/_cartproduct.html.twig");
    }
}
