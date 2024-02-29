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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_b6c73748993134243695f6bd38316ecf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["__internal_0ac436c205b0a8684dfe2592cd1a708232db6e078555b38ec6a4377b4b76ee20"] = ((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-login";
    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ((array_key_exists("page_title", $context)) ? (($context["page_title"] ?? null)) : (((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 9)) : (""))));
    }

    // line 11
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        if (((array_key_exists("favicon_path", $context)) ? (_twig_default_filter(($context["favicon_path"] ?? null), false)) : (false))) {
            // line 13
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, ($context["favicon_path"] ?? null), "html", null, true);
            echo "\">
    ";
        } else {
            // line 15
            echo "        ";
            $this->displayParentBlock("head_favicon", $context, $blocks);
            echo "
    ";
        }
    }

    // line 19
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $context["page_title"] =         $this->renderBlock("page_title", $context, $blocks);
        // line 21
        echo "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 6
($context["__internal_0ac436c205b0a8684dfe2592cd1a708232db6e078555b38ec6a4377b4b76ee20"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 22
        echo "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 6
($context["__internal_0ac436c205b0a8684dfe2592cd1a708232db6e078555b38ec6a4377b4b76ee20"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 23
        echo "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["forgot_password_label"] ?? null), [],         // line 6
($context["__internal_0ac436c205b0a8684dfe2592cd1a708232db6e078555b38ec6a4377b4b76ee20"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 24
        echo "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["remember_me_label"] ?? null), [],         // line 6
($context["__internal_0ac436c205b0a8684dfe2592cd1a708232db6e078555b38ec6a4377b4b76ee20"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 25
        echo "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 6
($context["__internal_0ac436c205b0a8684dfe2592cd1a708232db6e078555b38ec6a4377b4b76ee20"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 26
        echo "
    ";
        // line 27
        $this->loadTemplate("@EasyAdmin/flash_messages.html.twig", "@EasyAdmin/page/login.html.twig", 27)->display($context);
        // line 28
        echo "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 32
        $this->displayBlock('header_logo', $context, $blocks);
        // line 45
        echo "            </div>
        </header>

        <section class=\"content\">

            ";
        // line 50
        if (((array_key_exists("error", $context)) ? (_twig_default_filter(($context["error"] ?? null), false)) : (false))) {
            // line 51
            echo "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 53), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 56
        echo "
            <form method=\"post\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("action", $context)) ? (_twig_default_filter(($context["action"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
                ";
        // line 58
        if (((array_key_exists("csrf_token_intention", $context)) ? (_twig_default_filter(($context["csrf_token_intention"] ?? null), false)) : (false))) {
            // line 59
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_token_intention"] ?? null)), "html", null, true);
            echo "\">
                ";
        }
        // line 61
        echo "
                <input type=\"hidden\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, ((array_key_exists("target_path_parameter", $context)) ? (_twig_default_filter(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target_path", $context)) ? (_twig_default_filter(($context["target_path"] ?? null), ((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 62))) : ("/")))) : (((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 62))) : ("/")))), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"username\">";
        // line 65
        echo twig_escape_filter($this->env, ($context["_username_label"] ?? null), "html", null, true);
        echo "</label>
                    <div class=\"form-widget\">
                        <input type=\"text\" id=\"username\" name=\"";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("username_parameter", $context)) ? (_twig_default_filter(($context["username_parameter"] ?? null), "_username")) : ("_username")), "html", null, true);
        echo "\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        echo "\" required autofocus autocomplete=\"username\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"password\">";
        // line 72
        echo twig_escape_filter($this->env, ($context["_password_label"] ?? null), "html", null, true);
        echo "</label>
                    <div class=\"form-widget\">
                        <input type=\"password\" id=\"password\" name=\"";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("password_parameter", $context)) ? (_twig_default_filter(($context["password_parameter"] ?? null), "_password")) : ("_password")), "html", null, true);
        echo "\" class=\"form-control\" required autocomplete=\"current-password\">
                    </div>

                    ";
        // line 77
        if (((array_key_exists("forgot_password_enabled", $context)) ? (_twig_default_filter(($context["forgot_password_enabled"] ?? null), false)) : (false))) {
            // line 78
            echo "                        <div class=\"form-text\">
                            <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, ((array_key_exists("forgot_password_path", $context)) ? (_twig_default_filter(($context["forgot_password_path"] ?? null), "#")) : ("#")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["_forgot_password_label"] ?? null), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        // line 82
        echo "                </div>

                ";
        // line 84
        if (((array_key_exists("remember_me_enabled", $context)) ? (_twig_default_filter(($context["remember_me_enabled"] ?? null), false)) : (false))) {
            // line 85
            echo "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 86
            echo twig_escape_filter($this->env, ((array_key_exists("remember_me_parameter", $context)) ? (_twig_default_filter(($context["remember_me_parameter"] ?? null), "_remember_me")) : ("_remember_me")), "html", null, true);
            echo "\" ";
            echo ((((array_key_exists("remember_me_checked", $context)) ? (_twig_default_filter(($context["remember_me_checked"] ?? null), false)) : (false))) ? ("checked") : (""));
            echo ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 88
            echo twig_escape_filter($this->env, ($context["_remember_me_label"] ?? null), "html", null, true);
            echo "
                        </label>
                    </div>
                ";
        }
        // line 92
        echo "
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 94
        echo twig_escape_filter($this->env, ($context["_sign_in_label"] ?? null), "html", null, true);
        echo "</button>
                </div>
            </form>

            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.js", twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        echo "\"></script>
        </section>
    </div>
";
    }

    // line 32
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                    ";
        if (($context["page_title"] ?? null)) {
            // line 34
            echo "                        ";
            if (array_key_exists("ea", $context)) {
                // line 35
                echo "                            <a class=\"logo ";
                echo (((twig_length_filter($this->env, ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_striptags(($context["page_title"] ?? null)), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 35));
                echo "\">
                                ";
                // line 36
                echo ($context["page_title"] ?? null);
                echo "
                            </a>
                        ";
            } else {
                // line 39
                echo "                            <div class=\"logo ";
                echo (((twig_length_filter($this->env, ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                echo "\">
                                ";
                // line 40
                echo ($context["page_title"] ?? null);
                echo "
                            </div>
                        ";
            }
            // line 43
            echo "                    ";
        }
        // line 44
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 44,  289 => 43,  283 => 40,  278 => 39,  272 => 36,  263 => 35,  260 => 34,  257 => 33,  253 => 32,  245 => 98,  238 => 94,  234 => 92,  227 => 88,  220 => 86,  217 => 85,  215 => 84,  211 => 82,  203 => 79,  200 => 78,  198 => 77,  192 => 74,  187 => 72,  177 => 67,  172 => 65,  164 => 62,  161 => 61,  155 => 59,  153 => 58,  149 => 57,  146 => 56,  140 => 53,  136 => 51,  134 => 50,  127 => 45,  125 => 32,  119 => 28,  117 => 27,  114 => 26,  112 => 6,  110 => 25,  108 => 6,  106 => 24,  104 => 6,  102 => 23,  100 => 6,  98 => 22,  96 => 6,  94 => 21,  91 => 20,  87 => 19,  79 => 15,  73 => 13,  70 => 12,  66 => 11,  59 => 9,  52 => 8,  48 => 5,  46 => 6,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "/homepages/26/d935996707/htdocs/feuocu/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/login.html.twig");
    }
}
