<?php

/* PidevbackBundle:Parents:showp.html.twig */
class __TwigTemplate_acb0735278504c5e2c101bdc76e1adbe56c73896c8a677e3855d09ca5ade5811 extends Twig_Template
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
        echo "    <h1>Liste Des Parents</h1>
    <a style=\"color:red;\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("generateParent");
        echo "\">Generer un  pdf </a>   
    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Cin</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinParent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomParent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenomParent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "villeParent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseParent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero de telphone</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numtelParent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mailParent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre d'enfant(s)</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbEnfant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Infomation sur votre enfant(s)</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "infoEnfant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date inscription </th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateInscri", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de dernier mise a jour</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateMaj", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
            <table>
    <tr>
        <td>
           &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
        </td>
        <td>
           &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
        </td>
        <td>
           &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
        </td>
        <td>
           &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
        </td>
        <td>
           &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
        </td>
        <td>
           &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
        </td>
        <td>
        <a class=\"btn btn-default\"  role=\"btn\"  href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parents_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idParent", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-primary\">
    </td>
</tr>
            </table>
";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Parents:showp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 78,  127 => 53,  120 => 49,  113 => 45,  106 => 41,  99 => 37,  92 => 33,  85 => 29,  78 => 25,  71 => 21,  64 => 17,  57 => 13,  50 => 9,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
