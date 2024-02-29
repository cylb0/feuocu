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

/* product_option_value/index.html.twig */
class __TwigTemplate_c6502dc59104d492e2bab3a2cc31aa9d extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "product_option_value/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Variations";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>Variations</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_option_value_new");
        echo "\">Ajouter une nouvelle variation</a>
    </div>
    <div class=\"row py-3\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th class=\"d-none d-md-table-cell\">Type de variation</th>
                <th>Nom de la variation</th>
                <th>Couleur</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_option_values"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_option_value"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td class=\"d-none d-md-table-cell\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_option_value"], "value", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "hexacode", [], "any", false, false, false, 29)) {
                // line 30
                echo "                            <span style=\"display: block; width: 25%; height: 100%; border: 1px solid lightgray; background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_option_value"], "hexacode", [], "any", false, false, false, 30), "html", null, true);
                echo "\">&nbsp;</span>
                        ";
            } else {
                // line 32
                echo "                            Pas une couleur
                        ";
            }
            // line 34
            echo "                    </td>
                    <td>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_option_value_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product_option_value"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Voir</a>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_option_value_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product_option_value"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Modifier</a>
                        ";
            // line 38
            echo twig_include($this->env, $context, "product_option_value/_delete_form.html.twig");
            echo "
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
            // line 42
            echo "                <tr>
                    <td colspan=\"4\">Pas de variations trouvées</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product_option_value/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 46,  155 => 42,  138 => 38,  134 => 37,  130 => 36,  126 => 34,  122 => 32,  116 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  99 => 25,  81 => 24,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product_option_value/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/product_option_value/index.html.twig");
    }
}
