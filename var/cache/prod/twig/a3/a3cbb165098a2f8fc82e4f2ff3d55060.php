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

/* components/_hero.html.twig */
class __TwigTemplate_3de3c4b94172f6bd4343778b6d00cc78 extends Template
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
        if ((($context["hero"] ?? null) &&  !(null === ($context["hero"] ?? null)))) {
            // line 2
            echo "    <div class=\"hero\">
        ";
            // line 3
            $this->loadTemplate("components/_navbar.html.twig", "components/_hero.html.twig", 3)->display($context);
            // line 4
            echo "        <img
                class=\"hero-background img-fluid\"
                alt=\"";
            // line 6
            echo twig_escape_filter($this->env, ("bannière du site " . twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, false, 6)), "html", null, true);
            echo "\"
                src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", false, false, false, 7), "path", [], "any", false, false, false, 7))), "html", null, true);
            echo "\">
        <div class=\"hero-container\">

";
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 12
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 13
                    echo "                    <div class=\"alert alert-danger text-center\">
                        ";
                    // line 14
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
            ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "message", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "message", [], "any", false, false, false, 19)))) {
                // line 20
                echo "                <h1 class=\"hero-container_title text-md-xl text-sm-l\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "message", [], "any", false, false, false, 20), "html", null, true);
                echo "</h1>
            ";
            }
            // line 22
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "link", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "link", [], "any", false, false, false, 22)))) {
                // line 23
                echo "                <a class=\"btn-fd2048 text-center d-inline-block rounded-pill fw-bold text-white p-2 mx-auto\"
                    href=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "link", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
                    ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "buttonMessage", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "buttonMessage", [], "any", false, false, false, 26), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 28
                    echo "                        En savoir plus
                    ";
                }
                // line 30
                echo "                </a>
            ";
            }
            // line 32
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/_hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  119 => 30,  115 => 28,  109 => 26,  107 => 25,  103 => 24,  100 => 23,  97 => 22,  91 => 20,  89 => 19,  86 => 18,  80 => 17,  71 => 14,  68 => 13,  63 => 12,  58 => 11,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_hero.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/components/_hero.html.twig");
    }
}
