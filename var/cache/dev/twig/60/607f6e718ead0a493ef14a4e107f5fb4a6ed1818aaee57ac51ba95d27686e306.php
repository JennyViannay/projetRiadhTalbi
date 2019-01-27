<?php

/* panier/boutonPanier/boutonPanier.html.twig */
class __TwigTemplate_a90e8420f09a9a28bfff60f07a85a22026e8e92e1f694ebd7e7f2252391461bd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/boutonPanier/boutonPanier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/boutonPanier/boutonPanier.html.twig"));

        // line 1
        echo "<a  ";
        if (((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 1, $this->source); })()) != 0)) {
            echo " class=\"btn btn-success\"  ";
        } else {
            echo " class=\"btn btn-light\" ";
        }
        echo " role=\"button\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
        echo "\"><i class=\"fas fa-shopping-cart\"></i> Votre Panier
    <span class=\"badge badge-light\">
        ";
        // line 3
        if (((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 3, $this->source); })()) == 0)) {
            // line 4
            echo "        0
        ";
        } else {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 8
        echo "    </span>
</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panier/boutonPanier/boutonPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  47 => 6,  43 => 4,  41 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a  {% if articles != 0 %} class=\"btn btn-success\"  {% else %} class=\"btn btn-light\" {% endif %} role=\"button\" href=\"{{ path('panier') }}\"><i class=\"fas fa-shopping-cart\"></i> Votre Panier
    <span class=\"badge badge-light\">
        {% if articles == 0 %}
        0
        {% else %}
        {{ articles }}
        {% endif %}
    </span>
</a>
", "panier/boutonPanier/boutonPanier.html.twig", "C:\\wamp64\\www\\catalogue\\templates\\panier\\boutonPanier\\boutonPanier.html.twig");
    }
}
