<?php

/* cloth/index.html.twig */
class __TwigTemplate_b88b3f8c851ee96a58951466db0db912ed338b0a89bf61274aaf5e384f8c60d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cloth/index.html.twig", 1);
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
        echo "Mon dressing";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dressingindex.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<h2 class=\"my-5 ml-4\">Mon dressing<i class=\"fas fa-tag ml-3\"></i></h2>

<div class=\"row\">
\t<div class=\" add col-12\">



<a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dressing_new_cloth");
        echo "\"><button class =\"btn btn-primary ml-4 mb-5\" type=\"button\" name=\"button\">Ajouter un vêtement<i class=\"fas fa-plus ml-2\"></i></button></a>

</div>
</div>

\t<div class=\"row no-gutters\">
\t\t<div class=\"col-12\">


\t<table class=\"table table-striped  no-gutters\">
\t\t<thead >
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Saison</th>
\t\t\t\t<th scope=\"col\">Image</th>
\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody >
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cloth"]) {
            // line 37
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"name\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["cloth"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["cloth"], "season", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($context["cloth"], "image", array()))), "html", null, true);
            echo "\" alt=\"image du vêtement\"> </td>



\t\t\t\t<td class = \"action\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dressing_show_cloth", array("id" => $this->getAttribute($context["cloth"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-voir mr-2\"><i class=\"fas fa-eye\"></i></button></a>
\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dressing_edit_cloth", array("id" => $this->getAttribute($context["cloth"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-edit mr-2\"><i class=\"fas fa-pencil-alt\"></i></button></a>
\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dressing_delete_cloth", array("id" => $this->getAttribute($context["cloth"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-delete mr-2\"><i class=\"far fa-trash-alt\"></i></button></a>
\t\t\t\t</td>

\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cloth'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t</tbody>
\t</table>

</div>
</div>
<div class=\"text-center my-5\">
\t<a href=\"#\"><i class=\"fas fa-arrow-circle-up\"></i></a>
</div>

";
    }

    public function getTemplateName()
    {
        return "cloth/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  110 => 46,  106 => 45,  102 => 44,  95 => 40,  91 => 39,  87 => 38,  84 => 37,  80 => 36,  58 => 17,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cloth/index.html.twig", "/var/www/html/PimpMyOutfit/app/Resources/views/cloth/index.html.twig");
    }
}
