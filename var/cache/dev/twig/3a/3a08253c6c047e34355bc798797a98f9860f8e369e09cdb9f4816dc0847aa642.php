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
class __TwigTemplate_27c9dda9c0f755c3c9148c5c16c0e4e4750b8fa21e09b5560edd059c64a6af66 extends \Twig\Template
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
<html lang=\"en\">

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

<header class=\"container text-center mb-5 mt-5\">
    <h1>PokeDex</h1>
</header>

<body class=\"container\" style=\"margin-left: auto; margin-right: auto; width: 800px;\">
    <div class=\"card-group border-secondary\" style=\"max-width:800px;\">

        <div class=\"card\">
                <a href=\"#\" class=\" text-center list-group-item list-group-item-action\">Liste des Pokemons</a>
                <div class=\"list-group\" style=\"height: auto; max-width: 400px; max-height: 400px;overflow-x: hidden;\">
                        
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemonsName"]) || array_key_exists("pokemonsName", $context) ? $context["pokemonsName"] : (function () { throw new RuntimeError('Variable "pokemonsName" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 37
            echo "                        <a class=\"text-center list-group-item list-group-item-action list-group-item-secondary\" href=\"/home/";
            echo twig_escape_filter($this->env, $context["pokemon"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["pokemon"], "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                
                </div>
        </div>

      
        
        <!-- <div class=\"card\"> -->

        <div class=\"card\" style=\"max-height:450px;\">
            <img class=\"card-img-top bg-light\" src='";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemonInfo"]) || array_key_exists("pokemonInfo", $context) ? $context["pokemonInfo"] : (function () { throw new RuntimeError('Variable "pokemonInfo" does not exist.', 48, $this->source); })()), "img", [], "any", false, false, false, 48), "html", null, true);
        echo "' alt=\"\">
            <div class=\"card-body bg-secondary text-white rounded\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pokeball.png"), "html", null, true);
        echo " \" alt=\"\">
                <h5 class=\"card-title text-center\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemonInfo"]) || array_key_exists("pokemonInfo", $context) ? $context["pokemonInfo"] : (function () { throw new RuntimeError('Variable "pokemonInfo" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "</h5>
                ";
        // line 52
        $context["types"] = twig_get_attribute($this->env, $this->source, (isset($context["pokemonInfo"]) || array_key_exists("pokemonInfo", $context) ? $context["pokemonInfo"] : (function () { throw new RuntimeError('Variable "pokemonInfo" does not exist.', 52, $this->source); })()), "types", [], "any", false, false, false, 52);
        // line 53
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 54
            echo "                <p class=\"card-text\" style=\"display: inline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["type"], "type", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
        <!-- </div> -->
        </div>
    </div>



</body>
";
        // line 64
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

<footer class=\"container text-center mb-5 mt-5\">
        
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
        return array (  148 => 64,  138 => 56,  129 => 54,  124 => 53,  122 => 52,  118 => 51,  114 => 50,  109 => 48,  98 => 39,  87 => 37,  83 => 36,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

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

<header class=\"container text-center mb-5 mt-5\">
    <h1>PokeDex</h1>
</header>

<body class=\"container\" style=\"margin-left: auto; margin-right: auto; width: 800px;\">
    <div class=\"card-group border-secondary\" style=\"max-width:800px;\">

        <div class=\"card\">
                <a href=\"#\" class=\" text-center list-group-item list-group-item-action\">Liste des Pokemons</a>
                <div class=\"list-group\" style=\"height: auto; max-width: 400px; max-height: 400px;overflow-x: hidden;\">
                        
                        {% for pokemon in pokemonsName %}
                        <a class=\"text-center list-group-item list-group-item-action list-group-item-secondary\" href=\"/home/{{pokemon}}\">{{pokemon}}</a>
                        {% endfor %}
                
                </div>
        </div>

      
        
        <!-- <div class=\"card\"> -->

        <div class=\"card\" style=\"max-height:450px;\">
            <img class=\"card-img-top bg-light\" src='{{pokemonInfo.img}}' alt=\"\">
            <div class=\"card-body bg-secondary text-white rounded\">
                <img src=\"{{ asset('assets/images/pokeball.png') }} \" alt=\"\">
                <h5 class=\"card-title text-center\">{{pokemonInfo.name}}</h5>
                {% set types = pokemonInfo.types %}
                {% for type in types %}
                <p class=\"card-text\" style=\"display: inline\">{{type.type.name}}</p>
                {% endfor %}
            </div>
        <!-- </div> -->
        </div>
    </div>



</body>
{{ encore_entry_script_tags('app') }}

<footer class=\"container text-center mb-5 mt-5\">
        
</footer>

</html>", "welcome/index.html.twig", "/home/manseur/Bureau/Auto-Didacte/poke_list/templates/welcome/index.html.twig");
    }
}
