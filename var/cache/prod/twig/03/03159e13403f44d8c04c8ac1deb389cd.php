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

/* @EasyAdmin/page/login_minimal.html.twig */
class __TwigTemplate_0e2d3c7f56845b164623ae381dc09cbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_40ec4494bce307920e1cf8f6151cdd425459fde39e337833afc6032735cc7748"] = (($context["translation_domain"]) ?? ("messages"));
        // line 4
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        ";
        // line 13
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 16
        echo "
        <title>";
        // line 17
        echo twig_striptags(        $this->renderBlock("page_title", $context, $blocks));
        echo "</title>

        ";
        // line 19
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 26
        echo "    </head>

    <body id=\"";
        // line 28
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
        ";
        // line 29
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 30
        echo "    </body>
</html>

";
    }

    // line 13
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            <link rel=\"shortcut icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⬛</text></svg>\">
        ";
    }

    // line 19
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        echo "\">
        ";
    }

    // line 23
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 28
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login_minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  123 => 28,  116 => 24,  112 => 23,  105 => 20,  101 => 19,  96 => 14,  92 => 13,  85 => 30,  83 => 29,  77 => 28,  73 => 26,  71 => 23,  68 => 22,  66 => 19,  61 => 17,  58 => 16,  56 => 13,  45 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login_minimal.html.twig", "/homepages/26/d935996707/htdocs/feuocu/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/login_minimal.html.twig");
    }
}
