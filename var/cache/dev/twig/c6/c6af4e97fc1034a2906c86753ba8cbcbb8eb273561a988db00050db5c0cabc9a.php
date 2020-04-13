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

/* base.html.twig */
class __TwigTemplate_b51745ae8f25d2275dbd31eda56706731861b6831c2f9f6970159c2146ab056a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'monTitre' => [$this, 'block_monTitre'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/darkly/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"/\">ACS Store</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
            aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Accueil</a>
                </li>


                <li class=\"nav-item dropdown\">

                    <a href=\"\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\"
                        data-toggle=\"dropdown\">Produits</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


                        <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Produits</a>
                        <div class=\"dropdown-divider\"></div>
                        ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits");
            echo "\">Administration</a>
                        ";
        }
        // line 39
        echo "

                    </div>
                </li>

                <li class=\"nav-item dropdown\">

                    <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\"
                        data-toggle=\"dropdown\">Marques</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


                        <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Marques</a>
                        <div class=\"dropdown-divider\"></div>
                        ";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
            echo "\">Administration</a>
                        ";
        }
        // line 56
        echo "

                    </div>
                </li>
                ";
        // line 60
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo "\">Connexion</a>
                    </li>
                ";
        } else {
            // line 68
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "\">Déconnexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_client");
            echo "\">Espace Client</a>
                    </li>
                ";
        }
        // line 75
        echo "
                ";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_admin");
            echo "\">Espace Admin</a>
                ";
        }
        // line 79
        echo "        </div>
    </nav>
    <div class=\"container\">

        <h1 class=\"border border-dark rounded text white m-2 p-2 text-center bg-primary\">
            ";
        // line 84
        $this->displayBlock('monTitre', $context, $blocks);
        echo "</h1>
        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "    </div>
    ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    <script src=\"https://kit.fontawesome.com/ed0281b7b3.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
        integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
        integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
        integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
        crossorigin=\"anonymous\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 87,  276 => 85,  258 => 84,  240 => 9,  221 => 6,  199 => 88,  197 => 87,  194 => 86,  192 => 85,  188 => 84,  181 => 79,  175 => 77,  173 => 76,  170 => 75,  164 => 72,  158 => 69,  155 => 68,  149 => 65,  143 => 62,  140 => 61,  138 => 60,  132 => 56,  126 => 54,  124 => 53,  119 => 51,  105 => 39,  99 => 37,  97 => 36,  92 => 34,  66 => 10,  64 => 9,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/darkly/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    {% block stylesheets %}{% endblock %}
</head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"/\">ACS Store</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
            aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Accueil</a>
                </li>


                <li class=\"nav-item dropdown\">

                    <a href=\"\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\"
                        data-toggle=\"dropdown\">Produits</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


                        <a class=\"nav-link\" href=\"{{path('produits')}}\">Produits</a>
                        <div class=\"dropdown-divider\"></div>
                        {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"nav-link\" href=\"{{path('admin_produits')}}\">Administration</a>
                        {% endif %}


                    </div>
                </li>

                <li class=\"nav-item dropdown\">

                    <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\"
                        data-toggle=\"dropdown\">Marques</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


                        <a class=\"nav-link\" href=\"{{path('categories')}}\">Marques</a>
                        <div class=\"dropdown-divider\"></div>
                        {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"nav-link\" href=\"{{path('admin_categories')}}\">Administration</a>
                        {% endif %}


                    </div>
                </li>
                {% if not app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('inscription')}}\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('connexion')}}\">Connexion</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('deconnexion')}}\">Déconnexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('espace_client')}}\">Espace Client</a>
                    </li>
                {% endif %}

                {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"nav-link\" href=\"{{path('espace_admin')}}\">Espace Admin</a>
                {% endif %}
        </div>
    </nav>
    <div class=\"container\">

        <h1 class=\"border border-dark rounded text white m-2 p-2 text-center bg-primary\">
            {% block monTitre %}{% endblock %}</h1>
        {% block body %}{% endblock %}
    </div>
    {% block javascripts %}{% endblock %}
    <script src=\"https://kit.fontawesome.com/ed0281b7b3.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
        integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
        integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
        integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
        crossorigin=\"anonymous\"></script>
</body>

</html>", "base.html.twig", "/Applications/MAMP/htdocs/ecommerce/templates/base.html.twig");
    }
}
