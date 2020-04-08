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

/* produits/produits.html.twig */
class __TwigTemplate_a1f2cd8e230556a8000ae1824507064e960738e34d13bc226c099d38afb7984a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/produits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/produits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produits/produits.html.twig", 1);
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

        echo "Produits";
        
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

        echo "Liste des téléphones";
        
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

<div class=\"row no-gutters align-items-center text-center\">

    <div class=\"col\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "minPrix", [], "any", false, false, false, 14), 'row');
        echo "
    </div>
    <div class=\"col\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "maxPrix", [], "any", false, false, false, 17), 'row');
        echo "
    </div>
    <div class=\"col-2\">
        <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-primary\">
    </div>
</div>


";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
";
        // line 26
        if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "
<a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_produits");
            echo "\" class=\"d-block btn btn-success\">Ajouter</a>
";
        }
        // line 30
        echo "<div class=\"row no-gutters\">

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 33
            echo "    <div class=\"col-12 col-lg-6 p-1\">


        <div class=\"card mb-3\">
            <div class=\"row no-gutters align-items-center p-2\">
                <div class=\"col-12 col-md-4\">
                    <img class=\"card-img\" style=\"width: 180px; height: 220px;\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("produits/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 39))), "html", null, true);
            echo "\">
                </div>
                <div class=\"col\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</h4>
                        <p class=\"card-text\">

                            <div><strong>Marque :</strong> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", [], "any", false, false, false, 46), "libelle", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
                            <div><strong>Déscription :</strong> ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 47), "html", null, true);
            echo "</div>
                            <div><strong>Prix :</strong> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 48), "html", null, true);
            echo "€</div>
                            <div><strong>Grade :</strong> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "etat", [], "any", false, false, false, 49), "html", null, true);
            echo "</div>

                        </p>

                    </div>
                </div>
            </div>
            ";
            // line 56
            if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 56, $this->source); })())) {
                // line 57
                echo "            <div class=\"row no-gutters\">
                <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_produits", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"col btn btn-warning\">Modifier</a>
                <form action=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_produits", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\" class=\"col\" method=\"post\" onsubmit=\"return confirm('Voulez vous vraiment supprimer ce produit ?')\">
                    <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 61))), "html", null, true);
                echo "\">
                    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger w-100\">
                </form>
            </div>
            
            ";
            }
            // line 67
            echo "
        </div>
    </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
</div>

<div class=\"navigation\">
    ";
        // line 77
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 77, $this->source); })()));
        echo "
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produits/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 77,  235 => 73,  224 => 67,  215 => 61,  210 => 59,  206 => 58,  203 => 57,  201 => 56,  191 => 49,  187 => 48,  183 => 47,  179 => 46,  173 => 43,  166 => 39,  158 => 33,  154 => 32,  150 => 30,  145 => 28,  142 => 27,  140 => 26,  136 => 25,  125 => 17,  119 => 14,  111 => 9,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produits{% endblock %}

{% block monTitre %}Liste des téléphones{% endblock %}

{% block body %}

{{form_start(form)}}

<div class=\"row no-gutters align-items-center text-center\">

    <div class=\"col\">
        {{form_row(form.minPrix)}}
    </div>
    <div class=\"col\">
        {{form_row(form.maxPrix)}}
    </div>
    <div class=\"col-2\">
        <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-primary\">
    </div>
</div>


{{form_end(form)}}
{% if admin %}

<a href=\"{{path('creation_produits')}}\" class=\"d-block btn btn-success\">Ajouter</a>
{% endif %}
<div class=\"row no-gutters\">

    {% for produit in produits %}
    <div class=\"col-12 col-lg-6 p-1\">


        <div class=\"card mb-3\">
            <div class=\"row no-gutters align-items-center p-2\">
                <div class=\"col-12 col-md-4\">
                    <img class=\"card-img\" style=\"width: 180px; height: 220px;\" src=\"{{asset('produits/' ~ produit.image)}}\">
                </div>
                <div class=\"col\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{produit.nom}}</h4>
                        <p class=\"card-text\">

                            <div><strong>Marque :</strong> {{produit.categories.libelle}}</div>
                            <div><strong>Déscription :</strong> {{produit.description}}</div>
                            <div><strong>Prix :</strong> {{produit.prix}}€</div>
                            <div><strong>Grade :</strong> {{produit.etat}}</div>

                        </p>

                    </div>
                </div>
            </div>
            {% if admin %}
            <div class=\"row no-gutters\">
                <a href=\"{{path('modif_produits',{'id' : produit.id})}}\" class=\"col btn btn-warning\">Modifier</a>
                <form action=\"{{path('supp_produits', {'id' : produit.id})}}\" class=\"col\" method=\"post\" onsubmit=\"return confirm('Voulez vous vraiment supprimer ce produit ?')\">
                    <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ produit.id)}}\">
                    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger w-100\">
                </form>
            </div>
            
            {% endif %}

        </div>
    </div>


    {% endfor %}

</div>

<div class=\"navigation\">
    {{ knp_pagination_render(produits) }}
</div>



{% endblock %}", "produits/produits.html.twig", "/Applications/MAMP/htdocs/ecommerce/templates/produits/produits.html.twig");
    }
}
