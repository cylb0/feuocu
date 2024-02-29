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

/* product/edit.html.twig */
class __TwigTemplate_83faeba5cfeba8ff0a80a44599c7592a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "product/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier un produit";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row py-3 border-bottom\">
        <h1>Modifier un produit</h1>
    </div>
    <div class=\"row py-3 border-bottom\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\">Retour à la liste</a>
    </div>
    <div class=\"row py-3\">
        <div class=\"product-images d-flex flex-wrap gap-3\">
            ";
        // line 14
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 14);
        // line 15
        echo "            ";
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 0)) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 17
                echo "                    <div class=\"crud-thumbnail-div position-relative\"
                         data-controller=\"admin-product-remove-image\"
                         data-product-id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\"
                         data-image-id=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\">
                        <img
                                class=\"img-fluid\"
                                src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 23))), "html", null, true);
                echo "\"
                                alt=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
                        <img
                                class=\"position-absolute top-0 end-0\"
                                src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/remove.png"), "html", null, true);
                echo "\"
                                alt=\"remove icon\"
                                data-admin-product-remove-image-target=\"removeIcon\">
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "        </div>
    </div>
    <div class=\"row py-3 border-bottom\">
        ";
        // line 36
        echo twig_include($this->env, $context, "product/_form.html.twig", ["button_label" => "Mettre à jour"]);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  119 => 33,  116 => 32,  105 => 27,  99 => 24,  95 => 23,  89 => 20,  85 => 19,  81 => 17,  76 => 16,  73 => 15,  71 => 14,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/edit.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/product/edit.html.twig");
    }
}
