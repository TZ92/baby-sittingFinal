<?php

/* PidevbackBundle:Reclamation:list.html.twig */
class __TwigTemplate_b1feea28895d91c2efdaaf45800b438b471b12308c48914b1685b50e9571116f extends Twig_Template
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
            'rec' => array($this, 'block_rec'),
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
        echo "<h1> Formulaire de recherche </h1>
<form class=\"form-horizontal\" method=\"POST\" action=\"\" >
    <div class=\"controls\">
    <label class=\"control-label\" for=\"inputWarning\">Type :</label>
    &emsp;
    <input type=\"text\" name=\"type\" id=\"inputWarning\"/>
    &emsp;
    <input type=\"submit\" value=\"Chercher\" class=\"btn btn-primary\">
</form>
<h1> Liste des Reclamations </h1>
<table class=\"table table-hover\">
    <tr>
        <th>idreclamation</th>
        <th>sujetreclamation</th>
        <th>datereclamation</th>
        <th>email</th>
        <th>type</th>
        <th>idParent </th>
        <th>codePostal</th>
        <th>message</th>
        <th></th>
    </tr>
    
    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamation"]) ? $context["Reclamation"] : $this->getContext($context, "Reclamation")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 27
            echo "        
        <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idreclamation", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sujetreclamation", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "datereclamation", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "type", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "idParent", array()), "nomParent", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "codePostal", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "message", array()), "html", null, true);
            echo "</td>
            <td><a class=\"btn btn-default\"  role=\"btn\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteReclamation", array("idreclamation" => $this->getAttribute($context["m"], "idreclamation", array()))), "html", null, true);
            echo "\"> Suprimer </a></td>
       
        </tr>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "     
</table>
      

";
    }

    // line 47
    public function block_rec($context, array $blocks = array())
    {
        // line 48
        echo "<table class=\"table table-hover\">
    <tr>
        
        <th>reclamation</th>
        <th>Parent </th>

        <th></th>
    </tr>
    
    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamation"]) ? $context["Reclamation"] : $this->getContext($context, "Reclamation")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 58
            echo "        
        <tr>
 
            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sujetreclamation", array()), "html", null, true);
            echo "</td>
            
            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "idParent", array()), "nomParent", array()), "html", null, true);
            echo "</td>
 
           
       
        </tr>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "     
</table>
    ";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Reclamation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 70,  152 => 63,  147 => 61,  142 => 58,  138 => 57,  127 => 48,  124 => 47,  116 => 42,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  73 => 29,  69 => 27,  65 => 26,  40 => 3,  37 => 2,  11 => 1,);
    }
}
