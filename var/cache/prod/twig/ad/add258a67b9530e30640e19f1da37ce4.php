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

/* @EasyAdmin/inspector/data_collector.html.twig */
class __TwigTemplate_33c6c71da3accac11597156a0c269674 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/inspector/data_collector.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 4)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 5
        echo twig_include($this->env, $context, (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("@EasyAdmin/inspector/icon-v3.svg.twig") : ("@EasyAdmin/inspector/icon.svg.twig")));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <h2>EasyAdmin <small>(";
        echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 18)], false);
            echo "
    ";
        }
        // line 20
        echo "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/inspector/data_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  82 => 18,  76 => 14,  74 => 13,  68 => 11,  64 => 10,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/inspector/data_collector.html.twig", "/homepages/26/d935996707/htdocs/feuocu/vendor/easycorp/easyadmin-bundle/src/Resources/views/inspector/data_collector.html.twig");
    }
}
