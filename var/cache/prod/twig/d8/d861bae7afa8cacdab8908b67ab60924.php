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

/* category/index.html.twig */
class __TwigTemplate_5a89764eb3730a99afb5fb4ee18d7ee7 extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Catégories";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>Categories</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_new");
        echo "\">Ajouter une catégorie</a>
    </div>
    <div class=\"row py-3\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th class=\"d-none d-md-table-cell\">Catégorie mère</th>
                <th>Icône</th>
                <th class=\"d-none d-md-table-cell\">Slug</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td class=\"d-none d-md-table-cell\">";
            // line 29
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, true, false, 29), "name", [], "any", true, true, false, 29)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true))) : (print ("-")));
            echo "</td>
                    <td>
                        ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, true, false, 31), "path", [], "any", true, true, false, 31)) {
                // line 32
                echo "                            <img
                                    class=\"crud-thumbnail\"
                                    src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 34), "path", [], "any", false, false, false, 34))), "html", null, true);
                echo "\"
                                    alt=\"logo ";
                // line 35
                echo twig_escape_filter($this->env, ("logo" . twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35)), "html", null, true);
                echo "\">
                        ";
            }
            // line 37
            echo "                    </td>
                    <td class=\"d-none d-md-table-cell\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Voir</a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">Modifier</a>
                        ";
            // line 42
            echo twig_include($this->env, $context, "category/_delete_form.html.twig");
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
                    <td colspan=\"5\">Pas de catégories</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 50,  164 => 46,  147 => 42,  143 => 41,  139 => 40,  134 => 38,  131 => 37,  126 => 35,  122 => 34,  118 => 32,  116 => 31,  111 => 29,  107 => 28,  103 => 27,  100 => 26,  82 => 25,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "category/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/category/index.html.twig");
    }
}
