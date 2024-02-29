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

/* basenav.html.twig */
class __TwigTemplate_1059feca6b39498bd51b755d75a90bba extends Template
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
        <link
                rel=\"stylesheet\"
                href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\"
        >
        <!-- Google Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Lobster&family=Playfair+Display&family=Playfair+Display+SC:ital,wght@1,700&family=Raleway&display=swap\" rel=\"stylesheet\">
        <!-- SLICK -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css\">

        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </head>
    <body data-controller=\"toggle-sidebar-categories\">
        ";
        // line 30
        $context["bcgColor"] = "#FD2048";
        // line 31
        echo "        ";
        $context["fontColor"] = "white";
        // line 32
        echo "        ";
        $this->loadTemplate("components/_textband.html.twig", "basenav.html.twig", 32)->display(twig_array_merge($context, ["background" => ($context["bcgColor"] ?? null), "color" => ($context["fontColor"] ?? null), "text" => "Bienvenue sur feuocu.fr"]));
        // line 33
        echo "        ";
        $this->loadTemplate("components/_sidebarcategories.html.twig", "basenav.html.twig", 33)->display($context);
        // line 34
        echo "        ";
        $this->loadTemplate("components/header/_header.html.twig", "basenav.html.twig", 34)->display($context);
        // line 35
        echo "        ";
        $this->loadTemplate("components/_navbar.html.twig", "basenav.html.twig", 35)->display($context);
        // line 36
        echo "
        ";
        // line 37
        $this->loadTemplate("components/_flashmessages.html.twig", "basenav.html.twig", 37)->display($context);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->loadTemplate("components/_footer.html.twig", "basenav.html.twig", 41)->display($context);
        // line 42
        echo "
        <!-- JQUERY -->
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

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "basenav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 39,  144 => 26,  140 => 25,  133 => 22,  129 => 21,  122 => 6,  112 => 42,  110 => 41,  107 => 40,  105 => 39,  102 => 38,  100 => 37,  97 => 36,  94 => 35,  91 => 34,  88 => 33,  85 => 32,  82 => 31,  80 => 30,  76 => 28,  74 => 25,  71 => 24,  69 => 21,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basenav.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/basenav.html.twig");
    }
}
