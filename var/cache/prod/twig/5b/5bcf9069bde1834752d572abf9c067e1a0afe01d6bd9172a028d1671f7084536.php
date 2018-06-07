<?php

/* outfit/result.html.twig */
class __TwigTemplate_7088082e56d266d6010578e77f76a6933a50ef7883a78a2476fdb043b500a8b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "outfit/result.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Ma tenue";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/outfit/result.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<h2><i class=\"far fa-star light-star ml-2\"></i><i class=\"fas fa-star dark-star mr-2 \"></i>Ma tenue jour <i class=\"fas fa-star dark-star-right\"></i><i class=\"far fa-star light-star-right ml-2\"></i></h2>

<div class=\"result_container text-center my-5\">

\t";
        // line 14
        if (($context["up"] ?? null)) {
            // line 15
            echo "\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute(($context["up"] ?? null), "image", array()))), "html", null, true);
            echo "\" alt=\"image du haut\">\t

\t";
        }
        // line 18
        echo "
";
        // line 19
        if (($context["under_up"] ?? null)) {
            // line 20
            echo "
\t<img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute(($context["under_up"] ?? null), "image", array()))), "html", null, true);
            echo "\" alt=\"image du t-shirt\">

\t";
        }
        // line 24
        echo "
";
        // line 25
        if (($context["down"] ?? null)) {
            // line 26
            echo "\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute(($context["down"] ?? null), "image", array()))), "html", null, true);
            echo "\" alt=\"Image du bas\">

\t";
        }
        // line 29
        echo "

\t<button class=\"reload btn btn-primary\" type=\"button\" name=\"button\">Pas convaincu</button></a>
</div>


";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/outfit/result/reload.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "outfit/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  101 => 36,  91 => 29,  84 => 26,  82 => 25,  79 => 24,  73 => 21,  70 => 20,  68 => 19,  65 => 18,  58 => 15,  56 => 14,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "outfit/result.html.twig", "/var/www/html/PimpMyOutfit/app/Resources/views/outfit/result.html.twig");
    }
}
