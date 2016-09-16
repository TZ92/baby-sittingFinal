<?php

/* FOSUserBundle:Profile:show_content_admin.html.twig */
class __TwigTemplate_2f3e790f977072294add1d0b16af1cc0a6adbf105315c3d1700dfbe6b17a52dc extends Twig_Template
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
        // line 4
        echo " <div>
            ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                 
                </a>
            ";
        } else {
            // line 9
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 11
        echo "        </div>
<div class=\"fos_user_user_show\">
    
   
            <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
    <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>cin</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "cinBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "nomBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "prenomBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "ageBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "sexeBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "adresseBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero de Telephne </th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "numtelBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau </th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "niveauBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de Mission </th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "nbMissionBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre D'enfant(s) garder </th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "nbEnfantBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Distance Maximale</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "distancemaxBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "descriptionBabysitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tarif par heur</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "tarifHeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
            
</div>
       ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 84,  179 => 80,  172 => 76,  165 => 72,  158 => 68,  151 => 64,  144 => 60,  137 => 56,  130 => 52,  122 => 47,  115 => 43,  108 => 39,  101 => 35,  94 => 31,  87 => 27,  80 => 23,  76 => 22,  70 => 19,  66 => 18,  57 => 11,  49 => 9,  44 => 6,  42 => 5,  39 => 4,  36 => 2,  11 => 1,);
    }
}
