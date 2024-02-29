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

/* @EasyAdmin/symfony-form-themes/README.txt */
class __TwigTemplate_19795e87b1e3f26414a7ced2fe672ca4 extends Template
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
        echo "This is a copy of Symfony 5.4 form themes available in
https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/Resources/views/Form

Copyright (c) Fabien Potencier
License: https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/LICENSE

We need to copy these files instead of relying on the templates available via the
Symfony Twig Bridge to ensure that all applications building backends with EasyAdmin
use the same version of the templates, even those still using Symfony 4.4.
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/symfony-form-themes/README.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/symfony-form-themes/README.txt", "/homepages/26/d935996707/htdocs/feuocu/vendor/easycorp/easyadmin-bundle/src/Resources/views/symfony-form-themes/README.txt");
    }
}
