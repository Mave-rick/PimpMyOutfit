<?php

/* base.html.twig */
class __TwigTemplate_d727156fb91db9cfd16ce76926cfa43651f87e39bf67c80e4269a130df2b329c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<!-- link meta responsive -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " | Pimp My Outfit</title>
\t\t<!-- Link CSS bootstrap -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t<!-- link fontawesome -->
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.10/css/all.css\" integrity=\"sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg\" crossorigin=\"anonymous\">
\t\t<!-- links fonts -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Vollkorn:400,700\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700\" rel=\"stylesheet\">
\t\t<!-- link CSS commun -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<header>
\t\t

\t\t\t<div class=\"title \">
\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><h1>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "pimp my outfit"), "html", null, true);
        echo "</h1></a>
\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo robe noire\"></a>
\t\t\t</div>
\t\t
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t  <a class=\"navbar-brand\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home<i class=\"fas fa-home ml-1\"></i></a>
\t\t\t  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t    <span class=\"navbar-toggler-icon\"></span>
\t\t\t  </button>
\t\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t    <ul class=\"navbar-nav\">
\t\t\t      <li class=\"nav-item\">
\t\t\t        <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dressing_index");
        echo "\">Mon dressing </a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item \">
\t\t\t        <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("weather_form");
        echo "\">Hasard </a>
\t\t\t      </li>
\t\t\t  \t</ul>
\t\t\t  </div>
\t\t  \t</nav>
\t  \t</header>
        <!-- ajout de flash messages -->
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 50
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
\t\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "\t\t<footer>
\t\t\t<p>Made by me with</p> <i class=\"far fa-heart\"></i>

\t\t</footer>
\t\t<!-- scripts Bootstrap/js/jquery -->
\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t<!-- script js perso -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "\t</body>
\t</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "\t\t<h2 class=\"text-center mt-5\">...et si on laisser le hasard choisir ?</h2>
\t\t<a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("weather_form");
        echo "\"><i class=\"fas fa-question mt-5\"></i></a>

\t\t";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  181 => 70,  174 => 57,  171 => 56,  168 => 55,  163 => 17,  158 => 7,  152 => 71,  150 => 70,  146 => 69,  135 => 60,  133 => 55,  130 => 54,  124 => 53,  115 => 50,  110 => 49,  105 => 48,  101 => 47,  91 => 40,  85 => 37,  75 => 30,  66 => 26,  60 => 25,  49 => 18,  47 => 17,  43 => 16,  31 => 7,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/PimpMyOutfit/app/Resources/views/base.html.twig");
    }
}
