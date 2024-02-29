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

/* base.html.twig */
class __TwigTemplate_634589a4aaff6e19127a37b05cfcf190 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
        <!-- Bootstrap Icons -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
        <!-- Google Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Lobster&family=Playfair+Display&family=Playfair+Display+SC:ital,wght@1,700&family=Raleway&display=swap\" rel=\"stylesheet\">
        <!-- SLICK -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css\">

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </head>
    <body data-controller=\"toggle-sidebar-categories\">
        ";
        // line 27
        $context["bcgColor"] = "#FD2048";
        // line 28
        echo "        ";
        $context["fontColor"] = "white";
        // line 29
        echo "        ";
        $this->loadTemplate("components/_textband.html.twig", "base.html.twig", 29)->display(twig_array_merge($context, ["background" => ($context["bcgColor"] ?? null), "color" => ($context["fontColor"] ?? null), "text" => "Bienvenue sur feuocu, votre distributeur de plaisir"]));
        // line 30
        echo "        ";
        $this->loadTemplate("components/_sidebarcategories.html.twig", "base.html.twig", 30)->display($context);
        // line 31
        echo "        ";
        $this->loadTemplate("components/header/_header.html.twig", "base.html.twig", 31)->display($context);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->loadTemplate("components/_footer.html.twig", "base.html.twig", 35)->display($context);
        // line 36
        echo "        <!-- JQUERY -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
        <!-- SLICK -->
        <script src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenue sur feuocu !";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 33,  132 => 23,  128 => 22,  121 => 19,  117 => 18,  110 => 6,  101 => 36,  99 => 35,  96 => 34,  94 => 33,  91 => 32,  88 => 31,  85 => 30,  82 => 29,  79 => 28,  77 => 27,  73 => 25,  71 => 22,  68 => 21,  66 => 18,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/base.html.twig");
    }
}
