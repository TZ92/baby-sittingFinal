<?php

/* PidevbackBundle:Service:addService.html.twig */
class __TwigTemplate_bda454b1fd62b93d664d05fdaee5898d78afaf33c43a9e0ce969bc3978555e96 extends Twig_Template
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
            'menu1' => array($this, 'block_menu1'),
            'menu' => array($this, 'block_menu'),
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
        echo "        ";
        $this->displayBlock('menu1', $context, $blocks);
        // line 6
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 7
        echo "        ";
        // line 8
        echo "        <form action=\"\" method=\"post\">
            ";
        // line 10
        echo "            <table class=\"table table-hover\">
                <tr>
                    <td>Service :</td>
                    <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "typeService", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>Description :</td>
                    <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>Categorie :</td>
                    <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idCategorie", array()), 'widget');
        echo "</td>
                </tr>
            </table>
            <br/>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter\"/>
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
        </form>
        ";
        // line 29
        echo "        ";
    }

    // line 5
    public function block_menu1($context, array $blocks = array())
    {
        echo " Espace de Services ";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        echo "   Ajout d'un nouveau Service";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Service:addService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 6,  91 => 5,  87 => 29,  82 => 26,  74 => 21,  67 => 17,  60 => 13,  55 => 10,  52 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
