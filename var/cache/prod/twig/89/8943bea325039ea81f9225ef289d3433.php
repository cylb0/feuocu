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

/* hero/index.html.twig */
class __TwigTemplate_eb502c67493627a5a4a93226c011f032 extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "hero/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bannière";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>Bannière</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_new");
        echo "\">Ajouter une bannière</a>
    </div>
    <div class=\"row py-3\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Bannière</th>
                <th>Message de la bannière</th>
                <th class=\"d-none d-md-table-cell\">Message du bouton</th>
                <th class=\"d-none d-md-table-cell\">Lien</th>
                <th>Actif</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["heroes"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td><img class=\"crud-thumbnail\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hero"], "image", [], "any", false, false, false, 29), "path", [], "any", false, false, false, 29))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "message", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"d-none d-md-table-cell\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "buttonMessage", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td class=\"d-none d-md-table-cell\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "link", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo ((twig_get_attribute($this->env, $this->source, $context["hero"], "isActive", [], "method", false, false, false, 33)) ? ("Oui") : ("Non"));
            echo "</td>
                    <td>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Voir</a>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Modifier</a>
                        ";
            // line 37
            echo twig_include($this->env, $context, "hero/_delete_form.html.twig");
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
            // line 41
            echo "                <tr>
                    <td colspan=\"5\">Aucune bannière trouvée</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "hero/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 45,  154 => 41,  137 => 37,  133 => 36,  129 => 35,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  101 => 27,  83 => 26,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hero/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/hero/index.html.twig");
    }
}
