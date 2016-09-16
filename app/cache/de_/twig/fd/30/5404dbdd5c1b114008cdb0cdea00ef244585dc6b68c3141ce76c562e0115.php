<?php

/* PidevbackBundle:Categorie:updateCategorie.html.twig */
class __TwigTemplate_fd305404dbdd5c1b114008cdb0cdea00ef244585dc6b68c3141ce76c562e0115 extends Twig_Template
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
        echo "
        ";
        // line 5
        echo "        <h1>Mise a jour d'une catégorie</h1>
        <form action=\"\" method=\"post\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Mettre à jour\"/>
        </form>
       ";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Categorie:updateCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  42 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
