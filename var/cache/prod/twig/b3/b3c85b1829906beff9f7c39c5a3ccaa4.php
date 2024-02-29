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

/* discount/index.html.twig */
class __TwigTemplate_6f33d4b70d3d751ce12f9185b5a23b63 extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "discount/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Réductions";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>Réductions</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_discount_new");
        echo "\">Ajouter une réduction</a>
    </div>
    <div class=\"row py3\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th class=\"d-none d-md-table-cell\">Type de réduction</th>
                <th>Valeur</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["discount"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["discount"], "code", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td class=\"d-none d-md-table-cell\">";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["discount"], "type", [], "any", false, false, false, 28) == "percentage")) {
                // line 29
                echo "                            Pourcentage
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 30
$context["discount"], "type", [], "any", false, false, false, 30) == "gross")) {
                // line 31
                echo "                            Remise brute
                        ";
            }
            // line 33
            echo "                    </td>
                    <td>";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["discount"], "type", [], "any", false, false, false, 34) == "percentage")) {
                // line 35
                echo "                            ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["discount"], "value", [], "any", false, false, false, 35) . "%"), "html", null, true);
                echo "
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["discount"], "type", [], "any", false, false, false, 36) == "gross")) {
                // line 37
                echo "                            ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["discount"], "value", [], "any", false, false, false, 37) . "€"), "html", null, true);
                echo "
                        ";
            }
            // line 38
            echo "</td>
                    <td>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_discount_show", ["id" => twig_get_attribute($this->env, $this->source, $context["discount"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Voir</a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_discount_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["discount"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">Modifier</a>
                        ";
            // line 42
            echo twig_include($this->env, $context, "discount/_delete_form.html.twig");
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
            // line 46
            echo "                <tr>
                    <td colspan=\"5\">Pas de réductions trouvées</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "discount/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 50,  168 => 46,  151 => 42,  147 => 41,  143 => 40,  139 => 38,  133 => 37,  131 => 36,  126 => 35,  124 => 34,  121 => 33,  117 => 31,  115 => 30,  112 => 29,  110 => 28,  106 => 27,  102 => 26,  99 => 25,  81 => 24,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "discount/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/discount/index.html.twig");
    }
}
