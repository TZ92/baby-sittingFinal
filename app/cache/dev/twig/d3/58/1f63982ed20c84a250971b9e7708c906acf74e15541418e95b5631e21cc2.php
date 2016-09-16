<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d3581f63982ed20c84a250971b9e7708c906acf74e15541418e95b5631e21cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 4
        echo "

<!DOCTYPE <!DOCTYPE html>
    <html lang=\"fr\">
        <head>
            <title>BabySittin : Vos enfants c'est notre résponsabilité</title>
            <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon-96x96.png"), "html", null, true);
        echo "\">
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <!-- Custom CSS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <!-- Bootstrap Core CSS -->
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
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
        </head>
        <body>
            <div class=\"form-group\">
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 46
        echo "            </div>
            <header>
                <div class=\"headerBloc\">
                    <div class=\"logo\">
                        <a href=\"index.html\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </div>

                    <div class=\"social\">
                        <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/social.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>

                    

                       
                        
                        
                            
                            
                                
                               
                            
                    
                </header>
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                </center>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"#\">Recherche <span class=\"sr-only\">(current)</span></a></li>
                                <li><a href=\"#\">Liste des missions</a></li>
                                <li><a href=\"#\">Espace garderie</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

               <div class=\"bannerForm\" >
\t\t\t<div class=\"formBloc\">
\t\t\t\t<div class=\"formBG\">
\t\t\t\t\t<h3>Trouver une personne qui vous convient</h3>
                                        <center><form class=\"form1\">
\t\t\t\t\t\t<select class=\"btn btn-default dropdown-toggle\" name=\"select\">
\t\t\t\t\t\t\t<option>Sexe</option>
\t\t\t\t\t\t\t<option>Féniminin</option>
\t\t\t\t\t\t\t<option>Masculin</option>
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
                <div class=\"contenu\">
                    <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avis.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <footer>
                    <table>
                        <tr>
                            <td>Suivez-nous sur</td>
                            <td>À propos</td>
                            <td>Aides et Conseils</td>
                            <td>Informations</td>
                            <td>Services</td>
                        </tr>
                        <tr>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                        </tr>
                        <tr>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                        </tr>
                        <tr>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                        </tr>
                        <tr>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                            <td>menu</td>
                        </tr>
                    </table>
                </footer>
                <!-- jQuery -->
                <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

                <!-- Morris Charts JavaScript -->
                <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>\t
            </body>
        </html>
";
    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 30
        echo "                                    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 31
            echo "                                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 33
        echo "                                    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" class=\"navbar-form navbar-left\" method=\"post\">
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                        <div class=\"form-group-sm\">
                                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                            <label for=\"remember_me\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                        </div>
                                        <center><input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"  class=\"btn myBtn1\"/>
                                            <br/><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>
                                        </center>
                                    </form>
                                    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 42,  278 => 41,  273 => 39,  268 => 37,  262 => 36,  257 => 34,  252 => 33,  246 => 31,  243 => 30,  240 => 29,  232 => 187,  228 => 186,  224 => 185,  218 => 182,  212 => 179,  167 => 137,  81 => 54,  74 => 50,  68 => 46,  66 => 29,  59 => 25,  53 => 22,  48 => 20,  43 => 18,  32 => 10,  24 => 4,  20 => 1,);
    }
}
