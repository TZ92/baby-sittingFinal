<?php

/* PidevFrontBundle:Service:listServices.html.twig */
class __TwigTemplate_c58c7fb69f0f318cc1b39948661b69a19a8165fd4d16be9413a42a3e3ebb5732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'bannerForm' => array($this, 'block_bannerForm'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bannerForm($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
        <h1>Formulaire de recherche</h1>

        <form action=\"\" method=\"post\">
            Service: <input type=\"text\" name=\"typeService\"/>
            <input type=\"submit\" value=\"Rechercher\"/>
        </form>

        <h1>Liste des services</h1>
        <table class=\"table-hover\" style=\"color:#000\">
            <tr>
               
                <th>Service</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th></th>
                
            </tr>
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Services"]) ? $context["Services"] : $this->getContext($context, "Services")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 27
            echo "                <tr class=\"defaut\" onclick=\"SelectLigne(this)\">
                   
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "typeService", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "idCategorie", array()), "nomcategorie", array()), "html", null, true);
            echo "</td>
                    
                    <td><a role=\"btn\" class=\"btn btn-default\"href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidevFront_choisir", array("id" => $this->getAttribute($context["s"], "idservice", array()))), "html", null, true);
            echo "\">Choisir service</a></td>
                </tr>   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </table>
";
    }

    public function getTemplateName()
    {
        return "PidevFrontBundle:Service:listServices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  86 => 33,  81 => 31,  77 => 30,  73 => 29,  69 => 27,  65 => 26,  45 => 8,  42 => 7,  37 => 3,  11 => 1,);
    }
}
