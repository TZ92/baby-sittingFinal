<?php

/* PidevbackBundle:Garderie:list.html.twig */
class __TwigTemplate_62d5397ddea20ab122692136140e38dbdcf99fdbd30f3e56fac505f051f0f863 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "PidevbackBundle:Administrateur:ajout";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1> Formulaire de recherche </h1>
<form  method=\"POST\" action=\"\" >
    Liste des garderie par ville : <input type=\"text\" name=\"villeGarderie\"/>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"Chercher\">
</form>
<h1> Liste des garderie </h1>
<table class=\"table-hover\">
    <tr>
        <th>Id Garderie</th>
        <th>Nom garderie</th>
        <th>adresse garderie</th>
        <th>Ville</th>
        <th>Numéro tél :</th>
        <th>Adresse e-mail</th>
        <th>Capacité</th>
        <th>Description</th>
        <th> </th>
        <th></th>
    </tr>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Garderie"]) ? $context["Garderie"] : $this->getContext($context, "Garderie")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 26
            echo "        <tr>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nomGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "adresseGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "villeGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "numTel", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "contactGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "capaciteGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descriptionGarderie", array()), "html", null, true);
            echo "</td>
            <td>
                <a role=\"btn\" class=\"btn btn-default\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateGarderie", array("idgarderie" => $this->getAttribute($context["m"], "idgarderie", array()))), "html", null, true);
            echo "\">Mise à jour</a>
            </td>
            <td>
                <a role=\"btn\" class=\"btn btn-default\"  href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteGarderie", array("idgarderie" => $this->getAttribute($context["m"], "idgarderie", array()))), "html", null, true);
            echo "\">Supprimer</a>
            </td>
   

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    <tr>
        <td>
        
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ajoutGarderie");
        echo "\" class=\"btn btn-default\">create new entry</a>
        </td>
    </tr>
</table>
  ";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Garderie:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  124 => 44,  113 => 39,  107 => 36,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  71 => 26,  67 => 25,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
