<?php

/* PidevbackBundle:Babysitter:liste.html.twig */
class __TwigTemplate_57ea802f64bd94545fcd00cdd0b8b1145deec314676ba814fb4c10b0c4fdc4f8 extends Twig_Template
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
        echo "            <h2>Liste Des Baby Sitter </h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>Cin</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Numero de Telephone</th>
        <th>Mail</th>
        <th>Tarif par Heure</th>
         <th></th>
      </tr>
    </thead>
    <tbody>
          </tr>
    
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["baby"]) ? $context["baby"] : $this->getContext($context, "baby")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 22
            echo "        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "cinBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nomBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "prenomBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "ageBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "numtelBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "mailBabysitter", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "note", array()), "html", null, true);
            echo "</td>
            
            <td><a class=\"btn btn-default\"  role=\"btn\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showBaby", array("id" => $this->getAttribute($context["b"], "idBabysitter", array()))), "html", null, true);
            echo "\"> afficher detail </a></td>
            
        </tr>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "     
    </tbody>
  </table>
";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle:Babysitter:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  95 => 31,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  63 => 22,  59 => 21,  39 => 3,  36 => 2,  11 => 1,);
    }
}
