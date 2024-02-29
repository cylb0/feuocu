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

/* discount/show.html.twig */
class __TwigTemplate_12748a4a4ce55c9d08c416cce1f543f0 extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "discount/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Réduction";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discount"] ?? null), "code", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_discount_index");
        echo "\">Retour à la liste</a>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_discount_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["discount"] ?? null), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">Modifier</a>
    </div>
    <div class=\"row py-3\">
        <table class=\"table\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discount"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discount"] ?? null), "code", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type de réduction</th>
                <td>";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["discount"] ?? null), "type", [], "any", false, false, false, 26) == "percentage")) {
            // line 27
            echo "                        Pourcentage
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 28
($context["discount"] ?? null), "type", [], "any", false, false, false, 28) == "gross")) {
            // line 29
            echo "                        Remise brute
                    ";
        }
        // line 30
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["discount"] ?? null), "type", [], "any", false, false, false, 34) == "percentage")) {
            // line 35
            echo "                        ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["discount"] ?? null), "value", [], "any", false, false, false, 35) . "%"), "html", null, true);
            echo "
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 36
($context["discount"] ?? null), "type", [], "any", false, false, false, 36) == "gross")) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["discount"] ?? null), "value", [], "any", false, false, false, 37) . "€"), "html", null, true);
            echo "
                    ";
        }
        // line 38
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "discount/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  121 => 37,  119 => 36,  114 => 35,  112 => 34,  106 => 30,  102 => 29,  100 => 28,  97 => 27,  95 => 26,  88 => 22,  81 => 18,  71 => 11,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "discount/show.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/discount/show.html.twig");
    }
}
