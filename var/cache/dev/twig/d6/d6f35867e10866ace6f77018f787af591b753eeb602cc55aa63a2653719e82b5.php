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

/* service/accueil.html.twig */
class __TwigTemplate_7439f053c22d135a6b96791564cd560324c5c7155a2d8d12c0efd34c624b69aa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<h1> LISTE DES EMPLOYES </h1>
";
        // line 5
        if ((isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    <table class=\"table table-striped\" >
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom Complet</th>
                <th>Date de naissance</th>
                 <th>Salaire</th>
                  <th>Action</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["employe"]);
            foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
                // line 18
                echo "            
            <tr>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "matricule", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nomComplet", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "datenaissance", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "salaire", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif", ["id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" class=\"btn btn-light\">MODIFIER</a>
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp", ["id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">SUPPRIMER</a>



                </td>
            
            </tr>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            
           
        </tbody>
    </table>
";
        }
        // line 40
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 40,  131 => 35,  116 => 26,  112 => 25,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 18,  87 => 17,  74 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} 
{% block body %}

<h1> LISTE DES EMPLOYES </h1>
{% if employe %}
    <table class=\"table table-striped\" >
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom Complet</th>
                <th>Date de naissance</th>
                 <th>Salaire</th>
                  <th>Action</th>
            </tr>
        </thead>
        <tbody>
        {% for  employe in employe %}
            
            <tr>
                <td>{{employe.matricule}}</td>
                <td>{{employe.nomComplet}}</td>
                <td>{{employe.datenaissance | date ('d-m-Y')}}</td>
                <td>{{employe.salaire}}</td>
                <td>
                    <a href=\"{{path('modif',{id:employe.id})}}\" class=\"btn btn-light\">MODIFIER</a>
                    <a href=\"{{path('supp',{id:employe.id})}}\" class=\"btn btn-danger\">SUPPRIMER</a>



                </td>
            
            </tr>

        {% endfor %}
            
           
        </tbody>
    </table>
{% endif %}

{% endblock body %}", "service/accueil.html.twig", "/home/elina/Gestions/templates/service/accueil.html.twig");
    }
}
