<?php

/* PidevFrontBundle:Garderie:liste.html.twig */
class __TwigTemplate_2defb9942fde0f2d585a3c133950efaad0f6c8e678f847ab2dba369ac91e3316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontBundle::layout2.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'bannerForm' => array($this, 'block_bannerForm'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bannerForm($context, array $blocks = array())
    {
        // line 4
        echo "    
    ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <h1> Formulaire de recherche </h1>

<form  method=\"POST\" action=\"\" >
    Liste des garderie par ville : <input type=\"text\" name=\"villeGarderie\"/>
    <input type=\"submit\" value=\"Chercher\">
</form>
<h1> Liste des garderie </h1>
<table  class=\"table table-hover\" style=\"color:black;\">
    <tr>
        <th>Id Garderie</th>
        <th>Nom garderie</th>
        <th>adresse garderie</th>
        <th>Ville</th>
        <th>Numéro tél :</th>
        <th>Adresse e-mail</th>
        <th>Capacité</th>
        <th>Description</th>
        
    </tr>
    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Garderie"]) ? $context["Garderie"] : $this->getContext($context, "Garderie")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 27
            echo "        <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nomGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "adresseGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "villeGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "numTel", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "contactGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "capaciteGarderie", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descriptionGarderie", array()), "html", null, true);
            echo "</td>
            
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</table>
    ";
    }

    public function getTemplateName()
    {
        return "PidevFrontBundle:Garderie:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  73 => 27,  69 => 26,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  11 => 1,);
    }
}
