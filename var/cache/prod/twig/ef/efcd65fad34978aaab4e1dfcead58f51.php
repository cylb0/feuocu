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

/* components/header/_header.html.twig */
class __TwigTemplate_cbb1478a928c04e851b6b78672c9a807 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"bg-dark py-4\">
    <div class=\"header-content container-fluid d-flex justify-content-between align-items-center\">
        ";
        // line 3
        $this->loadTemplate("./components/header/_hamburger.html.twig", "components/header/_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate("./components/header/_logo.html.twig", "components/header/_header.html.twig", 4)->display($context);
        // line 5
        echo "        ";
        $this->loadTemplate("./components/header/_searchbar.html.twig", "components/header/_header.html.twig", 5)->display($context);
        // line 6
        echo "        ";
        $this->loadTemplate("./components/header/_icons.html.twig", "components/header/_header.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "components/header/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/header/_header.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/header/_header.html.twig");
    }
}
