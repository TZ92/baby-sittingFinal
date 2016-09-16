<?php

/* PidevbackBundle:Evenement:upload.html.twig */
class __TwigTemplate_a93323ff7300c58675c0fbd7bf03b73205f7668d6228fe8e2edf89a7e1c2336d extends Twig_Template
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
        // line 2
        echo "<h1>Ajout d'un modèle</h1>
<form method=\"POST\" action=\"\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Envoyer\"/>
</form>";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Evenement:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  19 => 2,);
    }
}
