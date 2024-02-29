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

/* shop/_productcard.html.twig */
class __TwigTemplate_5d509739ea91d07c30b678d9139c07b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"product_card row justify-content-center mb-3\">
        <div>
            <div class=\"card shadow-0 rounded-3 bg-white\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 d-flex justify-content-center\">
                            <div class=\"bg-image rounded\">
                                ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 9)) {
            // line 10
            echo "                                    <div class=\"position-absolute bg-fd2048 text-white fw-bold rounded-3 p-2\">
                                        ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 11), "type", [], "any", false, false, false, 11) == "percentage")) {
                // line 12
                echo "                                            ";
                echo twig_escape_filter($this->env, (("-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12)) . "%"), "html", null, true);
                echo "
                                        ";
            } else {
                // line 14
                echo "                                            ";
                echo twig_escape_filter($this->env, (("-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14)) . "€"), "html", null, true);
                echo "
                                        ";
            }
            // line 16
            echo "                                    </div>
                                ";
        }
        // line 18
        echo "
                                ";
        // line 19
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 19);
        // line 20
        echo "                                ";
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 0)) {
            // line 21
            echo "                                    ";
            $context["image"] = (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
            // line 22
            echo "                                ";
        } else {
            // line 23
            echo "                                    ";
            $context["image"] = ["path" => "products/default.png", "alt" => "Image par defaut"];
            // line 24
            echo "                                ";
        }
        // line 25
        echo "                                <img
                                    src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 26))), "medium"), "html", null, true);
        echo "\"
                                    alt=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, false, 27), "html", null, true);
        echo "\"
                                    class=\"img-fluid\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-6\">
                            <h5>";
        // line 32
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 32)), "html", null, true);
        echo "</h5>
                            <a class=\"brand-link text-decoration-none\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_brand", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, false, 33), "slug", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">
                                <h6>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</h6>
                            </a>
                            <div class=\"d-flex flex-row\">
                                <div class=\"text-danger mb-1 me-2\">
                                ";
        // line 38
        $this->loadTemplate("components/_starcomponent.html.twig", "shop/_productcard.html.twig", 38)->display(twig_array_merge($context, ["note" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 38)]));
        // line 39
        echo "                                </div>
                                ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 40)) {
            // line 41
            echo "                                    <span>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 41), "html", null, true);
            echo ")</span>
                                ";
        }
        // line 43
        echo "                            </div>
                            <div>
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "features", [], "any", false, false, false, 45));
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
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 46
            echo "                                    <span class=\"small text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
                                    ";
            // line 47
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 47)) {
                // line 48
                echo "                                        <span class=\"text-muted\">&#8226;</span>
                                    ";
            }
            // line 50
            echo "                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            </div>
                            <p class=\"text-truncate mb-4 mb-md-0\">
                                ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 53), "html", null, true);
        echo "
                            </p>
                        </div>
                        <div class=\"col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start\">
                            <div class=\"d-flex flex-row align-items-center mb-1\">
                                ";
        // line 58
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 58)) > 0) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isInStock", [], "any", false, false, false, 58))) {
            // line 59
            echo "                                    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 59)) > 1)) {
                // line 60
                echo "                                        <span class=\"me-1\">A partir de </span>
                                    ";
            }
            // line 62
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 62)) {
                // line 63
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 63), "type", [], "any", false, false, false, 63) == "percentage")) {
                    // line 64
                    echo "                                            <h4 class=\"me-1\">";
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 64) * (100 - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64))) / 100), 2), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                    echo "</h4>
                                            <span class=\"text-danger me-1\"><s>";
                    // line 65
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 65), 2), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                    echo "</s></span>
                                        ";
                } else {
                    // line 67
                    echo "                                            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 67) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67)) > 0)) {
                        // line 68
                        echo "                                                <h4 class=\"me-1\">";
                        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 68) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68)), 2), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                        echo "</h4>
                                            ";
                    } else {
                        // line 70
                        echo "                                                <h4 class=\"me-1\">0€ OMG!</h4>
                                            ";
                    }
                    // line 72
                    echo "                                            <span class=\"text-danger me-1\"><s>";
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 72), 2), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                    echo "</s></span>
                                        ";
                }
                // line 74
                echo "                                    ";
            } else {
                // line 75
                echo "                                        <h4 class=\"me-1\">";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 75), 2), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                echo "</h4>
                                    ";
            }
            // line 77
            echo "                                ";
        } else {
            // line 78
            echo "                                    <i class=\"bi bi-dash-circle text-fd2048 me-2\"></i><span class=\"text-fd2048\">Indisponible</span>
                                ";
        }
        // line 80
        echo "                            </div>
                            <div class=\"d-flex flex-column mb-1\">
                                <div class=\"available-colors d-flex my-1 gap-1\">
                                    ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isInStock", [], "any", false, false, false, 83)) {
            // line 84
            echo "                                        ";
            $context["colorValues"] = [];
            // line 85
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 86
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["variant"], "stock", [], "any", false, false, false, 86) > 0)) {
                    // line 87
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["variant"], "productVariantOptions", [], "any", false, false, false, 87));
                    foreach ($context['_seq'] as $context["_key"] => $context["variantOption"]) {
                        // line 88
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variantOption"], "option", [], "any", false, false, false, 88), "type", [], "any", false, false, false, 88) == "color")) {
                            // line 89
                            echo "                                                        ";
                            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variantOption"], "value", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), ($context["colorValues"] ?? null))) {
                                // line 90
                                echo "                                                            <span class=\"available-color\" style=\"background-color: ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variantOption"], "value", [], "any", false, false, false, 90), "hexacode", [], "any", false, false, false, 90), "html", null, true);
                                echo "; border: 1px solid lightgray\"></span>
                                                            ";
                                // line 91
                                $context["colorValues"] = twig_array_merge(($context["colorValues"] ?? null), [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variantOption"], "value", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91)]);
                                // line 92
                                echo "                                                        ";
                            }
                            // line 93
                            echo "                                                    ";
                        }
                        // line 94
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variantOption'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "                                            ";
                }
                // line 96
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                    ";
        }
        // line 98
        echo "                                </div>
                            </div>
                            <div class=\"mb-1\">
                                <a class=\"d-block text-center btn-f9b4bc rounded fw-bold text-white p-1 w-100\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\">
                                    <span>Voir plus</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "shop/_productcard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 101,  318 => 98,  315 => 97,  309 => 96,  306 => 95,  300 => 94,  297 => 93,  294 => 92,  292 => 91,  287 => 90,  284 => 89,  281 => 88,  276 => 87,  273 => 86,  268 => 85,  265 => 84,  263 => 83,  258 => 80,  254 => 78,  251 => 77,  245 => 75,  242 => 74,  236 => 72,  232 => 70,  226 => 68,  223 => 67,  218 => 65,  213 => 64,  210 => 63,  207 => 62,  203 => 60,  200 => 59,  198 => 58,  190 => 53,  186 => 51,  172 => 50,  168 => 48,  166 => 47,  161 => 46,  144 => 45,  140 => 43,  134 => 41,  132 => 40,  129 => 39,  127 => 38,  120 => 34,  116 => 33,  112 => 32,  104 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  88 => 22,  85 => 21,  82 => 20,  80 => 19,  77 => 18,  73 => 16,  67 => 14,  61 => 12,  59 => 11,  56 => 10,  54 => 9,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/_productcard.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/shop/_productcard.html.twig");
    }
}
