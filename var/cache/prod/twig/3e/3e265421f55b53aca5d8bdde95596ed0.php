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

/* @EasyAdmin/crud/field/country.html.twig */
class __TwigTemplate_aa8af5ceedb8642a07db2c49e4636562 extends Template
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
        // line 6
        $context["show_flag"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", [0 => "showFlag"], "method", false, false, false, 6);
        // line 7
        $context["show_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 7), "get", [0 => "showName"], "method", false, false, false, 7);
        // line 8
        echo "
";
        // line 9
        if ((($context["show_flag"] ?? null) &&  !($context["show_name"] ?? null))) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 11
                echo "        ";
                if ( !(null === $context["flag_code"])) {
                    // line 12
                    echo "            <img class=\"country-flag\" alt=\"";
                    echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 12), "defaultAssetPackageName", [], "any", false, false, false, 12)), "html", null, true);
                    echo "\">
        ";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((        // line 15
($context["show_name"] ?? null) &&  !($context["show_flag"] ?? null))) {
            // line 16
            echo "    ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 16), ", "), "html", null, true);
            echo "
";
        } else {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 19
                echo "        <span>";
                // line 20
                if (($context["show_flag"] ?? null)) {
                    // line 21
                    if ( !(null === $context["flag_code"])) {
                        // line 22
                        echo "<img class=\"country-flag\" alt=\"";
                        echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 22), "defaultAssetPackageName", [], "any", false, false, false, 22)), "html", null, true);
                        echo "\">";
                    }
                }
                // line 26
                if (($context["show_name"] ?? null)) {
                    // line 27
                    (((array_key_exists("country_name", $context) &&  !(null === $context["country_name"]))) ? (print (twig_escape_filter($this->env, $context["country_name"], "html", null, true))) : (print ("")));
                }
                // line 29
                echo "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  97 => 27,  95 => 26,  87 => 22,  85 => 21,  83 => 20,  81 => 19,  76 => 18,  70 => 16,  68 => 15,  62 => 14,  54 => 12,  51 => 11,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/country.html.twig", "/homepages/26/d935996707/htdocs/feuocu/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/country.html.twig");
    }
}
