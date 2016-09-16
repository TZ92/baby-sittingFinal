<?php

/* PidevbackBundle:Evenement:ajout.html.twig */
class __TwigTemplate_f7e33c3f72ce53fbb966593180e2e4314a2c44665e4d3556d8c2528683a748e7 extends Twig_Template
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
        echo "<h1> Ajout d'un nouveau evenement</h1>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
    
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    <br/><input class=\"btn btn-primary\"  type=\"submit\" value=\"Envoyer\"/>
    
</form>

";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Evenement:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
