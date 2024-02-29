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

/* cart/index.html.twig */
class __TwigTemplate_b3bb63755c5ab9481782537e2967e33f extends Template
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
        $this->parent = $this->loadTemplate("basenav.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Votre panier";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (($context["cart"] ?? null)) {
            // line 7
            echo "    <div class=\"container my-3\">
        <div class=\"row\">
            <div class=\"col-12 col-md-8 bg-fd2048-light rounded-start border-end\">
                <div class=\"row border-bottom\">
                    <h1>Votre panier</h1>
                </div>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getCartItems", [], "method", false, false, false, 13));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "                    ";
                $this->loadTemplate("./cart/_cartproduct.html.twig", "cart/index.html.twig", 14)->display($context);
                // line 15
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </div>
            <div class=\"col-12 col-md-4 bg-fd2048-light rounded-end py-3\"
                    data-controller=\"cart-total\"
                    data-action=\"
                        cart-quantity:updated@window->cart-total#update
                        cart-delete:removed@window->cart-total#update\">
                <div class=\"row mt-3\">
                    <h2>Récapitulatif</h2>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-12 d-flex justify-content-between border-bottom pb-2\">
                        <div>
                            <span class=\"fw-bold\">Nombre d'articles</span>
                        </div>
                        <div>
                            <span class=\"fw-bold\" data-cart-total-target=\"nbItems\"></span>
                        </div>
                    </div>
                    <div class=\"col-12 d-flex justify-content-between mt-2\">
                        <div>
                            <span class=\"fw-bold\">Total HT</span>
                        </div>
                        <div>
                            <span class=\"fw-bold\" data-cart-total-target=\"totalHT\"></span>
                            <span class=\"fw-bold\">€</span>
                        </div>
                    </div>
                    <div class=\"col-12 d-flex justify-content-between\">
                        <div>
                            <span class=\"fw-bold\">TVA (20%)</span>
                        </div>
                        <div>
                            <span class=\"fw-bold\" data-cart-total-target=\"VAT\"></span>
                            <span class=\"fw-bold\">€</span>
                        </div>
                    </div>
                    <div class=\"col-12 d-flex justify-content-between border-bottom pb-2\">
                        <div>
                            <span class=\"fw-bold\">Total TTC</span>
                        </div>
                        <div>
                            <span class=\"fw-bold\" data-cart-total-target=\"totalTTC\"></span>
                            <span class=\"fw-bold\">€</span>
                        </div>
                    </div>
                    <div class=\"col-12 d-flex justify-content-between mt-2\">
                        <div>
                            <span class=\"fw-bold\">Frais de port</span>
                        </div>
                        <div>
                            <span class=\"fw-bold\"></span>
                            <span class=\"fw-bold\" data-cart-total-target=\"shippingFees\">Offerts</span>
                        </div>
                    </div>
                    <div class=\"col-12 d-flex justify-content-between\">
                        <div>
                            <span class=\"fw-bold h4\">Total Commande</span>
                        </div>
                        <div>
                            <span class=\"fw-bold h4\" data-cart-total-target=\"totalOrder\"></span>
                            <span class=\"fw-bold h4\">€</span>
                        </div>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <button type=\"button\" class=\"btn text-white bg-f46a79 col-6 mx-auto\" disabled>Payer</button>
                </div>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 87
            echo "    <div class=\"container my-3\">
        <div class=\"row\">
            <div class=\"col-8 bg-fd2048-light rounded\">
                <div class=\"row\">
                    <h1 class=\"text-uppercase\">Pas de panier</h1>
                </div>
            </div>
            <div class=\"row my-3\" style=\"height: 100px;\">
                <p class=\"mb-0\">Votre panier est vide</p>
                ";
            // line 96
            if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 96)) {
                // line 97
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\">
                    <p>Connectez vous pour accéder à votre panier</p>
                </a>
                ";
            }
            // line 101
            echo "            </div>
        </div>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 101,  189 => 97,  187 => 96,  176 => 87,  103 => 16,  89 => 15,  86 => 14,  69 => 13,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/homepages/26/d935996707/htdocs/feuocu/templates/cart/index.html.twig");
    }
}
