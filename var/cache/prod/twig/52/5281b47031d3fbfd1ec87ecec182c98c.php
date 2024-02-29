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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_4bdf5cb20bead62218235c2dac937d32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'delete_form' => [$this, 'block_delete_form'],
            'detail_field' => [$this, 'block_detail_field'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["ea_field_assets"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "fieldAssets", [0 => twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 8);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 5)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 5)), "html", null, true);
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6)), "html", null, true);
    }

    // line 10
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 13
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 17
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 20
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 24
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 26
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 26)], false);
        echo "
    ";
        // line 27
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 27)], false);
        echo "
";
    }

    // line 30
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 32
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 32)], false);
        echo "
    ";
        // line 33
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 33)], false);
        echo "
";
    }

    // line 36
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        ob_start(function () { return ''; });
        // line 38
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 38), "customPageTitle", [0 => ($context["pageName"] ?? null), 1 => ((($context["entity"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 38)) : (null)), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationParameters", [], "any", false, false, false, 38)], "method", false, false, false, 38);
        // line 39
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [0 => null, 1 => null, 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 41
($context["custom_page_title"] ?? null))));
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 45
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 47
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 47), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 51
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 53
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
        $context["field_layout"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->createFieldLayout(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 54));
        // line 55
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 62
        echo "
    ";
        // line 63
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 55
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["field_layout"] ?? null), "hasTabs", [], "any", false, false, false, 56)) {
            // line 57
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_render_detail_fields_with_tabs", [($context["entity"] ?? null), ($context["field_layout"] ?? null)], 57, $context, $this->getSourceContext());
            echo "
        ";
        } else {
            // line 59
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_render_detail_fields", [($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["field_layout"] ?? null), "fields", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 61
        echo "    ";
    }

    // line 63
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 64)], false);
        echo "
    ";
    }

    // line 116
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "            ";
        if ( !($context["is_form_field_panel"] ?? null)) {
            // line 118
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null)], 118, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 120
        echo "        ";
    }

    // line 68
    public function macro_render_detail_fields_with_tabs($__entity__ = null, $__field_layout__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field_layout" => $__field_layout__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 69
            echo "    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 72));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 73
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) {
                    echo "active";
                }
                echo "\" href=\"#tab-pane-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 74), "html", null, true);
                echo "\" id=\"tab-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 74), "html", null, true);
                echo "\" data-bs-toggle=\"tab\">";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "customOption", [0 => "icon"], "method", false, false, false, 75)) {
                    // line 76
                    echo "<i class=\"fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "customOption", [0 => "icon"], "method", false, false, false, 76), "html", null, true);
                    echo "\"></i>";
                }
                // line 78
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 78), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 78), "translationDomain", [], "any", false, false, false, 78));
                echo "
                        </a>
                    </li>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "            </ul>
            <div class=\"tab-content\">
                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 84));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 85
                echo "                    <div id=\"tab-pane-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 85), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 85)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 85), "")) : ("")), "html", null, true);
                echo "\">
                        ";
                // line 86
                if (((twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 86)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 86), false)) : (false))) {
                    // line 87
                    echo "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 88
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 88), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 88), "translationDomain", [], "any", false, false, false, 88));
                    echo "
                            </div>
                        ";
                }
                // line 91
                echo "                        <div class=\"row\">
                            ";
                // line 92
                echo twig_call_macro($macros["_self"], "macro_render_detail_fields", [($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["field_layout"] ?? null), "fieldsInTab", [0 => twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 92)], "method", false, false, false, 92)], 92, $context, $this->getSourceContext());
                echo "
                        </div>
                    </div>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 101
    public function macro_render_detail_fields($__entity__ = null, $__fields__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "fields" => $__fields__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 102
            echo "    ";
            $context["form_panel_is_already_open"] = false;
            // line 103
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 104
                echo "        ";
                $context["is_form_field_panel"] = twig_in_filter("field-form_panel", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 104));
                // line 105
                echo "
        ";
                // line 106
                if ((($context["is_form_field_panel"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 106) &&  !($context["is_form_field_panel"] ?? null)))) {
                    // line 107
                    echo "            ";
                    if (($context["form_panel_is_already_open"] ?? null)) {
                        // line 108
                        echo "                ";
                        echo twig_call_macro($macros["_self"], "macro_close_form_field_panel", [], 108, $context, $this->getSourceContext());
                        echo "
                ";
                        // line 109
                        $context["form_panel_is_already_open"] = false;
                        // line 110
                        echo "            ";
                    }
                    // line 111
                    echo "
            ";
                    // line 112
                    echo twig_call_macro($macros["_self"], "macro_open_form_field_panel", [((($context["is_form_field_panel"] ?? null)) ? ($context["field"]) : (null))], 112, $context, $this->getSourceContext());
                    echo "
            ";
                    // line 113
                    $context["form_panel_is_already_open"] = true;
                    // line 114
                    echo "        ";
                }
                // line 115
                echo "
        ";
                // line 116
                $this->displayBlock('detail_field', $context, $blocks);
                // line 121
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "
    ";
            // line 123
            if (($context["form_panel_is_already_open"] ?? null)) {
                // line 124
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_close_form_field_panel", [], 124, $context, $this->getSourceContext());
                echo "
        ";
                // line 125
                $context["form_panel_is_already_open"] = false;
                // line 126
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 129
    public function macro_open_form_field_panel($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 130
            echo "    ";
            $context["panel_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 130))));
            // line 131
            echo "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsible"], "method", false, false, false, 131)));
            // line 132
            echo "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsed"], "method", false, false, false, 132)));
            // line 133
            echo "    ";
            $context["panel_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 133), "get", [0 => "icon"], "method", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 133), "get", [0 => "icon"], "method", false, false, false, 133), false)) : (false))));
            // line 134
            echo "    ";
            $context["panel_label"] = (((null === ($context["field"] ?? null))) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 134)));
            // line 135
            echo "    ";
            $context["panel_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 135), false)) : (false))));
            // line 136
            echo "    ";
            $context["panel_has_header"] = (((($context["collapsible"] ?? null) || ($context["panel_icon"] ?? null)) || ($context["panel_label"] ?? null)) || ($context["panel_help"] ?? null));
            // line 137
            echo "
    <div class=\"";
            // line 138
            (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 138) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 138)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 138), "html", null, true))) : (print ("")));
            echo "\">
        <div class=\"form-panel\">
            ";
            // line 140
            if (($context["panel_has_header"] ?? null)) {
                // line 141
                echo "                <div class=\"form-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(($context["panel_help"] ?? null))) ? ("with-help") : (""));
                echo "\">
                    <div class=\"form-panel-title\">
                        <a ";
                // line 143
                if ( !($context["collapsible"] ?? null)) {
                    // line 144
                    echo "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 146
                    echo "                            href=\"#";
                    echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                            class=\"form-panel-collapse ";
                    // line 147
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                            aria-expanded=\"";
                    // line 148
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"";
                    echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                    echo "\"
                        ";
                }
                // line 150
                echo "                        >
                            ";
                // line 151
                if (($context["collapsible"] ?? null)) {
                    // line 152
                    echo "                                <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                            ";
                }
                // line 154
                echo "
                            ";
                // line 155
                if (($context["panel_icon"] ?? null)) {
                    // line 156
                    echo "                                <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, ($context["panel_icon"] ?? null), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 158
                echo "                            ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["panel_label"] ?? null));
                echo "
                        </a>

                        ";
                // line 161
                if (($context["panel_help"] ?? null)) {
                    // line 162
                    echo "                            <div class=\"form-panel-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["panel_help"] ?? null));
                    echo "</div>
                        ";
                }
                // line 164
                echo "                    </div>
                </div>
            ";
            }
            // line 167
            echo "
            <div ";
            // line 168
            if (($context["panel_name"] ?? null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-panel-body ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 172
    public function macro_close_form_field_panel(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 173
            echo "            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 179
    public function macro_render_field($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 180
            echo "    <div class=\"data-row ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 180), "html", null, true);
            echo "\">
        <dt>
            ";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 182));
            echo "

            ";
            // line 184
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 184))) {
                // line 185
                echo "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 185)), "html_attr");
                echo "\">
                    <i class=\"far fa-question-circle\"></i>
                </a>
            ";
            }
            // line 189
            echo "        </dt>
        <dd>
            ";
            // line 191
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 191), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dd>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  733 => 191,  729 => 189,  721 => 185,  719 => 184,  714 => 182,  708 => 180,  694 => 179,  681 => 173,  669 => 172,  649 => 168,  646 => 167,  641 => 164,  635 => 162,  633 => 161,  626 => 158,  620 => 156,  618 => 155,  615 => 154,  611 => 152,  609 => 151,  606 => 150,  599 => 148,  595 => 147,  590 => 146,  586 => 144,  584 => 143,  576 => 141,  574 => 140,  569 => 138,  566 => 137,  563 => 136,  560 => 135,  557 => 134,  554 => 133,  551 => 132,  548 => 131,  545 => 130,  532 => 129,  522 => 126,  520 => 125,  515 => 124,  513 => 123,  510 => 122,  496 => 121,  494 => 116,  491 => 115,  488 => 114,  486 => 113,  482 => 112,  479 => 111,  476 => 110,  474 => 109,  469 => 108,  466 => 107,  464 => 106,  461 => 105,  458 => 104,  440 => 103,  437 => 102,  423 => 101,  411 => 96,  393 => 92,  390 => 91,  384 => 88,  381 => 87,  379 => 86,  368 => 85,  351 => 84,  347 => 82,  329 => 78,  324 => 76,  322 => 75,  313 => 74,  310 => 73,  293 => 72,  288 => 69,  274 => 68,  270 => 120,  264 => 118,  261 => 117,  257 => 116,  250 => 64,  246 => 63,  242 => 61,  236 => 59,  230 => 57,  227 => 56,  223 => 55,  219 => 63,  216 => 62,  213 => 55,  210 => 54,  206 => 53,  199 => 51,  188 => 47,  183 => 46,  179 => 45,  175 => 37,  172 => 41,  171 => 40,  169 => 39,  167 => 38,  165 => 37,  161 => 36,  155 => 33,  151 => 32,  146 => 31,  142 => 30,  136 => 27,  132 => 26,  127 => 25,  123 => 24,  112 => 20,  108 => 19,  103 => 18,  99 => 17,  88 => 13,  84 => 12,  79 => 11,  75 => 10,  68 => 6,  61 => 5,  57 => 3,  55 => 8,  48 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/homepages/26/d935996707/htdocs/feuocu/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/detail.html.twig");
    }
}
