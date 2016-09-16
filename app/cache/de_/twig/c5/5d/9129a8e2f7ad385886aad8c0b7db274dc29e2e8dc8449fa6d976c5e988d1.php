<?php

/* PidevFrontBundle:ServiceParent:listServices.html.twig */
class __TwigTemplate_c55d9129a8e2f7ad385886aad8c0b7db274dc29e2e8dc8449fa6d976c5e988d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "



        <h1>Formulaire de recherche</h1>

        <form action=\"\" method=\"post\">
            Service: <input type=\"text\" name=\"typeService\"/>
            <input type=\"submit\" value=\"Rechercher\"/>
        </form>

        <h1>Liste des services</h1>
        <table border=\"1\">
            <tr>
                
                <th>Service</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th>Choisir</th>
                
            </tr>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Services"]) ? $context["Services"] : $this->getContext($context, "Services")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 23
            echo "                <tr>
                   
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "typeService", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "idCategorie", array()), "nomCategorie", array()), "html", null, true);
            echo "</td>
                    
                    <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidevFront_choisir", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
            echo "\">Choisir service</a></td>
                </tr>   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </table>";
    }

    public function getTemplateName()
    {
        return "PidevFrontBundle:ServiceParent:listServices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 32,  63 => 29,  58 => 27,  54 => 26,  50 => 25,  46 => 23,  42 => 22,  19 => 1,);
    }
}
