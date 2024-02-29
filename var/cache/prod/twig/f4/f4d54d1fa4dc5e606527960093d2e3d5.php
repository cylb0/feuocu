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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_846a2267f51531355ee09adb03067fdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<nav id=\"main-menu\">
    ";
        // line 3
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 4
        echo "
    <ul class=\"menu\">
        ";
        // line 6
        $this->displayBlock('main_menu', $context, $blocks);
        // line 27
        echo "    </ul>

    ";
        // line 29
        $this->displayBlock('main_menu_after', $context, $blocks);
        // line 30
        echo "</nav>

";
    }

    // line 3
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 7), "items", [], "any", false, false, false, 7));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 8
            echo "                ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 25
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        ";
    }

    // line 8
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isMenuSection", [], "any", false, false, false, 9)) ? ("menu-header") : ("menu-item"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 9)) ? ("has-submenu") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isSelected", [], "any", false, false, false, 9)) ? ("active") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isExpanded", [], "any", false, false, false, 9)) ? ("expanded") : (""));
        echo "\">
                        ";
        // line 10
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuItem"] ?? null)], 10, $context, $this->getSourceContext());
        echo "

                        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 12)) {
            // line 13
            echo "                            <ul class=\"submenu\">
                                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "subItems", [], "any", false, false, false, 14));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                // line 15
                echo "                                    ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 20
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                            </ul>
                        ";
        }
        // line 23
        echo "                    </li>
                ";
    }

    // line 15
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                                        <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isMenuSection", [], "any", false, false, false, 16)) ? ("menu-header") : ("menu-item"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isSelected", [], "any", false, false, false, 16)) ? ("active") : (""));
        echo "\">
                                            ";
        // line 17
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuSubItem"] ?? null)], 17, $context, $this->getSourceContext());
        echo "
                                        </li>
                                    ";
    }

    // line 29
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isMenuSection", [], "any", false, false, false, 33)) {
                // line 34
                echo "        <span class=\"menu-header-contents\">
            ";
                // line 35
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 35))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 35), "html", null, true);
                    echo "\"></i>";
                }
                // line 36
                echo "            <span class=\"menu-item-label position-relative ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
                ";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 37));
                echo "
            </span>
            ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "                <span class=\"menu-item-badge rounded-pill badge ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 40), "cssClass", [], "any", false, false, false, 40), "html", null, true);
                    echo "\" style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 40), "htmlStyle", [], "any", false, false, false, 40), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 40), "content", [], "any", false, false, false, 40), "html", null, true);
                    echo "</span>
            ";
                }
                // line 42
                echo "        </span>
    ";
            } else {
                // line 44
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkUrl", [], "any", false, false, false, 44), "html", null, true);
                echo "\" class=\"menu-item-contents ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 44)) ? ("submenu-toggle") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 44), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkTarget", [], "any", false, false, false, 44), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkRel", [], "any", false, false, false, 44), "html", null, true);
                echo "\" referrerpolicy=\"origin-when-cross-origin\">
            ";
                // line 45
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 45))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 45), "html", null, true);
                    echo "\"></i>";
                }
                // line 46
                echo "            <span class=\"menu-item-label position-relative\">
                ";
                // line 47
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 47));
                echo "
            </span>
            ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 49)) {
                    echo "<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>";
                }
                // line 50
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "                <span class=\"menu-item-badge rounded-pill badge ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51), "cssClass", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51), "htmlStyle", [], "any", false, false, false, 51), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51), "content", [], "any", false, false, false, 51), "html", null, true);
                    echo "</span>
            ";
                }
                // line 53
                echo "        </a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 53,  292 => 51,  289 => 50,  285 => 49,  280 => 47,  277 => 46,  271 => 45,  258 => 44,  254 => 42,  244 => 40,  242 => 39,  237 => 37,  232 => 36,  226 => 35,  223 => 34,  220 => 33,  207 => 32,  201 => 29,  194 => 17,  187 => 16,  183 => 15,  178 => 23,  174 => 21,  160 => 20,  157 => 15,  140 => 14,  137 => 13,  135 => 12,  130 => 10,  119 => 9,  115 => 8,  111 => 26,  97 => 25,  94 => 8,  76 => 7,  72 => 6,  66 => 3,  60 => 30,  58 => 29,  54 => 27,  52 => 6,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/menu.html.twig", "/homepages/26/d935996707/htdocs/feuocu/vendor/easycorp/easyadmin-bundle/src/Resources/views/menu.html.twig");
    }
}
