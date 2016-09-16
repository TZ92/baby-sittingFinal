<?php

/* PidevbackBundle:Garderie:ajoutGarderie.html.twig */
class __TwigTemplate_55919cca90823adb4288d75cf80f71129de49a58a842710006c1f4aedb6374fe extends Twig_Template
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
        echo "        <h1>Ajout d'une garderie</h1>
        <table class=\"table-hover\">
            <form class=\"form-horizontal\" method=\"POST\" action=\"\">
                <tr>
                    <td>Nom de la garderie :</td>
                    <td><input type=\"text\" name=\"nom\"/></td>
                </tr>
                <tr>
                    <td>Adresse de la garderie :</td>
                    <td><input type=\"text\" name=\"adresse\"/></td>
                </tr>
                <tr>
                    <td>Ville :</td>
                    <td><input type=\"text\" name=\"ville\"/></td>
                </tr>
                <tr>
                    <td>Num Tél :</td>
                    <td><input type=\"text\" name=\"numero\"/></td>
                </tr>
                <tr>
                    <td>E-mail :</td>
                    <td><input type=\"text\" name=\"mail\"/></td>
                </tr>
                <tr>
                    <td>Capacité :</td>
                    <td><input type=\"text\" name=\"capacite\"/></td>
                </tr>
                <tr>
                    <td>Description :</td>
                    <td><textarea name=\"description\" rows=\"10\" cols=\"15\" id=\"description\"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\"/></td>
                </tr>
            </form>
        </table>
  ";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Garderie:ajoutGarderie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
