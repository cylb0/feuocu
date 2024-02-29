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

/* shop/_product.html.twig */
class __TwigTemplate_c3297a2ef8b347a448d2d8d8fb792f9d extends Template
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
        echo "
<div class=\"container mx-auto my-3\">
    <div class=\"row align-items-center border-bottom mb-2\">
            <div class=\"col-12 col-md-8 justify-content-center align-items-center\">
            <div class=\"row\">
                ";
        // line 7
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 7);
        // line 8
        echo "                ";
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 0)) {
            // line 9
            echo "                    ";
            $context["image"] = (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
            // line 10
            echo "                ";
        } else {
            // line 11
            echo "                    ";
            $context["image"] = ["path" => "products/default.png", "alt" => "Image par defaut"];
            // line 12
            echo "                ";
        }
        // line 13
        echo "                <img
                        id=\"main-img\"
                        class=\"img-fluid max-height-400\"
                        src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 16))), "html", null, true);
        echo "\"
                        alt=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
            </div>
            ";
        // line 19
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 1)) {
            // line 20
            echo "                <div class=\"row mt-3 \">
                    <div class=\"slider w-75 w-md-50 mx-auto\" id=\"slider\">
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 23
                echo "                            <img class=\"img-fluid max-height-100\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 23))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    </div>
                </div>
            ";
        }
        // line 28
        echo "        </div>
        <div class=\"col-12 col-md-4 d-flex flex-column align-items-start rounded bg-fd2048-light p-3\">
            <div class=\"row border-bottom pb-2\">
                <h1 id=\"product-title\" class=\"mt-0 mb-1\" data-product-id=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 32)), "html", null, true);
        echo "
                </h1>
                <h1 class=\"h2\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</h1>
                <h3 class=\"mt-0 mb-1\">
                    <img
                            src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, false, 37), "image", [], "any", false, false, false, 37), "path", [], "any", false, false, false, 37))), "brand_logo"), "html", null, true);
        echo "\"
                            alt=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, false, 38), "image", [], "any", false, false, false, 38), "alt", [], "any", false, false, false, 38), "html", null, true);
        echo "\"
                            style=\"height:40px;\">
                    <a class=\"brand-link text-decoration-none h4\"
                       href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_brand", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, false, 41), "slug", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</a>
                </h3>
            </div>

            <div class=\"row d-flex align-items-center border-bottom mt-2 pb-2\">
                <div class=\"text-danger mb-1 me-2\">
                    ";
        // line 47
        $this->loadTemplate("components/_starcomponent.html.twig", "shop/_product.html.twig", 47)->display(twig_array_merge($context, ["note" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 47)]));
        // line 48
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 48)) {
            // line 49
            echo "                        <span>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 49), "html", null, true);
            echo ")</span>
                    ";
        }
        // line 51
        echo "                </div>
            </div>

            <div class=\"row d-flex align-items-center border-bottom mt-2 pb-2\">
                ";
        // line 55
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature1", [], "any", false, false, false, 55))) {
            // line 56
            echo "                    <p class=\"m-0\"><strong><em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature1", [], "any", false, false, false, 56), "html", null, true);
            echo "</em></strong></p>
                ";
        }
        // line 58
        echo "                ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature2", [], "any", false, false, false, 58))) {
            // line 59
            echo "                    <p class=\"m-0\"><strong><em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature2", [], "any", false, false, false, 59), "html", null, true);
            echo "</em></strong></p>
                ";
        }
        // line 61
        echo "                ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature3", [], "any", false, false, false, 61))) {
            // line 62
            echo "                    <p class=\"m-0\"><strong><em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature3", [], "any", false, false, false, 62), "html", null, true);
            echo "</em></strong></p>
                ";
        }
        // line 64
        echo "            </div>

            ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "shortDescription", [], "any", false, false, false, 66)) {
            // line 67
            echo "            <div class=\"row border-bottom mt-2 pb-2\">
                <p class=\"text-start mt-1 mb-1\">
                    ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "shortDescription", [], "any", false, false, false, 69), "html", null, true);
            echo "
                </p>
            </div>
            ";
        }
        // line 73
        echo "
            ";
        // line 74
        $context["variantsInStock"] = false;
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
            // line 76
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["variant"], "stock", [], "any", false, false, false, 76) > 0)) {
                // line 77
                echo "                      ";
                $context["variantsInStock"] = true;
                // line 78
                echo "                ";
            }
            // line 79
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 80)) > 0) && ($context["variantsInStock"] ?? null))) {
            // line 81
            echo "                <div class=\"container-fluid\">
                    <form class=\"mb-2\" id=\"variations-cart_form\" method=\"GET\">
                        <div class=\"row variations-cart_form_inputs border-bottom pb-2\" data-controller=\"options\" data-product-id=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 83), "html", null, true);
            echo "\">
                            <div class=\"d-flex justify-content-center spinner-div mt-2\">
                                <div class=\"spinner-border text-danger\" role=\"status\" data-options-target=\"spinner\">
                                </div>
                            </div>
                        </div>
                        <div class=\"mt-2 pb-2\">
                            <div class=\"mb-1\">
                                ";
            // line 91
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 91)) > 1)) {
                // line 92
                echo "                                    <span id=\"priceRange\">A partir de</span>
                                ";
            }
            // line 94
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 94)) {
                // line 95
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 95), "type", [], "any", false, false, false, 95) == "percentage")) {
                    // line 96
                    echo "                                        <div>
                                            <span id=\"price\" class=\"h3 text-fd2048\">";
                    // line 97
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 97) * (100 - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 97), "value", [], "any", false, false, false, 97))) / 100), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                    echo "</span>
                                            <span class=\"h5\">TTC</span>
                                        </div>
                                        <div>
                                            <span id=\"price-before\" class=\"text-danger me-1\"><s>";
                    // line 101
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 101), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                    echo "</s></span>
                                            <span class=\"text-fd2048\">";
                    // line 102
                    echo twig_escape_filter($this->env, (("- " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102)) . "%"), "html", null, true);
                    echo "</span>
                                        </div>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 104
($context["product"] ?? null), "discount", [], "any", false, false, false, 104), "type", [], "any", false, false, false, 104) == "gross")) {
                    // line 105
                    echo "                                        <div>
                                            ";
                    // line 106
                    if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 106) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 106), "value", [], "any", false, false, false, 106)) > 0)) {
                        // line 107
                        echo "                                                <span id=\"price\" class=\"h3 text-fd2048\">";
                        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 107) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 107), "value", [], "any", false, false, false, 107)), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                        echo "</span>
                                            ";
                    } else {
                        // line 109
                        echo "                                                <span id=\"price\" class=\"h3 text-fd2048\">0€ OMG!</span>
                                            ";
                    }
                    // line 111
                    echo "                                            <span class=\"h5\">TTC</span>
                                        </div>
                                        <div>
                                            <span id=\"price-before\" class=\"text-danger me-1\"><s>";
                    // line 114
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 114), 2), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                    echo "</s></span>
                                            <span class=\"text-fd2048\">";
                    // line 115
                    echo twig_escape_filter($this->env, ("-" . $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discount", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115), 2, ".", ","), "EUR", array(), "fr")), "html", null, true);
                    echo "</span>
                                        </div>
                                    ";
                }
                // line 118
                echo "                                ";
            } else {
                // line 119
                echo "                                    <div>
                                        <b><span id=\"price\" class=\"h3 text-fd2048\">";
                // line 120
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 120), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
                echo "</span></b>
                                        <span class=\"h5\">TTC</span>
                                    </div>
                                ";
            }
            // line 124
            echo "                            </div>
                            <div class=\"d-flex align-items-center gap-2 d-none\" id=\"quantity-submit\" data-controller=\"add-cart\">
                                <span class=\"fw-bold\">Quantité</span>
                                <input
                                        class=\"width-50\"
                                        id=\"addtocart_quantity\"
                                        name=\"addtocart_quantity\"
                                        type=\"number\"
                                        step=\"1\" value=\"1\" min=\"1\" max=\"99\"
                                        data-add-cart-target=\"quantityInput\"
                                        required>
                                <button
                                        class=\"btn bg-fd2048 text-white btn-sm\"
                                        data-mdb-ripple-duration = \"0\"
                                        type=\"submit\"
                                        value=\"Ajouter au panier\"
                                        data-add-cart-target=\"submitButton\"
                                        data-action=\"add-cart#addToCart\">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            ";
        } else {
            // line 149
            echo "                <div>
                    <i class=\"bi bi-dash-circle text-fd2048 me-2\"></i><span class=\"text-fd2048\">Indisponible</span>
                </div>
            ";
        }
        // line 153
        echo "        </div>
    </div>

    ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 156)) {
            // line 157
            echo "    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"fw-bold underline-fd2048 mt-0\">Description du produit</h2>
            <div class=\"d-flex justify-content-center py-3 gap-3\">
                ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "features", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 162
                echo "                    <div class=\"d-flex flex-column text-center\">
                        <img class=\"mx-auto\"
                             src=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feature"], "image", [], "any", false, false, false, 164), "path", [], "any", false, false, false, 164))), "product_card"), "html", null, true);
                echo "\"
                             alt=\"";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feature"], "image", [], "any", false, false, false, 165), "alt", [], "any", false, false, false, 165), "html", null, true);
                echo "\"
                             style=\"width: 30px; height: 30px;\">
                        <div class=\"small\">";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 167), "html", null, true);
                echo "</div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "            </div>
            <p class=\"text-start\">";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 171), "html", null, true);
            echo "</p>
        </div>
    </div>
    ";
        }
        // line 175
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "shop/_product.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  411 => 175,  404 => 171,  401 => 170,  392 => 167,  387 => 165,  383 => 164,  379 => 162,  375 => 161,  369 => 157,  367 => 156,  362 => 153,  356 => 149,  329 => 124,  322 => 120,  319 => 119,  316 => 118,  310 => 115,  306 => 114,  301 => 111,  297 => 109,  291 => 107,  289 => 106,  286 => 105,  284 => 104,  279 => 102,  275 => 101,  268 => 97,  265 => 96,  262 => 95,  259 => 94,  255 => 92,  253 => 91,  242 => 83,  238 => 81,  235 => 80,  229 => 79,  226 => 78,  223 => 77,  220 => 76,  215 => 75,  213 => 74,  210 => 73,  203 => 69,  199 => 67,  197 => 66,  193 => 64,  187 => 62,  184 => 61,  178 => 59,  175 => 58,  169 => 56,  167 => 55,  161 => 51,  155 => 49,  152 => 48,  150 => 47,  139 => 41,  133 => 38,  129 => 37,  123 => 34,  118 => 32,  114 => 31,  109 => 28,  104 => 25,  93 => 23,  89 => 22,  85 => 20,  83 => 19,  78 => 17,  74 => 16,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  52 => 7,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/_product.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/shop/_product.html.twig");
    }
}
