<?php

/* PidevbackBundle:Categorie:addCategorie.html.twig */
class __TwigTemplate_8d45e9684aaac5fbc570ca027c249cdddc05a681b12eea8db486148f2b59228b extends Twig_Template
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
        echo "        ";
        // line 4
        echo "        <h1>Ajout d'une nouvelle catégorie</h1>
        ";
        // line 6
        echo "        <form action=\"\" method=\"post\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Ajouter\"/>
        </form>
        ";
        // line 11
        echo "       ";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Categorie:addCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  47 => 7,  44 => 6,  41 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
