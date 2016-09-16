<?php

/* PidevbackBundle:Service:listServices.html.twig */
class __TwigTemplate_9deffbe221eb9fe5592ef2d53389cc43ccc368da648ff35ad3bd3d0b954ee2c3 extends Twig_Template
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
        echo "        <h3>Formulaire de recherche</h3>

        <form action=\"\" method=\"post\">
            Service: <input type=\"text\" name=\"typeService\"/>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Rechercher\"/>
        </form>
        <br>
        <br>
        
        <table class=\"table table-hover\" >
            <tr>
                <th>Service</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th></th>
                <th></th>
            </tr>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Services"]) ? $context["Services"] : $this->getContext($context, "Services")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "typeService", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "idCategorie", array()), "nomCategorie", array()), "html", null, true);
            echo "</td> 
                    <td><a role=\"btn\" class=\"btn btn-default\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidevback_delete", array("id" => $this->getAttribute($context["s"], "idservice", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                    <td><a role=\"btn\" class=\"btn btn-default\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidevback_update", array("id" => $this->getAttribute($context["s"], "idservice", array()))), "html", null, true);
            echo "\">Mettre a jour</a></td> 
                </tr>   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <tr>
                <td>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("pidevback_ajout");
        echo "\" role=\"btn\" class=\"btn btn-default\">Create new entry</a>
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
            </tr>
        </table>
";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Service:listServices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  90 => 29,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  62 => 21,  58 => 20,  39 => 3,  36 => 2,  11 => 1,);
    }
}
