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

/* product/variants.html.twig */
class __TwigTemplate_e59e9351e3e7e402f901178eee0e6aec extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "product/variants.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Variants";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>Variants de ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\">Retour à la liste</a>
    </div>
    <div class=\"row py-3\">
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"d-none d-md-table-cell\">Id</th>
                <th>Code</th>
                <th>Impact sur le prix</th>
                <th>Prix Total</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productVariants", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["productVariant"]) {
            // line 26
            echo "                <tr>
                    <td class=\"d-none d-md-table-cell\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productVariant"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productVariant"], "code", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 30
            if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simpleProduct", [], "any", false, false, false, 30)) {
                // line 31
                echo "                        <input
                                type=\"text\"
                                name=\"admin-variant-price\"
                                data-controller=\"admin-product-variant-price\"
                                data-variant-id=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productVariant"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\"
                                value=\"";
                // line 36
                ((twig_get_attribute($this->env, $this->source, $context["productVariant"], "price", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productVariant"], "price", [], "any", false, false, false, 36), "html", null, true))) : (print ("")));
                echo "\"
                                style=\"width: 50px;\">€
                        ";
            }
            // line 39
            echo "                    </td>
                    <td>
                        <div name=\"admin-total-price\" data-base-price=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                            ";
            // line 42
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["productVariant"], "price", [], "any", false, false, false, 42)) ? ($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source,             // line 43
$context["productVariant"], "price", [], "any", false, false, false, 43) + twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 43)), 2, ".", ","), "EUR", array(), "fr")) : ($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 44
($context["product"] ?? null), "price", [], "any", false, false, false, 44), 2, ".", ","), "EUR", array(), "fr"))), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td>
                        <input
                                type=\"number\"
                                name=\"admin-stock\"
                                data-controller=\"admin-product-variant-stock\"
                                data-variant-id=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productVariant"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\"
                                value=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productVariant"], "stock", [], "any", false, false, false, 53), "html", null, true);
            echo "\"
                                min=\"0\"
                                style=\"width: 50px;\">
                    </td>
                    <td>
                        <form method=\"post\" action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_delete_variant", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 58), "variantId" => twig_get_attribute($this->env, $this->source, $context["productVariant"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette entrée ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["productVariant"], "getId", [], "method", false, false, false, 59))), "html", null, true);
            echo "\">
                            <button class=\"btn\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productVariant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tbody>
        </table>
    </div>
    <div class=\"row\" data-controller=\"admin-product-variant-options\">
        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <button class=\"btn\">";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Ajouter / Réinitialiser les variants")) : ("Ajouter / Réinitialiser les variants")), "html", null, true);
        echo "</button>
        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/variants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 72,  182 => 71,  178 => 70,  174 => 69,  168 => 65,  156 => 59,  152 => 58,  144 => 53,  140 => 52,  129 => 44,  128 => 43,  127 => 42,  123 => 41,  119 => 39,  113 => 36,  109 => 35,  103 => 31,  101 => 30,  96 => 28,  92 => 27,  89 => 26,  85 => 25,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/variants.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/product/variants.html.twig");
    }
}
