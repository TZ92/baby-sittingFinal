<?php

/* PidevbackBundle:Categorie:listCategories.html.twig */
class __TwigTemplate_f19618a773200df088f471dea731048ab1164e194f07a087a71beebf19891063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevbackBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevbackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Formulaire de recherche</h1>

        <form action=\"\" method=\"post\">
            Categorie: <input type=\"text\" name=\"nomCategorie\"/>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Rechercher\"/>
        </form>
<br>
<h1>Liste des categories</h1>
        <table class=\"table table-hover\">
            <tr>
                <th>Catégorie</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) ? $context["Categories"] : $this->getContext($context, "Categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomCategorie", array()), "html", null, true);
            echo "</td>
                    <td></td>
                    <td>
        &emsp;&emsp;&emsp;&emsp;
    </td>
    <td>
        &emsp;&emsp;&emsp;
    </td>
                    <td><a class=\"btn btn-default\" role=\"btn\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidevback_updateCategorie", array("id" => $this->getAttribute($context["c"], "idcategorie", array()))), "html", null, true);
            echo "\">Mettre a jour</a>
                    <a class=\"btn btn-default\" role=\"btn\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidevback_deleteCategorie", array("id" => $this->getAttribute($context["c"], "idcategorie", array()))), "html", null, true);
            echo "\">Supprimer</a>
                    </td>
                </tr>   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </table>
       ";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Categorie:listCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  79 => 30,  75 => 29,  64 => 21,  61 => 20,  57 => 19,  39 => 3,  36 => 2,  11 => 1,);
    }
}
