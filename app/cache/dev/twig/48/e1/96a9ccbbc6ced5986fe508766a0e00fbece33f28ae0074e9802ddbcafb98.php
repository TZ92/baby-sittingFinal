<?php

/* PidevbackBundle::layout.html.twig */
class __TwigTemplate_48e196a9ccbbc6ced5986fe508766a0e00fbece33f28ae0074e9802ddbcafb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'rec' => array($this, 'block_rec'),
            'menu1' => array($this, 'block_menu1'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Tableau de bord - BabySitting</title>
";
        // line 14
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 28
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Baby-Sitting</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu message-dropdown\">
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>Alaa Laaribi</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> 
                                        Dimanche 11h25</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>Omar Yazidi</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> 
                                        Jeudi 19h15</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>Bilel Mannai</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i>
                                        Lundi 10h05</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-footer\">
                            <a href=\"#\">Lire tout les messages</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu alert-dropdown\">
                        ";
        // line 114
        $this->displayBlock('rec', $context, $blocks);
        // line 119
        echo "                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                    
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("profilBaby");
        echo "\"><i class=\"fa fa-fw fa-user\"></i> Profil</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Messages</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Paramètres</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\">
                        <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("homeadmin");
        echo "\" ><i class=\"fa fa-fw fa-dashboard\"></i> Tableau de bord</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("profilBaby");
        echo "\"><i class=\"fa fa-fw fa-user\"></i> Profil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("listeBaby");
        echo "\"><i class=\"fa fa-fw fa-female\"></i> Baby Sitter</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("ajoutparent");
        echo "\"><i class=\"fa fa-fw fa-female\"></i> Parent</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("listGarderie");
        echo "\"><i class=\"fa fa-fw fa-home\"></i> Espace garderie</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("pidevback_list");
        echo "\"><i class=\"fa fa-fw fa-github-alt\"></i> Services</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("listEvenement");
        echo "\"><i class=\"fa fa-fw fa-calendar-o\"></i> Événement</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("listeReclamation");
        echo "\"><i class=\"fa fa-fw fa-exclamation-triangle \"></i> Réclamation</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\" style=\"position:relative; right:250px;\">

                <!-- Page Heading -->
                <div class=\"row\" >
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">";
        // line 180
        $this->displayBlock('menu1', $context, $blocks);
        echo " <small></small></h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                <i class=\"fa fa-dashboard\"></i>";
        // line 183
        $this->displayBlock('menu', $context, $blocks);
        // line 184
        echo "                            </li>
                        </ol>
                    </div>
                </div>

                <!-- /.row -->
";
        // line 190
        $this->displayBlock('body', $context, $blocks);
        // line 203
        echo "                <div class=\"row\">
                    
                    
                    
                  
                </div>
                <!-- /.row -->

                <div class=\"row\">
                   
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    
                    
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
";
        // line 231
        $this->displayBlock('javascript', $context, $blocks);
        // line 243
        echo "</body>

</html>
";
    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 15
        echo "    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    
";
    }

    // line 114
    public function block_rec($context, array $blocks = array())
    {
        // line 115
        echo "                        <li>
                            <a href=\"#\">Ahmed <span class=\"label label-default\">Réclamation 1</span></a>
                        </li>
                        ";
    }

    // line 180
    public function block_menu1($context, array $blocks = array())
    {
        echo "Tableau de bord";
    }

    // line 183
    public function block_menu($context, array $blocks = array())
    {
        echo " Tableau de bord";
    }

    // line 190
    public function block_body($context, array $blocks = array())
    {
        // line 191
        echo "                <div class=\"row\" >
                    <div class=\"col-lg-12\">
                        <div class=\"alert alert-info alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                            <i class=\"fa fa-smile-o \"></i><strong> Bienvenue dans votre espace d'administration!</strong>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <a href=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("_graphePie");
        echo "\" role=\"btn\" class=\"btn btn-primary\">Generer Satistiques en camembert</a>
                 <a href=\"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
        echo "\" role=\"btn\" class=\"btn btn-primary\">Generer Satistiques en Histogaramme</a>
";
    }

    // line 231
    public function block_javascript($context, array $blocks = array())
    {
        // line 232
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PidevbackBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 241,  383 => 240,  379 => 239,  373 => 236,  367 => 233,  364 => 232,  361 => 231,  355 => 201,  351 => 200,  340 => 191,  337 => 190,  331 => 183,  325 => 180,  318 => 115,  315 => 114,  308 => 25,  302 => 22,  296 => 19,  290 => 16,  287 => 15,  284 => 14,  277 => 243,  275 => 231,  245 => 203,  243 => 190,  235 => 184,  233 => 183,  227 => 180,  210 => 166,  204 => 163,  198 => 160,  192 => 157,  186 => 154,  180 => 151,  174 => 148,  168 => 145,  156 => 136,  143 => 126,  136 => 122,  131 => 119,  129 => 114,  41 => 28,  39 => 14,  25 => 2,);
    }
}
