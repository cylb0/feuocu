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

/* profile/changePassword.html.twig */
class __TwigTemplate_b55fc35d2629b3c50833a410c43d32a4 extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "profile/changePassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier le mot de passe";
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
            $this->loadTemplate("components/_flashmessages.html.twig", "profile/changePassword.html.twig", 9)->display($context);
            // line 10
            echo "
            <div class=\"row mt-3 border-bottom\">
                <h1 class=\"text-center\">Modifier mon mot de passe</h1>
            </div>

            ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
            </div>
            <div class=\"row\">
                <div class=\"col-6 col-md-4 mx-auto\">
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "oldPassword", [], "any", false, false, false, 19), 'label');
            echo "
                    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "oldPassword", [], "any", false, false, false, 20), 'widget');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6 col-md-4 mx-auto\">
                    ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 25), 'label');
            echo "
                    ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 26), 'widget');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6 col-md-4 mx-auto\">
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPasswordConfirm", [], "any", false, false, false, 31), 'label');
            echo "
                    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPasswordConfirm", [], "any", false, false, false, 32), 'widget');
            echo "
                </div>
            </div>

            <div class=\"row border-bottom\">
                ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 37), 'widget');
            echo "
            </div>
            ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

            <div class=\"row mt-3 text-center\">
                <ul class=\"list-unstyled d-flex flex-column gap-2\">
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">
                            Retour au compte
                        </a>
                    </li>
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_profile");
            echo "\">
                            Modifier mon profil
                        </a>
                    </li>
                    <li class=\"profile-link\">
                        <a class=\"text-reset text-decoration-none fw-bolder\" href=\"";
            // line 54
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
        // line 63
        echo "        ";
    }

    public function getTemplateName()
    {
        return "profile/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  146 => 54,  138 => 49,  130 => 44,  122 => 39,  117 => 37,  109 => 32,  105 => 31,  97 => 26,  93 => 25,  85 => 20,  81 => 19,  74 => 15,  67 => 10,  65 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/changePassword.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/profile/changePassword.html.twig");
    }
}
