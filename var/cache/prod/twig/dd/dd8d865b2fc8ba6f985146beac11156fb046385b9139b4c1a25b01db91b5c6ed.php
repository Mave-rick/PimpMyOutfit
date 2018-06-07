<?php

/* cloth/show.html.twig */
class __TwigTemplate_6b14b99436be3a7d5d37a625329577b23de5cbd5638c1fc05841d2ee60fbafa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cloth/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloth"] ?? null), "name", array()), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cloth/show.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "

<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloth"] ?? null), "name", array()), "html", null, true);
        echo "</h2>
<div class=\"container\">
\t<div class=\"row justify-content-lg-around\">
\t\t<div class=\"description \">
\t\t\t<p><span>Couleur:</span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloth"] ?? null), "color", array()), "html", null, true);
        echo "</p>
\t\t\t<p><span>Saison:</span> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloth"] ?? null), "season", array()), "html", null, true);
        echo "</p>
\t\t\t<p><span>Température:</span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloth"] ?? null), "temperature", array()), "html", null, true);
        echo " °C</p>
\t\t\t<p><span>Type:</span> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloth"] ?? null), "part", array()), "html", null, true);
        echo "</p>
\t\t</div>

\t\t<div class=\"image\">
\t\t\t<img class=\"img\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/img/" . $this->getAttribute(($context["cloth"] ?? null), "image", array()))), "html", null, true);
        echo "\" alt=\"photo du vêtement\">
\t\t</div>

\t</div>

\t<a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dressing_index");
        echo "\"><i class=\"text-center fas fa-undo-alt my-5\">Retour</i></a>
</div>

";
    }

    public function getTemplateName()
    {
        return "cloth/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  79 => 23,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  53 => 12,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cloth/show.html.twig", "/var/www/html/PimpMyOutfit/app/Resources/views/cloth/show.html.twig");
    }
}
