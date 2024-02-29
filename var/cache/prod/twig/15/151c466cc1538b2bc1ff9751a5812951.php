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

/* shop/slider/_slidercard.html.twig */
class __TwigTemplate_6b9b255b921e2a25067417667b964212 extends Template
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
        echo "<div class=\"hoverable-card text-white rounded d-flex flex-column justify-content-around p-1 pb-3\"
     style=\"height: 450px;\">

    <div class=\"p-0 mx-auto overflow-hidden rounded-3 h-50 position-relative\"
        style=\"height: 200px;\">
        ";
        // line 6
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 6);
        // line 7
        echo "        ";
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 0)) {
            // line 8
            echo "            ";
            $context["image"] = (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            ";
            $context["image"] = ["path" => "products/default.png", "alt" => "Image par defaut"];
            // line 11
            echo "        ";
        }
        // line 12
        echo "        <img
            class=\"w-100 h100\"
            src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 14))), "small"), "html", null, true);
        echo "\"
            alt=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, false, 15), "html", null, true);
        echo "\"
            style=\"height: 100%;\">

        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <div class=\"position-absolute top-0 start-0 mt-1 ms-1 bg-fd2048 text-white small fw-bold rounded-3 p-1\">
                ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 20), "type", [], "any", false, false, false, 20) == "percentage")) {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, (("-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21)) . "%"), "html", null, true);
                echo "
                ";
            } else {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, (("-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)) . "€"), "html", null, true);
                echo "
                ";
            }
            // line 25
            echo "            </div>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if ($this->env->getRuntime('App\Twig\Runtime\IsNewExtensionRuntime')->isNew(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "added", [], "any", false, false, false, 28))) {
            // line 29
            echo "            <div class=\"position-absolute top-0 end-0 mt-1 me-1 bg-success text-white small fw-bold rounded-3 p-1\">
                NEW
            </div>
        ";
        }
        // line 33
        echo "
    </div>
    <div class=\"d-flex flex-column justify-content-end my-3 mx-auto position-relative rounded h-50 flex-shrink-1\"
         style=\"height: 200px;\">
        <div class=\"text-danger mb-1 me-2 text-center\">
            ";
        // line 38
        $this->loadTemplate("components/_starcomponent.html.twig", "shop/slider/_slidercard.html.twig", 38)->display(twig_array_merge($context, ["note" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 38)]));
        // line 39
        echo "        </div>
        <span class=\"fw-bolder text-black text-center small\">
            ";
        // line 41
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 41)), "html", null, true);
        echo "
        </span>
        <span class=\"text-muted text-center mb-1 small\">
            ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "
        </span>
        <div class=\"d-flex flex-column text-center\">
            ";
        // line 47
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 47)) > 0) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isInStock", [], "any", false, false, false, 47))) {
            // line 48
            echo "                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 48)) > 1)) {
                // line 49
                echo "                    <span class=\"text-black\">
                        A partir de
                    </span>
                ";
            }
            // line 53
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 53)) {
                // line 54
                echo "                <span class=\"fw-bold text-black\">
                    ";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 55), 2), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                echo "
                </span>
                ";
            }
            // line 58
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 58)) {
                // line 59
                echo "                <div>
                    <span class=\"text-black text-decoration-line-through\">";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 60), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                echo "</span>
                    <span class=\"text-fd2048 fw-bolder\">
                        ";
                // line 62
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 62), "type", [], "any", false, false, false, 62) == "percentage")) {
                    // line 63
                    echo "                        &nbsp;  ";
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 63) * (100 - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63))) / 100), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                    echo "
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 64
($context["product"] ?? null), "discount", [], "any", false, false, false, 64), "type", [], "any", false, false, false, 64) == "gross")) {
                    // line 65
                    echo "                            ";
                    $context["totalPrice"] = (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 65) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65));
                    // line 66
                    echo "                                ";
                    if ((($context["totalPrice"] ?? null) < 0)) {
                        // line 67
                        echo "                                    ";
                        $context["totalPrice"] = 0;
                        // line 68
                        echo "                                ";
                    }
                    // line 69
                    echo "                            &nbsp;  ";
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, ($context["totalPrice"] ?? null), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                    echo "
                        ";
                }
                // line 71
                echo "                    </span>
                </div>
                ";
            }
            // line 74
            echo "            ";
        } else {
            // line 75
            echo "                <span class=\"text-fd2048 fw-bolder\">
                    Indisponible
                </span>
            ";
        }
        // line 79
        echo "
            <a class=\"text-center link-text mt-3 btn-f9b4bc rounded-pill fw-bold text-white py-2\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 80)]), "html", null, true);
        echo "\">
                Voir plus
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "shop/slider/_slidercard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 80,  209 => 79,  203 => 75,  200 => 74,  195 => 71,  189 => 69,  186 => 68,  183 => 67,  180 => 66,  177 => 65,  175 => 64,  170 => 63,  168 => 62,  163 => 60,  160 => 59,  157 => 58,  151 => 55,  148 => 54,  145 => 53,  139 => 49,  136 => 48,  134 => 47,  128 => 44,  122 => 41,  118 => 39,  116 => 38,  109 => 33,  103 => 29,  101 => 28,  98 => 27,  94 => 25,  88 => 23,  82 => 21,  80 => 20,  77 => 19,  75 => 18,  69 => 15,  65 => 14,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/slider/_slidercard.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/shop/slider/_slidercard.html.twig");
    }
}
