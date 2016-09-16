<?php

/* PidevbackBundle:Evenement:list.html.twig */
class __TwigTemplate_5ae81b0912f2acb27dc2c800e6dd97975ddf0d82a228ad1982b979fab89cd050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevbackBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "PidevbackBundle:Administrateur:ajout";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1> Formulaire de recherche </h1>
<form  method=\"POST\" action=\"\" >
    id : <input type=\"text\" name=\"idevenement\"/>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"Chercher\">
</form>
<h1> Liste des Evenement </h1>
<table class=\"table-hover\">
    <tr>
        <th>Id evenement</th>
        <th>Nom evenement</th>
        <th>Thème de l'evenement</th>
        <th>Adresse evenement</th>
        <th>Nombre de place</th>
        <th>Affiche evenement</th>
        <th></th>
        <th></th>
    </tr>
    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Evenement"]) ? $context["Evenement"] : $this->getContext($context, "Evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 25
            echo "        <tr>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idevenement", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nomevenement", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "themeevenement", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "adresseevenement", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nbplacemax", array()), "html", null, true);
            echo "</td>
            <td><img width=\"150\" height=\"200\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/evenement/" . $this->getAttribute($context["m"], "path", array()))), "html", null, true);
            echo "\"</td>
            <td>
                <a role=\"btn\" class=\"btn btn-default\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateEvenement", array("idevenement" => $this->getAttribute($context["m"], "idevenement", array()))), "html", null, true);
            echo "\">MAJ</a>
            </td>
            
            <td>
                <a role=\"btn\" class=\"btn btn-default\"  href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteEvenement", array("idevenement" => $this->getAttribute($context["m"], "idevenement", array()))), "html", null, true);
            echo "\">Supprimer</a>
            </td>
      
        </tr>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    <td>
   <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ajoutEvenement");
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
        return "PidevbackBundle:Evenement:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  116 => 43,  104 => 37,  97 => 33,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  69 => 25,  65 => 24,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
