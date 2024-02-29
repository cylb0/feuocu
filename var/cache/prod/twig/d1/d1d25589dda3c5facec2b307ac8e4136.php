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

/* pages/cgu.html.twig */
class __TwigTemplate_0452e085cfcf65ef23123138cc33ff74 extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "pages/cgu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Conditions générales d'utilisation";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container my-3\">
        <div class=\"row\">
            <div class=\"col-12 col-md-8 mx-auto my-3\">

                <h1>Conditions Générales de Vente</h1>

                <h2>Objet du contrat</h2>
                <p>Les présentes conditions générales de vente régissent la vente de produits entre l'entreprise XYZ et le client. Elles définissent les droits et les obligations des parties dans le cadre de la vente des produits proposés sur le site web de l'entreprise.</p>

                <h2>Prix et modalités de paiement</h2>
                <p>Les prix des produits sont indiqués en euros et sont susceptibles de varier. Le paiement des produits s'effectue en ligne par carte bancaire ou par tout autre moyen de paiement accepté par l'entreprise. Le client s'engage à régler le montant total de sa commande lors de la validation de celle-ci.</p>

                <h2>Livraison</h2>
                <p>La livraison des produits est effectuée à l'adresse indiquée par le client lors de la commande. Les délais de livraison peuvent varier en fonction du lieu de livraison et de la disponibilité des produits. L'entreprise ne peut être tenue responsable des retards de livraison imputables au transporteur.</p>

                <h2>Droit de rétractation</h2>
                <p>Le client dispose d'un délai de 14 jours à compter de la réception des produits pour exercer son droit de rétractation. Il peut retourner les produits à l'entreprise dans leur état d'origine et obtenir le remboursement du prix d'achat, hors frais de retour.</p>

                <h2>Service après-vente</h2>
                <p>L'entreprise met en place un service après-vente afin d'assister les clients en cas de problème avec les produits. Le client peut contacter le service après-vente par téléphone ou par e-mail pour obtenir de l'aide ou faire valoir ses droits en cas de défaut de conformité ou de non-conformité des produits.</p>

                <h2>Protection des données personnelles</h2>
                <p>L'entreprise s'engage à respecter la confidentialité des données personnelles des clients et à les utiliser uniquement dans le cadre de la relation commerciale. Les données personnelles collectées sont sécurisées et ne sont pas transmises à des tiers sans consentement préalable du client.</p>

                <h2>Litiges et droit applicable</h2>
                <p>Tout litige relatif à la vente des produits FeuOcu est soumis à la loi 2004-575 du 21 juin 2004. En cas de litige, les parties s'efforceront de régler le différend à l'amiable. En cas d'échec de cette tentative de règlement amiable, les tribunaux compétents du commerce seront seuls compétents.</p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "pages/cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/cgu.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/pages/cgu.html.twig");
    }
}
