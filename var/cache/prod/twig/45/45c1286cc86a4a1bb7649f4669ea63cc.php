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

/* profile/changeAccount.html.twig */
class __TwigTemplate_30003ec4c51a1301ea22bd07188a6505 extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "profile/changeAccount.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier le profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "
        <div class=\"container my-3\">
            ";
            // line 9
            $this->loadTemplate("components/_flashmessages.html.twig", "profile/changeAccount.html.twig", 9)->display($context);
            // line 10
            echo "
            <div class=\"row mt-3 border-bottom\">
                <h1 class=\"text-center\">Modifier mes informations personnelles</h1>
            </div>

            ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "

            <div class=\"row py-3 border-bottom\">
                <h2 class=\"h4\">État civil</h2>
                <div class=\"col-6 col-md-4\">
                    <div class=\"form-control\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "firstName", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                </div>
                <div class=\"col-6 col-md-4\">
                    <div class=\"form-control\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "lastName", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
                </div>
                <div class=\"col-6 col-md-4\">
                    <div class=\"form-control\">";
            // line 26
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "birth", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "birth", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true))) : (print ("")));
            echo "</div>
                </div>
            </div>

            <div class=\"row py-3 border-bottom\">
                <h2 class=\"h3\">Contact</h2>
                <div class=\"col-12 col-md-6\">
                    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 33), 'label');
            echo "
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 34), 'widget');
            echo "
                </div>
                <div class=\"col-12 col-md-6\">
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "emailConfirm", [], "any", false, false, false, 37), 'label');
            echo "
                    ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "emailConfirm", [], "any", false, false, false, 38), 'widget');
            echo "
                </div>
                <div class=\"col-12 col-md-6 me-auto\">
                    ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 41), 'label');
            echo "
                    ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 42), 'widget');
            echo "
                </div>
            </div>

            <div class=\"row py-3 border-bottom\">
                <h2 class=\"h3\">Adresse</h2>
                <div class=\"col-12 col-md-6\">
                    ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 49), 'label');
            echo "
                    ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 50), 'widget');
            echo "
                </div>
                <div class=\"col-6 col-md-3\">
                    ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zipcode", [], "any", false, false, false, 53), 'label');
            echo "
                    ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zipcode", [], "any", false, false, false, 54), 'widget');
            echo "
                </div>
                <div class=\"col-6 col-md-3\">
                    ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 57), 'label');
            echo "
                    ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 58), 'widget');
            echo "
                </div>
            </div>

            <div class=\"row border-bottom\">
                ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 63), 'widget');
            echo "
            </div>
            ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

            <div class=\"row mt-3 text-center\">
                <ul class=\"list-unstyled d-flex flex-column gap-2\">
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">
                            Retour au compte
                        </a>
                    </li>
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password");
            echo "\">
                            Changer votre mot de passe
                        </a>
                    </li>
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none fw-bolder\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "profile/changeAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 80,  191 => 75,  183 => 70,  175 => 65,  170 => 63,  162 => 58,  158 => 57,  152 => 54,  148 => 53,  142 => 50,  138 => 49,  128 => 42,  124 => 41,  118 => 38,  114 => 37,  108 => 34,  104 => 33,  94 => 26,  88 => 23,  82 => 20,  74 => 15,  67 => 10,  65 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/changeAccount.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/profile/changeAccount.html.twig");
    }
}
