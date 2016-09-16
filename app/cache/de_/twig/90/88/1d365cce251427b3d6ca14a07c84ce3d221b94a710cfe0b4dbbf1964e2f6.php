<?php

/* PidevFrontBundle:Babysitter:update.html.twig */
class __TwigTemplate_90881d365cce251427b3d6ca14a07c84ce3d221b94a710cfe0b4dbbf1964e2f6 extends Twig_Template
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
        echo "Mette a Jour  D'un Baby Sitter ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <form class=\"form-horizontal\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " >
<table class=\"table table-hover\">
    
    <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Cin*</label>
        </td>
        <td>
           ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "cinBabysitter", array()), 'widget');
        echo "
           ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "cinBabysitter", array()), 'errors');
        echo "
        </td>
   
    <tr>
     <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Nom*</label>
        </td>
        <td>
           ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomBabysitter", array()), 'widget');
        echo "
           ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
     <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Prenom*</label>
        </td>
        <td>
           ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenomBabysitter", array()), 'widget');
        echo "
           ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenomBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
       <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Age*</label>
        </td>
        <td>
           ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "ageBabysitter", array()), 'widget');
        echo "
           ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "ageBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
     <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Sexe*</label>
        </td>
        <td>
           ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sexeBabysitter", array()), 'widget');
        echo "
           ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sexeBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
     <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Ville*</label>
        </td>
        <td>
           ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "ville", array()), 'widget');
        echo "
           ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "ville", array()), 'errors');
        echo "
        </td>
     </tr>
      <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Adresse*</label>
        </td>
        <td>
           ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresseBabysitter", array()), 'widget');
        echo "
           ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresseBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
     <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Numero de Telephone*</label>
        </td>
        <td>
           ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "numtelBabysitter", array()), 'widget');
        echo "
           ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "numtelBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
     <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">E-mail*</label>
        </td>
        <td>
           ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "mailBabysitter", array()), 'widget');
        echo "
           ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "mailBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
      <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Niveau*</label>
        </td>
        <td>
           ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "niveauBabysitter", array()), 'widget');
        echo "
           ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "niveauBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
      <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Nembre de missions*</label>
        </td>
        <td>
           ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbMissionBabysitter", array()), 'widget');
        echo "
           ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbMissionBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
      <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Nembre d'enfant(s) garder*</label>
        </td>
        <td>
           ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbEnfantBabysitter", array()), 'widget');
        echo "
           ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbEnfantBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
        <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Distance MAximale*</label>
        </td>
        <td>
           ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "distancemaxBabysitter", array()), 'widget');
        echo "
           ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "distancemaxBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
       <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Description*</label>
        </td>
        <td>
           ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "descriptionBabysitter", array()), 'widget');
        echo "
           ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "descriptionBabysitter", array()), 'errors');
        echo "
        </td>
     </tr>
       <tr>
        <td>
            <label class=\"control-label\" for=\"inputWarning\">Tarif par Heur*</label>
        </td>
        <td>
           ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "tarifHeur", array()), 'widget');
        echo "
           ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "tarifHeur", array()), 'errors');
        echo "
        </td>
     </tr>
    <tr>
        <td></td>
        <td>
             <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\"/>
             <input type=\"reset\" value=\"Annuler\" class=\"btn\" onclick=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("listeBaby");
        echo "\"/>
        </td>
    </tr>

   
</table>
   ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "     
</form>
";
    }

    public function getTemplateName()
    {
        return "PidevFrontBundle:Babysitter:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 155,  283 => 149,  273 => 142,  269 => 141,  258 => 133,  254 => 132,  243 => 124,  239 => 123,  228 => 115,  224 => 114,  213 => 106,  209 => 105,  198 => 97,  194 => 96,  183 => 88,  179 => 87,  168 => 79,  164 => 78,  153 => 70,  149 => 69,  138 => 61,  134 => 60,  123 => 52,  119 => 51,  108 => 43,  104 => 42,  93 => 34,  89 => 33,  78 => 25,  74 => 24,  62 => 15,  58 => 14,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
