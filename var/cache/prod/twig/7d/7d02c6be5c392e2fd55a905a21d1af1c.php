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

/* baseadmin.html.twig */
class __TwigTemplate_59c90f28e0e924a8d3f44191779ee49c extends Template
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
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

    <!-- Bootstrap Icons -->
    <link
            rel=\"stylesheet\"
            href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\"
    >
    <!-- Bootstrap Select -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css\"/>

    <!-- Font Awesome -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\"
            rel=\"stylesheet\"
    />
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Lobster&family=Playfair+Display&family=Playfair+Display+SC:ital,wght@1,700&family=Raleway&display=swap\" rel=\"stylesheet\">    <!-- MDB -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css\"
            rel=\"stylesheet\"
    />
    <!-- SLICK -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css\">
    ";
        // line 34
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "</head>
<body data-controller=\"admin-toggle-sidebar\">

";
        // line 44
        $this->loadTemplate("admin/_headeradmin.html.twig", "baseadmin.html.twig", 44)->display($context);
        // line 45
        echo "
<div class=\"container-fluid content-container\" style=\"padding-top: 50px;\">
    <div class=\"row\">
        ";
        // line 48
        $this->loadTemplate("admin/_sidebaradmin.html.twig", "baseadmin.html.twig", 48)->display($context);
        // line 49
        echo "
        <div class=\"col-12 col-lg-10 ms-auto ps-3 py-3\">
            ";
        // line 51
        $this->loadTemplate("components/_flashmessages.html.twig", "baseadmin.html.twig", 51)->display($context);
        // line 52
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        </div>
</div>

<!-- JQUERY -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>

<!-- BOOTSTRAP -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js\"></script>

<!-- Bootstrap Select -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js\"></script>

<!-- MDB -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js\"></script>

<!-- SLICK -->
<script src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "            ";
    }

    public function getTemplateName()
    {
        return "baseadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 53,  161 => 52,  154 => 39,  150 => 38,  143 => 35,  139 => 34,  132 => 5,  109 => 54,  106 => 52,  104 => 51,  100 => 49,  98 => 48,  93 => 45,  91 => 44,  86 => 41,  84 => 38,  81 => 37,  78 => 34,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "baseadmin.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/baseadmin.html.twig");
    }
}
