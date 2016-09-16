<?php

/* PidevFrontBundle:OffreMission:update.html.twig */
class __TwigTemplate_bef0cb669007349af9723743ab5343e74ff8d94478f2e969ed5505cf4803e7b0 extends Twig_Template
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
        echo "<h1>Mise a jour d'une offre</h1>
<form action=\"\" method=\"POST\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo "> ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    <input type=\"submit\" value=\"mettre à jour\">
</form>

";
    }

    public function getTemplateName()
    {
        return "PidevFrontBundle:OffreMission:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,  19 => 1,);
    }
}
