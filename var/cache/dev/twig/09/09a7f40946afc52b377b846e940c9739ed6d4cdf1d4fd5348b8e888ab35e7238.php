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
        echo "
";
        // line 9
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 9, $this->source); })()), 0, [], "array", false, false, false, 9), "order_id", [], "any", false, false, false, 9), "user", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9))) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 10
            echo "<div class=\"row no-gutters\">
";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 12
                echo "
<div class=\"col-12 col-lg-6 p-1\">


    <div class=\"card mb-3\">
        <div class=\"row no-gutters align-items-center p-2\">
            <div class=\"col-12 col-md-4\">
                <img class=\"card-img\" style=\"width: 180px; height: 220px;\"
                    src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 20), "image", [], "any", false, false, false, 20))), "html", null, true);
                echo "\">
            </div>
            <div class=\"col\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
                echo "</h4>
                    <p class=\"card-text\">

                        <div><strong>Marque :</strong> ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 27), "categories", [], "any", false, false, false, 27), "libelle", [], "any", false, false, false, 27), "html", null, true);
                echo "</div>
                        <div><strong>Déscription :</strong> ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 28), "description", [], "any", false, false, false, 28), "html", null, true);
                echo "</div>
                        <div><strong>Prix :</strong> ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 29), "prix", [], "any", false, false, false, 29), "html", null, true);
                echo "€</div>
                        <div><strong>Grade :</strong> ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "produit", [], "any", false, false, false, 30), "etat", [], "any", false, false, false, 30), "html", null, true);
                echo "</div>
                        <div><strong>Quantité :</strong> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "quantity", [], "any", false, false, false, 31), "html", null, true);
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
            // line 42
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
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                echo "    <tbody>
        
        <tr>
            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
            <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 61), "categories", [], "any", false, false, false, 61), "libelle", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 62), "prix", [], "any", false, false, false, 62), "html", null, true);
                echo "€</td>
            <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 63), "etat", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
            <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
            <td>";
                // line 65
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 65), "prix", [], "any", false, false, false, 65) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 65)), "html", null, true);
                echo "€</td>
        </tr>
        
    </tbody>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "    <tfoot>
        <tr>
            <td colspan=\"5\" class=\"text-right\">Total : </td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 73, $this->source); })()), 0, [], "array", false, false, false, 73), "order_id", [], "any", false, false, false, 73), "total", [], "any", false, false, false, 73), "html", null, true);
            echo "€</td>
            
        </tr>
    </tfoot>
</table>

</div>

";
        } else {
            // line 82
            echo "<script>window.location.href = \"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "\" </script>
";
        }
        
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
        return array (  250 => 82,  238 => 73,  233 => 70,  222 => 65,  218 => 64,  214 => 63,  210 => 62,  206 => 61,  202 => 60,  197 => 57,  193 => 56,  177 => 42,  160 => 31,  156 => 30,  152 => 29,  148 => 28,  144 => 27,  138 => 24,  131 => 20,  121 => 12,  117 => 11,  114 => 10,  112 => 9,  109 => 8,  99 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Affichage commande{% endblock %}

{% block monTitre %}Commande n° {{commande[0].order_id.numero_commande}}{% endblock %}

{% block body %}

{% if app.user and app.user.id == commande[0].order_id.user.id or is_granted('ROLE_ADMIN') %}
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

{% else %}
<script>window.location.href = \"{{path('deconnexion')}}\" </script>
{% endif %}
{% endblock %}", "commandes/affichageCommande.html.twig", "/Applications/MAMP/htdocs/ecommerce/templates/commandes/affichageCommande.html.twig");
    }
}
