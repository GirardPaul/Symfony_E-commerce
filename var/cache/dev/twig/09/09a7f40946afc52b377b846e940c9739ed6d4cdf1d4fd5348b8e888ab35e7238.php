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

/* commandes/affichageCommande.html.twig */
class __TwigTemplate_8e3cb26d121cbf46fe350239030da2e6b7c0c8687671951aa8ff900fb41cdd93 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/affichageCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/affichageCommande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandes/affichageCommande.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Affichage commande";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "Commande n° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "order_id", [], "any", false, false, false, 5), "numero_commande", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"row no-gutters\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 10
            echo "
<div class=\"col-12 col-lg-6 p-1\">


    <div class=\"card mb-3\">
        <div class=\"row no-gutters align-items-center p-2\">
            <div class=\"col-12 col-md-4\">
                <img class=\"card-img\" style=\"width: 180px; height: 220px;\"
                    src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 18), "image", [], "any", false, false, false, 18))), "html", null, true);
            echo "\">
            </div>
            <div class=\"col\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">

                        <div><strong>Marque :</strong> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 25), "categories", [], "any", false, false, false, 25), "libelle", [], "any", false, false, false, 25), "html", null, true);
            echo "</div>
                        <div><strong>Déscription :</strong> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 26), "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
                        <div><strong>Prix :</strong> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 27), "prix", [], "any", false, false, false, 27), "html", null, true);
            echo "€</div>
                        <div><strong>Grade :</strong> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 28), "etat", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
                        <div><strong>Quantité :</strong> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "quantity", [], "any", false, false, false, 29), "html", null, true);
            echo "</div>

                       
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "<h1 class=\"border border-dark rounded text white m-2 p-2 text-center bg-primary w-100 text-center\">Récapitulatif de la commande</h1>

<table class=\"table\">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Grade</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
    </thead>
    
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "    <tbody>
        
        <tr>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 58), "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 59), "categories", [], "any", false, false, false, 59), "libelle", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 60), "prix", [], "any", false, false, false, 60), "html", null, true);
            echo "€</td>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 61), "etat", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 63), "prix", [], "any", false, false, false, 63) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 63)), "html", null, true);
            echo "€</td>
        </tr>
        
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    <tfoot>
        <tr>
            <td colspan=\"5\" class=\"text-right\">Total : </td>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 71, $this->source); })()), 0, [], "array", false, false, false, 71), "order_id", [], "any", false, false, false, 71), "total", [], "any", false, false, false, 71), "html", null, true);
        echo "€</td>
            
        </tr>
    </tfoot>
</table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commandes/affichageCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 71,  228 => 68,  217 => 63,  213 => 62,  209 => 61,  205 => 60,  201 => 59,  197 => 58,  192 => 55,  188 => 54,  172 => 40,  155 => 29,  151 => 28,  147 => 27,  143 => 26,  139 => 25,  133 => 22,  126 => 18,  116 => 10,  112 => 9,  109 => 8,  99 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Affichage commande{% endblock %}

{% block monTitre %}Commande n° {{commande[0].order_id.numero_commande}}{% endblock %}

{% block body %}
<div class=\"row no-gutters\">
{% for items in commande %}

<div class=\"col-12 col-lg-6 p-1\">


    <div class=\"card mb-3\">
        <div class=\"row no-gutters align-items-center p-2\">
            <div class=\"col-12 col-md-4\">
                <img class=\"card-img\" style=\"width: 180px; height: 220px;\"
                    src=\"{{asset('produits/' ~ items.produit.image)}}\">
            </div>
            <div class=\"col\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{items.produit.nom}}</h4>
                    <p class=\"card-text\">

                        <div><strong>Marque :</strong> {{items.produit.categories.libelle}}</div>
                        <div><strong>Déscription :</strong> {{items.produit.description}}</div>
                        <div><strong>Prix :</strong> {{items.produit.prix}}€</div>
                        <div><strong>Grade :</strong> {{items.produit.etat}}</div>
                        <div><strong>Quantité :</strong> {{items.quantity}}</div>

                       
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
{% endfor %}
<h1 class=\"border border-dark rounded text white m-2 p-2 text-center bg-primary w-100 text-center\">Récapitulatif de la commande</h1>

<table class=\"table\">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Grade</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
    </thead>
    
    {% for item in commande %}
    <tbody>
        
        <tr>
            <td>{{item.produit.nom}}</td>
            <td>{{item.produit.categories.libelle}}</td>
            <td>{{item.produit.prix}}€</td>
            <td>{{item.produit.etat}}</td>
            <td>{{item.quantity}}</td>
            <td>{{item.produit.prix * item.quantity }}€</td>
        </tr>
        
    </tbody>
    {% endfor %}
    <tfoot>
        <tr>
            <td colspan=\"5\" class=\"text-right\">Total : </td>
            <td>{{commande[0].order_id.total}}€</td>
            
        </tr>
    </tfoot>
</table>

</div>
{% endblock %}", "commandes/affichageCommande.html.twig", "/Applications/MAMP/htdocs/ecommerce/templates/commandes/affichageCommande.html.twig");
    }
}
