<?php

/* PidevFrontBundle:OffreMission:list.html.twig */
class __TwigTemplate_ccb948f63e4dcc2107bf1c367ece4dba3b022d58da0096b1c4074025f5b4d978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontBundle::layout.html.twig");
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
        return "PidevFrontBundle::layout.html.twig";
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
        echo "<h1>Formulaire de recherche</h1>

        <form action=\"\" method=\"post\">
            Service: <input type=\"text\" name=\"lieuMission\"/>
            <input type=\"submit\" value=\"Rechercher\"/>
        </form>
<h1> Liste des offres </h1>
<table  class=\"table table-hover\" style=\"color:#000\">
    <tr>
        
        <th>Lieu mission</th>
        <th>Date de début</th>
        <th>Date de fin</th>
        <th>Horaire de garde</th>
        <th>Nombre d'enfants</th>
        <th>Sexe</th>
        <th></th>
        <th></th>
        <th></th>
      
        
        
    </tr>
    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 31
            echo "        <tr>
            
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "lieuMission", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["o"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["o"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "horaireGarde", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "nombreEnfant", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "sexe", array()), "html", null, true);
            echo "</td>
            <td><a role=\"btn\" class=\"btn btn-default\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_backBundle_delete", array("id" => $this->getAttribute($context["o"], "idOffre", array()))), "html", null, true);
            echo "\">supprimer</a></td>
            <td><a role=\"btn\" class=\"btn btn-default\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Update_Offre", array("id" => $this->getAttribute($context["o"], "idOffre", array()))), "html", null, true);
            echo "\">Mise a jour</a></td>
            <td><a role=\"btn\" class=\"btn btn-default\" href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("pidev_map_map");
            echo "\">Localiser Mission</a></td>

        </tr>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PidevFrontBundle:OffreMission:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  81 => 33,  77 => 31,  73 => 30,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  11 => 1,);
    }
}
