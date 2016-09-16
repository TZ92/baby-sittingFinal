<?php

/* PidevbackBundle:Babysitter:recherche.html.twig */
class __TwigTemplate_f9cbf04c8fdb91d45f0cd462f938dc4ae002d79075ed9bacd247c074fb48764d extends Twig_Template
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
<h1>Welcome to the Babysitter:recherche page</h1>
            <h3>Rechercher </h3>
<form  method=\"POST\" action=\"\" >
    cin : <input type=\"text\" name=\"cin\"/>
    <input type=\"submit\" value=\"Chercher\"/>
</form>
<table border=\"1\" >
    <tr>
        <th>Cin</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
        <th>Ville</th>
        <th>Adresse</th>
        <th>Age</th>
        <th>Numero de Telephone</th>
        <th>Mail</th>
        <th>Niveau</th>
        <th>Nombre de Mission</th>
        <th>Nombre D'enfants Garder</th>
        <th>Distance Maximale</th>
        <th>Description</th>
        <th>Tarif par Heure</th>
        <th>Note</th>
         <th>Modifier</th>
        <th>Supprimer</th>
      
      
    </tr>
    
    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 33
            echo "        <tr>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "cinBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nomBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "prenomBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "sexeBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "ville", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "adresseBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "ageBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "numtelBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "mailBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "niveauBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nbMissionBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nbEnfantBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "distancemaxBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "descriptionBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "tarifHeur", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "note", array()), "html", null, true);
            echo "</td>
            
            <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateBaby", array("id" => $this->getAttribute($context["b"], "idBabysitter", array()))), "html", null, true);
            echo "\"> Modifier </a></td>
            <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteBaby", array("id" => $this->getAttribute($context["b"], "idBabysitter", array()))), "html", null, true);
            echo "\"> Supprimer </a></td>
            
        </tr>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Babysitter:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  128 => 52,  124 => 51,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  99 => 44,  95 => 43,  91 => 42,  87 => 41,  83 => 40,  79 => 39,  75 => 38,  71 => 37,  67 => 36,  63 => 35,  59 => 34,  56 => 33,  52 => 32,  19 => 1,);
    }
}
