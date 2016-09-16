<?php

/* PidevMapBundle:Map:MapNadine.html.twig */
class __TwigTemplate_95677a93ec3ec86da95f8aed4015c318483d460befa72b6c6317385118719cca extends Twig_Template
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
        echo "<!DOCTYPE html> 
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <title>Map</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.8.12.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" /> 
  </head>
  <style type=\"text/css\">
    body{font-family:Arial;background:#000000;margin:0px;padding:0px;}
    #container{position:relative;width:990px;margin:auto;background:#FFFFFF;padding:20px 0px 20px 0px;}
    #container h1{margin:0px 0px 10px 20px;}
    #container #map{width:700px;height:500px;margin:auto;}
    #container #panel{width:700px;margin:auto;}
    #container #destinationForm{margin:0px 0px 20px 0px;background:#EEEEEE;padding:10px 20px;border:solid 1px #C0C0C0;}
    #container #destinationForm input[type=text]{border:solid 1px #C0C0C0;}
  </style>
  <body>
    <div id=\"container\">
        <h1>Locate Me</h1>
        <div id=\"destinationForm\">
            <form action=\"\" method=\"get\" name=\"direction\" id=\"direction\">
                <label>Point de départ :</label>
                <input type=\"text\" name=\"origin\" id=\"origin\">
                ";
        // line 25
        echo "                <input type=\"text\" name=\"destination\" id=\"destination\" hidden=\"true\">
                <input type=\"button\" value=\"Me localiser\" onclick=\"javascript:calculate()\">
            </form>
        </div>
        ";
        // line 30
        echo "        <div id=\"map\">
            <p>Veuillez patienter pendant le chargement de la carte...</p>
        </div>
    </div>
    
    <!-- Include Javascript -->
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.12.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false&language=fr\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "PidevMapBundle:Map:MapNadine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 39,  65 => 37,  61 => 36,  53 => 30,  47 => 25,  26 => 6,  19 => 1,);
    }
}
