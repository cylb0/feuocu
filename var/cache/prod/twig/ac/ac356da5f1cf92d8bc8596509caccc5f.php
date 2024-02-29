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

/* product/show.html.twig */
class __TwigTemplate_82a8c495b1d81a404aed3c42b9e8a1ca extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Produit";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\">Retour à la liste</a>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">Modifier</a>
    </div>
    <div class=\"row py-3\">
        <table class=\"table\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marque</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Images</th>
                <td>
                    ";
        // line 35
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 35);
        // line 36
        echo "                    ";
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 0)) {
            // line 37
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 38
                echo "                            <img
                                    class=\"crud-thumbnail\"
                                    src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 40))), "html", null, true);
                echo "\"
                                    alt=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, false, 41), "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    ";
        }
        // line 44
        echo "                </td>
            </tr>
            <tr>
                <th>Caractéristiques</th>
                <td class=\"d-flex gap-3\">
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "features", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 50
            echo "                        <div class=\"d-flex flex-column text-center\">
                            <img class=\"mx-auto\"
                                    src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feature"], "image", [], "any", false, false, false, 52), "path", [], "any", false, false, false, 52))), "html", null, true);
            echo "\"
                                    alt=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feature"], "image", [], "any", false, false, false, 53), "alt", [], "any", false, false, false, 53), "html", null, true);
            echo "\"
                                    style=\"width: 40px; height: 40px;\">
                            <div>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </td>
";
        // line 60
        echo "            </tr>
            <tr>
                <th>Caractéristiques personnalisées</th>
                <td>";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature1", [], "any", false, false, false, 63)) {
            // line 64
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature1", [], "any", false, false, false, 64), "html", null, true);
            echo "
                    ";
        }
        // line 66
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature2", [], "any", false, false, false, 66)) {
            // line 67
            echo "                        ";
            echo twig_escape_filter($this->env, (", " . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature2", [], "any", false, false, false, 67)), "html", null, true);
            echo "
                    ";
        }
        // line 69
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature3", [], "any", false, false, false, 69)) {
            // line 70
            echo "                        ";
            echo twig_escape_filter($this->env, (", " . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "feature3", [], "any", false, false, false, 70)), "html", null, true);
            echo "
                    ";
        }
        // line 71
        echo "</td>
            </tr>
            <tr>
                <th>Description courte</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "shortDescription", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 83) . "€"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 87
        ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 87)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 87) . "/5"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Ajouté le</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "added", [], "any", false, false, false, 91), "format", [0 => "d-m-Y"], "method", false, false, false, 91)), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 95), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EAN</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "EAN", [], "any", false, false, false, 99), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 99,  247 => 95,  240 => 91,  233 => 87,  226 => 83,  219 => 79,  212 => 75,  206 => 71,  200 => 70,  197 => 69,  191 => 67,  188 => 66,  182 => 64,  180 => 63,  175 => 60,  172 => 58,  163 => 55,  158 => 53,  154 => 52,  150 => 50,  146 => 49,  139 => 44,  136 => 43,  128 => 41,  124 => 40,  120 => 38,  115 => 37,  112 => 36,  110 => 35,  102 => 30,  95 => 26,  88 => 22,  81 => 18,  71 => 11,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/show.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/product/show.html.twig");
    }
}
