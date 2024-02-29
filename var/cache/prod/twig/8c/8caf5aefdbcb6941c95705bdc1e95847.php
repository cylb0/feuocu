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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_1a593a5e4920d77eea7c938bfc59f2d6 extends Template
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
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 10
        $context["ea_field_assets"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 10), "fieldAssets", [0 => twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 10);
        // line 47
        $context["has_batch_actions"] = (twig_length_filter($this->env, ($context["batch_actions"] ?? null)) > 0);
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true))) : (print ("")));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-index" . (((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
    }

    // line 12
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 15
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 19
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 22
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 26
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 28)], false);
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 29)], false);
        echo "
";
    }

    // line 32
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 34
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 34)], false);
        echo "
    ";
        // line 35
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 35)], false);
        echo "
";
    }

    // line 38
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        ob_start(function () { return ''; });
        // line 40
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "customPageTitle", [0 => "index", 1 => null, 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40);
        // line 41
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "defaultPageTitle", [0 => "index", 1 => null, 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42)], "method", false, false, false, 42), [],         // line 5
($context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 43
($context["custom_page_title"] ?? null), [],         // line 5
($context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] ?? null))));
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo twig_spaceless($___internal_parse_2_);
    }

    // line 48
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
        if ((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) {
            // line 50
            echo "        <div class=\"datagrid-filters\">
            ";
            // line 51
            $this->displayBlock('filters', $context, $blocks);
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        $this->displayBlock('global_actions', $context, $blocks);
        // line 74
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
    }

    // line 51
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 52), "query", [], "any", false, true, false, 52), "all", [], "any", false, true, false, 52), "filters", [], "array", true, true, false, 52)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 52), "query", [], "any", false, true, false, 52), "all", [], "any", false, true, false, 52)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["filters"] ?? null) : null), [])) : ([])));
        // line 53
        echo "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 54), "includeReferrer", [], "method", false, false, false, 54), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        echo ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
        echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 55), "translationParameters", [], "any", false, false, false, 55), "EasyAdminBundle"), [],         // line 5
($context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] ?? null)), "html", null, true);
        // line 55
        if (($context["applied_filters"] ?? null)) {
            echo " <span class=\"action-filters-button-count\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
            echo ")</span>";
        }
        // line 56
        echo "                    </a>
                    ";
        // line 57
        if (($context["applied_filters"] ?? null)) {
            // line 58
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 58), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 62
        echo "                </div>
            ";
    }

    // line 67
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "        <div class=\"global-actions\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 70
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 70), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    ";
    }

    // line 74
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "        ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 76
            echo "            <div class=\"batch-actions d-none\">
                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 78
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 78), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            </div>
        ";
        }
        // line 82
        echo "    ";
    }

    // line 85
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "    ";
        // line 87
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 87), "get", [0 => "sort"], "method", false, false, false, 87)));
        // line 88
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "get", [0 => "sort"], "method", false, false, false, 88));
        // line 89
        echo "    ";
        $context["some_results_are_hidden"] = twig_array_reduce($this->env, ($context["entities"] ?? null), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return (($context["some_results_are_hidden"] ?? null) ||  !twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "isAccessible", [], "any", false, false, false, 89)); }, false);
        // line 90
        echo "    ";
        $context["has_footer"] = (twig_length_filter($this->env, ($context["entities"] ?? null)) != 0);
        // line 91
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 91), "isSearchEnabled", [], "any", false, false, false, 91);
        // line 92
        echo "    ";
        $context["has_filters"] = (twig_length_filter($this->env, ($context["filters"] ?? null)) > 0);
        // line 93
        echo "    ";
        $context["num_results"] = twig_length_filter($this->env, ($context["entities"] ?? null));
        // line 94
        echo "
    <table class=\"table datagrid ";
        // line 95
        echo ((twig_test_empty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        echo "\">
        ";
        // line 96
        if ((($context["num_results"] ?? null) > 0)) {
            // line 97
            echo "            <thead>
            ";
            // line 98
            $this->displayBlock('table_head', $context, $blocks);
            // line 131
            echo "            </thead>
        ";
        }
        // line 133
        echo "
        <tbody>
        ";
        // line 135
        $this->displayBlock('table_body', $context, $blocks);
        // line 214
        echo "        </tbody>

        <tfoot>
        ";
        // line 217
        $this->displayBlock('table_footer', $context, $blocks);
        // line 219
        echo "        </tfoot>
    </table>

    ";
        // line 222
        if ((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) {
            // line 223
            echo "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 224
            $this->displayBlock('paginator', $context, $blocks);
            // line 227
            echo "        </div>
    ";
        }
        // line 229
        echo "
    ";
        // line 230
        $this->displayBlock('delete_form', $context, $blocks);
        // line 233
        echo "
    ";
        // line 234
        if (($context["has_filters"] ?? null)) {
            // line 235
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 237
        echo "
    ";
        // line 238
        if (($context["has_batch_actions"] ?? null)) {
            // line 239
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
    }

    // line 98
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                <tr>
                    ";
        // line 100
        if (($context["has_batch_actions"] ?? null)) {
            // line 101
            echo "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 107
        echo "
                    ";
        // line 108
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 109
        echo "                    ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 110
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 110) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 110)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 110)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 111
            echo "                        ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 111), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 111)], "method", false, false, false, 111);
            // line 112
            echo "                        ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 112), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 112)], "method", false, false, false, 112) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 113
            echo "                        ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 114
            echo "
                        <th data-column=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 115), "html", null, true);
            echo "\" class=\"";
            echo ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 115)) ? ("field-virtual") : (""));
            echo " header-for-";
            echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 115), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($__internal_compile_1 = ($context["class"] ?? null)) && is_string($__internal_compile_2 = "field-") && ('' === $__internal_compile_2 || 0 === strpos($__internal_compile_1, $__internal_compile_2))); }), ""), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 115), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 115), "textDirection", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                            ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 116)) {
                // line 117
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 117) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 117), "html", null, true);
                echo "\">
                                    ";
                // line 118
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 118), [],                 // line 5
($context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] ?? null));
                // line 118
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                </a>
                            ";
            } else {
                // line 121
                echo "                                <span>";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 121), [],                 // line 5
($context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] ?? null));
                // line 121
                echo "</span>
                            ";
            }
            // line 123
            echo "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
                    <th class=\"";
        // line 126
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 126), "showEntityActionsAsDropdown", [], "any", false, false, false, 126)) ? ("actions-as-dropdown-table-head") : (""));
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 126), "textDirection", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
                        <span class=\"sr-only\">";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 127), "translationParameters", [], "any", false, false, false, 127), "EasyAdminBundle"), [],         // line 5
($context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] ?? null)), "html", null, true);
        // line 127
        echo "</span>
                    </th>
                </tr>
            ";
    }

    // line 135
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 137
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 137)) {
                // line 138
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 138), "html", null, true);
                echo "\">
                        ";
                // line 139
                if (($context["has_batch_actions"] ?? null)) {
                    // line 140
                    echo "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"";
                    // line 142
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 142), "html", null, true);
                    echo "\">
                                </div>
                            </td>
                        ";
                }
                // line 146
                echo "
                        ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 148
                    echo "                            <td data-column=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 148), "html", null, true);
                    echo "\" data-label=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 148), [],                     // line 5
($context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] ?? null)), "html_attr");
                    // line 148
                    echo "\" class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 148) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 148), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 148), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 148), "textDirection", [], "any", false, false, false, 148), "html", null, true);
                    echo "\">
                                ";
                    // line 149
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 149), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "
                        ";
                // line 153
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 180
                echo "                    </tr>

                ";
            }
            // line 183
            echo "            ";
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
            // line 184
            echo "                ";
            $this->displayBlock('table_body_empty', $context, $blocks);
            // line 204
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "
            ";
        // line 206
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 207
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 213
        echo "        ";
    }

    // line 153
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "                            <td class=\"actions ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 154), "showEntityActionsAsDropdown", [], "any", false, false, false, 154)) ? ("actions-as-dropdown") : (""));
        echo "\">
                                ";
        // line 155
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 155), "count", [], "any", false, false, false, 155) > 0)) {
            // line 156
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 156), "showEntityActionsAsDropdown", [], "any", false, false, false, 156)) {
                // line 157
                echo "                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                ";
                // line 160
                echo "                                                ";
                // line 161
                echo "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 167));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 168
                    echo "                                                    ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 168), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 168), "showEntityActionsAsDropdown", [], "any", false, false, false, 168)], false);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 173
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 173));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 174
                    echo "                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 174), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 174), "showEntityActionsAsDropdown", [], "any", false, false, false, 174)], false);
                    echo "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "                                    ";
            }
            // line 177
            echo "                                ";
        }
        // line 178
        echo "                            </td>
                        ";
    }

    // line 184
    public function block_table_body_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 186
            echo "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 195
            if ((3 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 195))) {
                // line 196
                echo "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 198
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 198), "translationParameters", [], "any", false, false, false, 198), "EasyAdminBundle"), [],                 // line 5
($context["__internal_b9e472361ee3c259aea122aa4e35b5ddd93288582239b980779d3376063021d7"] ?? null)), "html", null, true);
                // line 198
                echo "
                                </td>
                            </tr>
                        ";
            }
            // line 202
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                ";
    }

    // line 217
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "        ";
    }

    // line 224
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 225), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        echo "
            ";
    }

    // line 230
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  814 => 231,  810 => 230,  803 => 225,  799 => 224,  795 => 218,  791 => 217,  787 => 203,  773 => 202,  767 => 198,  765 => 5,  764 => 198,  760 => 196,  758 => 195,  747 => 186,  729 => 185,  725 => 184,  720 => 178,  717 => 177,  714 => 176,  705 => 174,  700 => 173,  695 => 170,  686 => 168,  682 => 167,  674 => 161,  672 => 160,  668 => 157,  665 => 156,  663 => 155,  658 => 154,  654 => 153,  650 => 213,  643 => 209,  639 => 207,  637 => 206,  634 => 205,  628 => 204,  625 => 184,  612 => 183,  607 => 180,  605 => 153,  602 => 152,  593 => 149,  582 => 148,  580 => 5,  576 => 148,  572 => 147,  569 => 146,  562 => 142,  558 => 140,  556 => 139,  551 => 138,  548 => 137,  529 => 136,  525 => 135,  518 => 127,  516 => 5,  515 => 127,  509 => 126,  506 => 125,  499 => 123,  495 => 121,  493 => 5,  491 => 121,  484 => 118,  482 => 5,  481 => 118,  476 => 117,  474 => 116,  460 => 115,  457 => 114,  454 => 113,  451 => 112,  448 => 111,  443 => 110,  440 => 109,  438 => 108,  435 => 107,  427 => 101,  425 => 100,  422 => 99,  418 => 98,  410 => 239,  408 => 238,  405 => 237,  399 => 235,  397 => 234,  394 => 233,  392 => 230,  389 => 229,  385 => 227,  383 => 224,  380 => 223,  378 => 222,  373 => 219,  371 => 217,  366 => 214,  364 => 135,  360 => 133,  356 => 131,  354 => 98,  351 => 97,  349 => 96,  345 => 95,  342 => 94,  339 => 93,  336 => 92,  333 => 91,  330 => 90,  327 => 89,  324 => 88,  321 => 87,  319 => 86,  315 => 85,  311 => 82,  307 => 80,  298 => 78,  294 => 77,  291 => 76,  288 => 75,  284 => 74,  279 => 72,  270 => 70,  266 => 69,  263 => 68,  259 => 67,  254 => 62,  246 => 58,  244 => 57,  241 => 56,  235 => 55,  233 => 5,  232 => 55,  226 => 54,  223 => 53,  220 => 52,  216 => 51,  211 => 74,  209 => 67,  206 => 66,  202 => 64,  200 => 51,  197 => 50,  194 => 49,  190 => 48,  186 => 39,  183 => 5,  182 => 43,  181 => 5,  180 => 42,  178 => 41,  176 => 40,  174 => 39,  170 => 38,  164 => 35,  160 => 34,  155 => 33,  151 => 32,  145 => 29,  141 => 28,  136 => 27,  132 => 26,  121 => 22,  117 => 21,  112 => 20,  108 => 19,  97 => 15,  93 => 14,  88 => 13,  84 => 12,  77 => 8,  70 => 7,  66 => 4,  64 => 47,  62 => 10,  60 => 5,  53 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/index.html.twig");
    }
}
