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

/* login/index.html.twig */
class __TwigTemplate_c50f2fd958ed87784f5ffbb9838abf4c extends Template
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
        return "basenav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("basenav.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container mt-2 mb-2\">
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "                    ";
                if (($context["label"] == "success")) {
                    // line 11
                    echo "                        <div class=\"alert alert-success\">
                    ";
                } elseif ((                // line 12
$context["label"] == "error")) {
                    // line 13
                    echo "                        <div class=\"alert alert-danger\">
                    ";
                } else {
                    // line 15
                    echo "                        <div class=\"alert alert-info\">
                    ";
                }
                // line 17
                echo "                ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>

";
        // line 24
        echo "        <div class=\"row\">
            ";
        // line 25
        if (($context["error"] ?? null)) {
            // line 26
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 28
        echo "        </div>

        <div class=\"row\">
            <h1 class=\"text-center mt-0 mb-2 fs-2\">Connexion</h1>
        </div>

        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"col-12 col-md-6 mx-auto\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 38), 'label');
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 39), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 col-md-6 mx-auto\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 44), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 45), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <a class=\"col-12 col-md-6 mt-2 mx-auto\" href=\"#\">Mot de passe oublié ?</a>
        </div>
        <div class=\"row\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </div>
        <div class=\"row\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 55), 'widget');
        echo "
        </div>

        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        <div class=\"row text-center\">
            <p class=\"col-12 font-weight-bold mt-4 fs-5\">Vous n'êtes pas encore client ?</p>
            <a class=\"col-12 mb-3\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
        echo "\">Nouveau client ? Créer un compte !</a>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 62,  171 => 58,  165 => 55,  159 => 52,  149 => 45,  145 => 44,  137 => 39,  133 => 38,  126 => 34,  118 => 28,  112 => 26,  110 => 25,  107 => 24,  103 => 21,  97 => 20,  87 => 17,  83 => 15,  79 => 13,  77 => 12,  74 => 11,  71 => 10,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/login/index.html.twig");
    }
}
