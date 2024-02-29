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

/* product/index.html.twig */
class __TwigTemplate_7a866363b6dea2af4c1a9d16ce523d90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Produits";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>Produits</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_new");
        echo "\">Ajouter un nouveau produit</a>
    </div>
    <div class=\"row py-3\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th class=\"d-none d-md-table-cell\">Catégorie</th>
                <th>Marque</th>
                <th>Images</th>
                <th class=\"d-none d-md-table-cell\">Description courte</th>
                <th>Prix</th>
                <th class=\"d-none d-md-table-cell\">Note</th>
                <th class=\"d-none d-md-table-cell\">EAN</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['_iterated'] = false;
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
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                ";
            // line 32
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productVariants", [], "any", false, false, false, 32)) == 0)) {
                // line 33
                echo "                <td style=\"background-color: rgba(255, 0, 0, 0.5);\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 35
$context["product"], "isInStock", [], "any", false, false, false, 35)) {
                // line 36
                echo "                    <td style=\"background-color: rgba(0, 128, 0, 0.5);\">
                        ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 39
                echo "                    <td style=\"background-color: rgba(255, 255, 0, 0.5);\">
                        ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                ";
            }
            // line 42
            echo "                <td class=\"d-none d-md-table-cell\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 45
            $context["images"] = twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 45);
            // line 46
            echo "                    ";
            if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 0)) {
                // line 47
                echo "                        <img
                                class=\"crud-thumbnail\"
                                src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "path", [], "any", false, false, false, 49))), "html", null, true);
                echo "\"
                                alt=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["images"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "alt", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
                    ";
            }
            // line 52
            echo "                </td>
                <td class=\"d-none d-md-table-cell\">";
            // line 53
            ((twig_get_attribute($this->env, $this->source, $context["product"], "shortDescription", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "shortDescription", [], "any", false, false, false, 53), 0, 100) . "..."), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54), 2, ".", ","), "EUR", array(), "fr"), "html", null, true);
            echo "</td>
                <td class=\"d-none d-md-table-cell\">";
            // line 55
            ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 55) . "/5"), "html", null, true))) : (print ("pas de note")));
            echo "</td>
                <td class=\"d-none d-md-table-cell\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "EAN", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td class=\"d-flex flex-column justify-content-center\">
                    <div class=\"d-flex gap-1\">
                        <a class=\"btn btn-info\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">Voir</a>
                        <a class=\"btn btn-warning\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">Modifier</a>
                    </div>
                    ";
            // line 62
            echo twig_include($this->env, $context, "product/_delete_form.html.twig");
            echo "
                    <a class=\"btn btn-primary\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_variants", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">Variants</a>
                </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 67
            echo "                <tr>
                    <td colspan=\"17\">Aucun produit trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 71,  217 => 67,  200 => 63,  196 => 62,  191 => 60,  187 => 59,  181 => 56,  177 => 55,  173 => 54,  169 => 53,  166 => 52,  161 => 50,  157 => 49,  153 => 47,  150 => 46,  148 => 45,  143 => 43,  138 => 42,  133 => 40,  130 => 39,  125 => 37,  122 => 36,  120 => 35,  116 => 34,  113 => 33,  111 => 32,  107 => 31,  104 => 30,  86 => 29,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/product/index.html.twig");
    }
}
