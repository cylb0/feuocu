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

/* pages/payments.html.twig */
class __TwigTemplate_be8276330666d218a3bc714e35784277 extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "pages/payments.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modes de paiement";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-8 mx-auto my-3\">
                <div class=\"row\">
                    <h1>Modes de paiement acceptés</h1>
                    <p>Nous acceptons différents modes de paiement pour régler vos achats sur notre site web. Nous faisons notre possible pour vous offrir des options de paiement pratiques et sécurisées. Voici les modes de paiement que nous acceptons :</p>
                </div>
                <div class=\"row my-3\">
                    <div class=\"col-6 col-lg-3 px-3\">
                            <div class=\"row mb-1\">
                                <img class=\"col-4 img-fluid h-100\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/visa.png"), "html", null, true);
        echo "\" alt=\"icône visa\">
                                <img class=\"col-4 img-fluid h-100\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/mastercard.png"), "html", null, true);
        echo "\" alt=\"icône mastercard\">
                                <img class=\"col-4 img-fluid h-100\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/american-express.png"), "html", null, true);
        echo "\" alt=\"icône american express\">
                            </div>
                            <div class=\"row\">
                                Nous acceptons les principales cartes de crédit telles que Visa, Mastercard, American Express, etc. Vos informations de carte de crédit seront traitées de manière sécurisée et confidentielle.
                            </div>
                    </div>
                    <div class=\"col-6 col-lg-3 px-3\">
                            <div class=\"row mb-1\">
                                <img class=\"col-4 mx-auto img-fluid h-100\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/paypal.png"), "html", null, true);
        echo "\" alt=\"icône paypal\">
                            </div>
                            <div class=\"row\">
                                PayPal : Si vous avez un compte PayPal, vous pouvez également utiliser ce mode de paiement pour effectuer vos achats. PayPal offre une protection supplémentaire pour vos achats en ligne.
                            </div>
                    </div>
                    <div class=\"col-6 col-lg-3 px-3\">
                            <div class=\"row mb-1\">
                                <img class=\"col-4 mx-auto img-fluid h-100\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bank.png"), "html", null, true);
        echo "\" alt=\"icône banque\">
                            </div>
                            <div class=\"row\">
                                Virement bancaire : Si vous préférez effectuer un virement bancaire, vous pouvez contacter notre service client pour obtenir les informations nécessaires. Veuillez noter que le traitement d'un virement bancaire peut prendre quelques jours ouvrables.
                            </div>
                    </div>
                    <div class=\"col-6 col-lg-3 px-3\">
                            <div class=\"row mb-1\">
                                <img class=\"col-4 mx-auto img-fluid h-100\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/cashdelivery.png"), "html", null, true);
        echo "\" alt=\"icône paiement livraison\">
                            </div>
                            <div class=\"row\">
                                Paiement à la livraison : Dans certains cas, nous proposons également un paiement à la livraison. Cela signifie que vous pouvez payer votre commande directement au livreur lors de la livraison.
                            </div>
                    </div>
                </div>
                <div class=\"row\">
                    <p>
                        Veuillez noter que les modes de paiement acceptés peuvent varier en fonction de votre pays de résidence et de la devise que vous utilisez pour effectuer votre achat. Nous nous réservons le droit de refuser certains modes de paiement pour des raisons de sécurité ou de conformité. Si vous avez des questions ou des préoccupations concernant les modes de paiement acceptés, n'hésitez pas à contacter notre service client pour obtenir de l'aide.
                    </p>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "pages/payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  100 => 34,  89 => 26,  78 => 18,  74 => 17,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/payments.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/pages/payments.html.twig");
    }
}
