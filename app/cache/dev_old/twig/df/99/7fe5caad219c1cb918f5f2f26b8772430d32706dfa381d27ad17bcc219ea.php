<?php

/* PidevbackBundle:Parents:ListeParents.html.twig */
class __TwigTemplate_df997fe5caad219c1cb918f5f2f26b8772430d32706dfa381d27ad17bcc219ea extends Twig_Template
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
        // line 1
        echo "<html>
    <head>
    </head>
    <body>
        <header>
            <aside style=\"width: 30%; position: relative; left: auto\">
                Babysitter <br>
                1080 Lac 2 <br>
                Tunis <br>
            </aside>
        </header> <br>
    <center>
        <table style=\"text-align: center; column-span: 20; border: 1px; width: 100%\">
            <tr>
                <td> CIN</td>
                <td> Nom Parent</td>
                <td> Prenom Parent</td>
                <td> Ville</td>
                <td> Nombre d'enfant</td>
                <td> Adresse Mail</td>
                <td> Etat</td>
            </tr>
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["some"]) ? $context["some"] : $this->getContext($context, "some")));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 24
            echo "                <tr>
                    <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "cinParent", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "nomParent", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenomParent", array()), "html", null, true);
            echo " </td>
                     <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "villeParent", array()), "html", null, true);
            echo " </td>
                     <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "nbEnfant", array()), "html", null, true);
            echo " </td>
                      <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "mailParent", array()), "html", null, true);
            echo " </td>
                      <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "enable", array()), "html", null, true);
            echo " </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </table>
    </center>
        <footer style=\"position: absolute; bottom: 0;\">
            <div style=\"float: left; width: 700px\">
                Babysitter <br>
                1080 Lac 2 <br>
                Tunis<br
                    El Ghazela<br>
            </div>
           
            
            <div style=\"float: right\">
                Contact <br>
                Tel: (+216)71.122.334 <br>
                Email: contact@babysitter.com <br>
                Site: www.babysitter.tn
            </div>
            
                
           
            
        </footer>
    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Parents:ListeParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  58 => 27,  54 => 26,  50 => 25,  47 => 24,  43 => 23,  19 => 1,);
    }
}
