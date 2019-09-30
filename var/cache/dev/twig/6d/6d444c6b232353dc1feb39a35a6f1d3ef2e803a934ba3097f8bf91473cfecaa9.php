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

/* welcome/index.html.twig */
class __TwigTemplate_4b343ad405d29150c19fe5c8ac9566c9b25d556404c7125a4b355ed817a73353 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
        integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
        integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\">
    </script>

    <title>Pokedex!</title>

    <!-- Bootstrap core CSS -->
    ";
        // line 21
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

</head>

<header class=\"container text-center mb-2 mt-2\">
    <img src=\"/images/pokedex.png\" alt=\"\">
</header>

<body class=\"container\" style=\"margin-left: auto; margin-right: auto; width: 800px;\">
    <div class=\"card-group border-secondary\" style=\"max-width:800px;\">

        <!-- Pokemon List Part -->
        <div class=\"card\">
            <a href=\"#\" class=\" text-center list-group-item list-group-item-action\">Liste des Pokemons</a>
            <div class=\"list-group\" style=\"height: auto; max-width: 400px; max-height: 400px;overflow-x: hidden;\">

                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemonsName"]) || array_key_exists("pokemonsName", $context) ? $context["pokemonsName"] : (function () { throw new RuntimeError('Variable "pokemonsName" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 38
            echo "                <a class=\"text-center list-group-item list-group-item-action list-group-item-danger\"
                    href=\"/";
            // line 39
            echo twig_escape_filter($this->env, $context["pokemon"], "html", null, true);
            echo "\"
                    style=\"cursor: url('/images/pokeball_cursor.png'),auto; \">";
            // line 40
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["pokemon"]), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
            </div>
        </div>


        <!-- Pokemon infos -->
        <div class=\"card\" style=\"max-height:450px;\">
            <img class=\"card-img-top bg-light\" src='";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemonInfo"]) || array_key_exists("pokemonInfo", $context) ? $context["pokemonInfo"] : (function () { throw new RuntimeError('Variable "pokemonInfo" does not exist.', 49, $this->source); })()), "img", [], "any", false, false, false, 49), "html", null, true);
        echo "' alt=\"\">
            <div class=\"card-body bg-primary text-white rounded\">

                <h5 class=\"card-title text-center\">
                    <span><img src=\"/images/pokeball.png\" alt=\"\"></span>
                    ";
        // line 54
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemonInfo"]) || array_key_exists("pokemonInfo", $context) ? $context["pokemonInfo"] : (function () { throw new RuntimeError('Variable "pokemonInfo" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54)), "html", null, true);
        echo "
                    <span class=\"badge badge-warning\"> N°";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemonInfo"]) || array_key_exists("pokemonInfo", $context) ? $context["pokemonInfo"] : (function () { throw new RuntimeError('Variable "pokemonInfo" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "</span>
                </h5>

                ";
        // line 58
        $context["types"] = twig_get_attribute($this->env, $this->source, (isset($context["pokemonInfo"]) || array_key_exists("pokemonInfo", $context) ? $context["pokemonInfo"] : (function () { throw new RuntimeError('Variable "pokemonInfo" does not exist.', 58, $this->source); })()), "types", [], "any", false, false, false, 58);
        // line 59
        echo "                <span>Type(s): </span>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 61
            echo "
                <p class=\"card-text badge badge-pill badge-success\" style=\"display: inline\">
                    ";
            // line 63
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["type"], "type", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63)), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </div>

        </div>
    </div>



</body>
";
        // line 73
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

<footer class=\"container text-center\">
</footer>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "welcome/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 73,  151 => 65,  143 => 63,  139 => 61,  135 => 60,  132 => 59,  130 => 58,  124 => 55,  120 => 54,  112 => 49,  103 => 42,  95 => 40,  91 => 39,  88 => 38,  84 => 37,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
        integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
        integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\">
    </script>

    <title>Pokedex!</title>

    <!-- Bootstrap core CSS -->
    {{ encore_entry_link_tags('app') }}

</head>

<header class=\"container text-center mb-2 mt-2\">
    <img src=\"/images/pokedex.png\" alt=\"\">
</header>

<body class=\"container\" style=\"margin-left: auto; margin-right: auto; width: 800px;\">
    <div class=\"card-group border-secondary\" style=\"max-width:800px;\">

        <!-- Pokemon List Part -->
        <div class=\"card\">
            <a href=\"#\" class=\" text-center list-group-item list-group-item-action\">Liste des Pokemons</a>
            <div class=\"list-group\" style=\"height: auto; max-width: 400px; max-height: 400px;overflow-x: hidden;\">

                {% for pokemon in pokemonsName %}
                <a class=\"text-center list-group-item list-group-item-action list-group-item-danger\"
                    href=\"/{{pokemon}}\"
                    style=\"cursor: url('/images/pokeball_cursor.png'),auto; \">{{pokemon|capitalize}}</a>
                {% endfor %}

            </div>
        </div>


        <!-- Pokemon infos -->
        <div class=\"card\" style=\"max-height:450px;\">
            <img class=\"card-img-top bg-light\" src='{{pokemonInfo.img}}' alt=\"\">
            <div class=\"card-body bg-primary text-white rounded\">

                <h5 class=\"card-title text-center\">
                    <span><img src=\"/images/pokeball.png\" alt=\"\"></span>
                    {{pokemonInfo.name|capitalize}}
                    <span class=\"badge badge-warning\"> N°{{pokemonInfo.id}}</span>
                </h5>

                {% set types = pokemonInfo.types %}
                <span>Type(s): </span>
                {% for type in types %}

                <p class=\"card-text badge badge-pill badge-success\" style=\"display: inline\">
                    {{type.type.name|capitalize}}</p>
                {% endfor %}
            </div>

        </div>
    </div>



</body>
{{ encore_entry_script_tags('app') }}

<footer class=\"container text-center\">
</footer>

</html>", "welcome/index.html.twig", "/home/manseur/Bureau/Auto-Didacte/poke_list/templates/welcome/index.html.twig");
    }
}
