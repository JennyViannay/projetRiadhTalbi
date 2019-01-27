<?php

/* panier/panier.html.twig */
class __TwigTemplate_791ecbe76b1bec78420c23ec700a171ba0ab17f539e6ccdafb9fc93ea03faba3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.", "panier/panier.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig.";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container mt-3\">

        <h2>Mon panier</h2>
        <div class=\"col-md-10\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "session", []), "flashBag", []), "all", []));
        foreach ($context['_seq'] as $context["type"] => $context["flash_messages"]) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <table class=\"table table-striped table-hover\" width=\"100%\">
            <thead>
            <tr>
                <th>Références</th>
                <th>Nom</th>
                <th></th>
                <th>Quantité</th>
                <th>PrixUT</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 29, $this->source); })())) == 0)) {
            // line 30
            echo "            <tr>
                <td colspan=\"6\" class=\"text-center\">Panier est vide</td>
            </tr>
            ";
        }
        // line 34
        echo "            ";
        $context["somme"] = 0;
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "            <form  action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier.ajout", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
            echo "\"  method=\"get\">
                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", []), "html", null, true);
            echo "</td>
                    <td>
                        <img  class=\"image-style-thumb\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, $context["product"], "nom", [])), "html", null, true);
            echo ".jpg\" height=\"40\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", []), "html", null, true);
            echo "\" />
                    </td>
                    <td class=\"form-inline\">
                        ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 44, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array"), "html", null, true);
            echo "&nbsp;
                         <input class=\"form-control\" type=\"number\" style=\"width: 30%\" max=\"99\" min=\"1\" name=\"qte\" onchange=\"this.form.submit()\"/>
                        &nbsp;<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier.suppArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
            echo "\"><i  class=\"fa fa-trash\"></i></a>
                    </td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getFormatPrice", []), "html", null, true);
            echo " €</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "prix", []) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array")), 0, "", "."), "html", null, true);
            echo " €</td>
                </tr>
            ";
            // line 51
            $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new Twig_Error_Runtime('Variable "somme" does not exist.', 51, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["product"], "prix", []) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 51, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "id", []), [], "array")));
            // line 52
            echo "            </form>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
            <tfoot>
            <tr>
                <th colspan=\"5\" class=\"text-right\">Total Commande:</th>
                <th> ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new Twig_Error_Runtime('Variable "somme" does not exist.', 58, $this->source); })()), 0, "", "."), "html", null, true);
        echo " €</th>
            </tr>
            </tfoot>

        </table>
            <p class=\"card-text\">
                <a class=\"btn btn-primary\" role=\"button\"  href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier.supprime");
        echo "\">Vider le panier</a>
            </p>
    </div>
        <div class=\"col-md-4\"></div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 64,  194 => 58,  188 => 54,  181 => 52,  179 => 51,  174 => 49,  170 => 48,  165 => 46,  160 => 44,  152 => 41,  147 => 39,  143 => 38,  137 => 36,  132 => 35,  129 => 34,  123 => 30,  121 => 29,  107 => 17,  101 => 16,  92 => 13,  87 => 12,  82 => 11,  78 => 10,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig.' %}

{% block title  %}Panier{% endblock %}

{% block body %}
    <div class=\"container mt-3\">

        <h2>Mon panier</h2>
        <div class=\"col-md-10\">
            {% for type, flash_messages in app.session.flashBag.all %}
                {% for msg in flash_messages %}
                    <div class=\"alert alert-{{ type }}\">
                        {{ msg }}
                    </div>
                {% endfor %}
            {% endfor %}
        <table class=\"table table-striped table-hover\" width=\"100%\">
            <thead>
            <tr>
                <th>Références</th>
                <th>Nom</th>
                <th></th>
                <th>Quantité</th>
                <th>PrixUT</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            {% if  products | length == 0  %}
            <tr>
                <td colspan=\"6\" class=\"text-center\">Panier est vide</td>
            </tr>
            {% endif %}
            {% set somme = 0 %}
            {% for product in products  %}
            <form  action=\"{{ path('panier.ajout',{\"id\": product.id}) }}\"  method=\"get\">
                <tr>
                    <td>{{ product.id }}</td>
                    <td>{{ product.nom }}</td>
                    <td>
                        <img  class=\"image-style-thumb\" src=\"{{ asset(\"images/\") ~ product.nom }}.jpg\" height=\"40\" alt=\"{{ product.nom }}\" />
                    </td>
                    <td class=\"form-inline\">
                        {{ panier[product.id] }}&nbsp;
                         <input class=\"form-control\" type=\"number\" style=\"width: 30%\" max=\"99\" min=\"1\" name=\"qte\" onchange=\"this.form.submit()\"/>
                        &nbsp;<a href=\"{{ path('panier.suppArticle',{\"id\": product.id}) }}\"><i  class=\"fa fa-trash\"></i></a>
                    </td>
                    <td>{{ product.getFormatPrice }} €</td>
                    <td>{{ (product.prix * panier[product.id])|number_format(0, '', '.') }} €</td>
                </tr>
            {% set somme = somme + product.prix * panier[product.id] %}
            </form>
            {% endfor %}
            </tbody>
            <tfoot>
            <tr>
                <th colspan=\"5\" class=\"text-right\">Total Commande:</th>
                <th> {{ somme|number_format(0, '', '.') }} €</th>
            </tr>
            </tfoot>

        </table>
            <p class=\"card-text\">
                <a class=\"btn btn-primary\" role=\"button\"  href=\"{{ path('panier.supprime') }}\">Vider le panier</a>
            </p>
    </div>
        <div class=\"col-md-4\"></div>
    </div>

{% endblock %}


", "panier/panier.html.twig", "C:\\wamp64\\www\\catalogue\\templates\\panier\\panier.html.twig");
    }
}
