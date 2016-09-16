<?php

/* PidevbackBundle:Babysitter:ListeBaby.html.twig */
class __TwigTemplate_1860527d972263def268c5e0437dbee29ce8758844e2ab18bcc1679689e49204 extends Twig_Template
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
                <td> Nom Babysitter</td>
                <td> Prenom Babysitter</td>
                <td> Ville</td>
                <td> Note</td>
                <td> Etat</td>
            </tr>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["some"]) ? $context["some"] : $this->getContext($context, "some")));
        foreach ($context['_seq'] as $context["_key"] => $context["babysitter"]) {
            // line 23
            echo "                <tr>
                    <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["babysitter"], "cinBabysitter", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["babysitter"], "nomBabysitter", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["babysitter"], "prenomBabysitter", array()), "html", null, true);
            echo " </td>
                     <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["babysitter"], "ville", array()), "html", null, true);
            echo " </td>
                      <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["babysitter"], "note", array()), "html", null, true);
            echo " </td>
                      <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["babysitter"], "enable", array()), "html", null, true);
            echo " </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['babysitter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        return "PidevbackBundle:Babysitter:ListeBaby.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  69 => 29,  65 => 28,  61 => 27,  57 => 26,  53 => 25,  49 => 24,  46 => 23,  42 => 22,  19 => 1,);
    }
}
