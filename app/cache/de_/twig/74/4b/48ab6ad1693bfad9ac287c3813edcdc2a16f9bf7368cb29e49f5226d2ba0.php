<?php

/* PidevbackBundle:Service:updateService.html.twig */
class __TwigTemplate_744b48ab6ad1693bfad9ac287c3813edcdc2a16f9bf7368cb29e49f5226d2ba0 extends Twig_Template
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
        echo "        <h1>Mise a jour d'un service</h1>
        <form action=\"\" method=\"post\">
            ";
        // line 8
        echo "            <table class=\"table table-hover\">
                <tr>
                    <td>Service :</td>
                    <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "typeService", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>Description :</td>
                    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>Categorie :</td>
                    <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idCategorie", array()), 'widget');
        echo "</td>
                </tr>
            </table>
            <br/>
            <input type=\"submit\" value=\"Mettre à jour\"/>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
        </form>

";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Service:updateService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  65 => 19,  58 => 15,  51 => 11,  46 => 8,  42 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
