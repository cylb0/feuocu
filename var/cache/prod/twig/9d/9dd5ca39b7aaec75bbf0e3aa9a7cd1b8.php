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

/* shop/_brand.html.twig */
class __TwigTemplate_c09a4f7f37296ce6b2a884970e45adb0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"container mt-3 mx-auto\">
        <div class=\"d-flex align-items-center gap-3\">
            <img class=\"d-inline-block mb-2\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["brand"] ?? null), "image", [], "any", false, false, false, 4), "path", [], "any", false, false, false, 4))), "brand_logo"), "html", null, true);
        echo "\" style=\"max-width: 100px;\">
            <h1 class=\"d-inline-block\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["brand"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
        </div>
        <div>
        ";
        // line 8
        $this->loadTemplate("shop/_filtersBrand.html.twig", "shop/_brand.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "            ";
            $this->loadTemplate("shop/_productcard.html.twig", "shop/_brand.html.twig", 10)->display(twig_array_merge($context, ["product" => $context["product"]]));
            // line 11
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "shop/_brand.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 12,  82 => 11,  79 => 10,  61 => 9,  59 => 8,  53 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/_brand.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/shop/_brand.html.twig");
    }
}
