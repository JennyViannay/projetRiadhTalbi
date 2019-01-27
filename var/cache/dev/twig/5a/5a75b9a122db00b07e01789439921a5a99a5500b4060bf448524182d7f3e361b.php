<?php

/* product/produit.html.twig */
class __TwigTemplate_d114bd8a2ea03c5ea63a8ce8e38dfc7168dabcdc030145e88512ae3c92b97e4e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/produit.html.twig"));

        // line 1
        echo "<div class=\"col-3\">
    <div class=\"car text-center\" >
        <div style=\"border-style: groove;background-color: white\" >
            <img  class=\"image-style\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "nom", [])), "html", null, true);
        echo ".jpg\" height=\"200\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "nom", []), "html", null, true);
        echo "\" />
            <div class=\"card-body\" style=\"background-color: #F5F5F5\">
                <h5 class=\"card-title\">
                    <a id=\"produits\" href=\"#\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 7, $this->source); })()), "nom", []), "html", null, true);
        echo "</a>
                </h5>
                <p class=\"card-text\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->source); })()), "description", []), "html", null, true);
        echo "
                </p>
                <div class=\"text-danger\" style=\"font-size: 2em\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "getFormatPrice", []), "html", null, true);
        echo " €</div>
                <p class=\"card-text\">
                    <a class=\"btn btn-primary\" role=\"button\"  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->source); })()), "id", []), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\">Details...</a>
                </p>
            </div>
        </div>
    </div></br>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  53 => 12,  48 => 10,  42 => 7,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-3\">
    <div class=\"car text-center\" >
        <div style=\"border-style: groove;background-color: white\" >
            <img  class=\"image-style\" src=\"{{ asset(\"images/\") ~ product.nom }}.jpg\" height=\"200\" alt=\"{{ product.nom }}\" />
            <div class=\"card-body\" style=\"background-color: #F5F5F5\">
                <h5 class=\"card-title\">
                    <a id=\"produits\" href=\"#\">{{ product.nom }}</a>
                </h5>
                <p class=\"card-text\">
                    {{ product.description}}
                </p>
                <div class=\"text-danger\" style=\"font-size: 2em\">{{ product.getFormatPrice }} €</div>
                <p class=\"card-text\">
                    <a class=\"btn btn-primary\" role=\"button\"  href=\"{{ path('product.show', {id: product.id , slug: product.slug}) }}\">Details...</a>
                </p>
            </div>
        </div>
    </div></br>
</div>", "product/produit.html.twig", "C:\\wamp64\\www\\catalogue\\templates\\product\\produit.html.twig");
    }
}
