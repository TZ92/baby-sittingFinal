<?php

/* PidevFrontBundle:Babysitter:show.html.twig */
class __TwigTemplate_fd2cd5ff463abb8a2daa24ed5a87153db9bce2822f9827034fc73f4b2c1699c1 extends Twig_Template
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
        echo "    <h1>Baby-Sitter - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "prenomBabysitter", array()), "html", null, true);
        echo "</h1>
    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>cin</th>
                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "cinBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "nomBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "prenomBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "ageBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "sexeBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "adresseBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero de Telephne </th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "numtelBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>E-mail </th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "mailBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau </th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "niveauBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de Mission </th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "nbMissionBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre D'enfant(s) garder </th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "nbEnfantBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Distance Maximale</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "distancemaxBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "descriptionBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tarif par heur</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "tarifHeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

            <table class=\"table-responsive table-hover table\" >
    <tr>
        <td>
        <a class=\"btn btn-default\"  role=\"btn\" href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("listeBaby");
        echo "\">
            Back to the list
        </a>
    </td>
    <td>
        &emsp;&emsp;&emsp;&emsp;
    </td>
    <td>
        &emsp;&emsp;&emsp;
    </td>
    
    <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;
        <a class=\"btn btn-primary\"  role=\"btn\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateBaby", array("id" => $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "idBabysitter", array()))), "html", null, true);
        echo "\">
          Mettre a jour
        </a>&emsp;
        <a class=\"btn btn-primary\"  role=\"btn\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteBaby", array("id" => $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "idBabysitter", array()))), "html", null, true);
        echo "\">
          Supprimer
        </a>
    </td>
</tr>
            </table>
";
    }

    public function getTemplateName()
    {
        return "PidevFrontBundle:Babysitter:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 93,  181 => 90,  165 => 77,  154 => 69,  147 => 65,  140 => 61,  133 => 57,  126 => 53,  119 => 49,  112 => 45,  105 => 41,  98 => 37,  91 => 33,  83 => 28,  76 => 24,  69 => 20,  62 => 16,  55 => 12,  48 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
