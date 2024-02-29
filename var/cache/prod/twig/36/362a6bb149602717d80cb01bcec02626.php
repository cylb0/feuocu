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

/* product_option_value/show.html.twig */
class __TwigTemplate_411be5da92bbec05dbb2b4f7bde5e918 extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "product_option_value/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "value", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "value", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_option_value_index");
        echo "\">Retour à la liste</a>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_option_value_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">Modifier</a>
    </div>
    <div class=\"row py-3\">
        <table class=\"table\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom de l'option</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "value", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Couleur</th>
                <td>
                    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "hexacode", [], "any", false, false, false, 27)) {
            // line 28
            echo "                        <span style=\"display: block; height: 100%; width: 25%; border: 1px solid lightgray; background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "hexacode", [], "any", false, false, false, 28), "html", null, true);
            echo "\">&nbsp;</span>
                    ";
        } else {
            // line 30
            echo "                        Pas une couleur
                    ";
        }
        // line 32
        echo "                </td>
            </tr>
            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product_option_value/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  104 => 30,  98 => 28,  96 => 27,  88 => 22,  81 => 18,  71 => 11,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product_option_value/show.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/product_option_value/show.html.twig");
    }
}
