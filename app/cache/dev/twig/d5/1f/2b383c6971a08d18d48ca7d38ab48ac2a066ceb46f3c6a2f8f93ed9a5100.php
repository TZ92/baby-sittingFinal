<?php

/* PidevFrontBundle::layout2.html.twig */
class __TwigTemplate_d51f2b383c6971a08d18d48ca7d38ab48ac2a066ceb46f3c6a2f8f93ed9a5100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bannerForm' => array($this, 'block_bannerForm'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <!DOCTYPE <!DOCTYPE html>
<html lang=\"fr\">
    ";
        // line 4
        echo "\t<head>
\t\t<title>BabySittin : Vos enfants c'est notre résponsabilité</title>
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon-96x96.png"), "html", null, true);
        echo "\">
\t\t<meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <meta name=\"description\" content=\"\">
\t    <meta name=\"author\" content=\"\">
\t\t
\t\t<!-- Custom CSS -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t<!-- Bootstrap Core CSS -->
    \t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<!-- Morris Charts CSS -->
    \t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t</head>
\t<body>
\t\t<header>
\t\t\t<div class=\"headerBloc\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"social\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
                                        
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"connection\">
\t\t\t\t\t 
\t\t\t\t\t <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-default\" role=\"button\">Inscription</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t    Connection
\t\t\t\t\t\t    <span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
\t\t\t\t\t\t    <form class=\"navbar-form navbar-left\" role=\"search\">
\t\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t\t        \t<li>
                            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa fa-fw fa-user\"></i> Baby-sitter</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa fa-fw fa-user\"></i> Parent</a>
                        </li>
                        
                        
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        
\t\t\t\t\t      </form>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<nav class=\"navbar navbar-default\">
\t\t\t <div class=\"container-fluid\">
\t\t\t    <!-- Brand and toggle get grouped for better mobile display -->
\t\t\t    <div class=\"navbar-header\">
\t\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t        <span class=\"sr-only\">Toggle navigation</span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t      </center>
\t\t\t      </button>
\t\t\t\t</div>

\t\t\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t     <ul class=\"nav navbar-nav\">
\t\t\t\t        <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Recherche <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("pidev_backBundle_List");
        echo "\">Liste des missions</a></li>
\t\t\t\t        <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("listeGarderie");
        echo "\">Espace garderie</a></li>
\t\t\t\t        <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("pidevFront_list");
        echo "\">Services</a></li>
\t\t\t\t        <li><a href=\"#\">Contact</a></li>
\t\t\t\t     </ul>
\t\t\t    </div><!-- /.navbar-collapse -->
  \t\t\t</div><!-- /.container-fluid -->
\t\t</nav>
                ";
        // line 87
        $this->displayBlock('bannerForm', $context, $blocks);
        // line 130
        echo "\t\t<div class=\"contenu\">
                    ";
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "\t\t</div>
\t\t<footer>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>Suivez-nous sur</td>
\t\t\t\t\t<td>À propos</td>
\t\t\t\t\t<td>Aides et Conseils</td>
\t\t\t\t\t<td>Informations</td>
\t\t\t\t\t<td>Services</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t\t<td>menu</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</footer>
\t\t<!-- jQuery -->
\t    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Bootstrap Core JavaScript -->
\t    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Morris Charts JavaScript -->
\t    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>\t
\t</body>
</html>";
    }

    // line 87
    public function block_bannerForm($context, array $blocks = array())
    {
        echo "          
\t\t<div class=\"bannerForm\" >
\t\t\t<div class=\"formBloc\">
\t\t\t\t<div class=\"formBG\">
\t\t\t\t\t<h3>Trouver une personne qui vous convient</h3>
                                        <center><form class=\"form1\">
\t\t\t\t\t\t<select class=\"btn btn-default dropdown-toggle\" name=\"select\">
\t\t\t\t\t\t\t<option>Sexe</option>
\t\t\t\t\t\t\t<option>Femme</option>
\t\t\t\t\t\t\t<option>Homme</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"btn btn-default dropdown-toggle\" name=\"select\">
\t\t\t\t\t\t\t<option>Age</option>
\t\t\t\t\t\t\t<option>18</option>
\t\t\t\t\t\t\t<option>19</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"btn btn-default dropdown-toggle\" name=\"select\">
\t\t\t\t\t\t\t<option>Ville</option>
\t\t\t\t\t\t\t<option>Tunis</option>
\t\t\t\t\t\t\t<option>Ariana</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"btn btn-default dropdown-toggle\" name=\"select\">
\t\t\t\t\t\t\t<option>Prix</option>
\t\t\t\t\t\t\t<option>50</option>
\t\t\t\t\t\t\t<option>60</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"btn btn-default dropdown-toggle\" name=\"select\">
\t\t\t\t\t\t\t<option>Note</option>
\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t<option>6</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t <center><button type=\"submit\" class=\"btn myBtn2\">Je cherche !</button>
\t\t\t\t\t</form>
                                            
                                    </center>
\t\t\t\t</div>
                            <div style='color:grey; position:relative; bottom:100px; left:120px; '>
                                <h4>*BabySitting vous propose une recherche avancee a fin de trouver votre perle rare.</h4>
                                <h4>**Vous n'etes pas oblige a remplir tout les champs.</h4>
                            </div>
\t\t\t</div>
\t\t</div>
                ";
    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
        // line 132
        echo "\t\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avis.png"), "html", null, true);
        echo "\" alt=\"\">
                    ";
    }

    public function getTemplateName()
    {
        return "PidevFrontBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 132,  279 => 131,  231 => 87,  224 => 183,  220 => 182,  216 => 181,  210 => 178,  204 => 175,  161 => 134,  159 => 131,  156 => 130,  154 => 87,  145 => 81,  141 => 80,  137 => 79,  133 => 78,  102 => 50,  96 => 47,  83 => 37,  74 => 31,  65 => 27,  56 => 21,  50 => 18,  45 => 16,  40 => 14,  29 => 6,  25 => 4,  21 => 1,);
    }
}
