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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
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
                    <div class=\"formBloc\">
                        <div class=\"formBG\">
                            <h3>Trouver une personne qui vous convient</h3>
                            <form class=\"form1\">
                                <select class=\"btn btn-default dropdown-toggle\" name=\"select\">
                                    <option>Sexe</option>
                                    <option>Féniminin</option>
                                    <option>Masculin</option>
                                </select>
                                <select class=\"btn btn-default dropdown-toggle\" name=\"select\">
                                    <option>Age</option>
                                    <option>18</option>
                                    <option>19</option>
                                </select>
                                <select class=\"btn btn-default dropdown-toggle\" name=\"select\">
                                    <option>Ville</option>
                                    <option>Tunis</option>
                                    <option>Ariana</option>
                                </select>
                                <select class=\"btn btn-default dropdown-toggle\" name=\"select\">
                                    <option>Prix</option>
                                    <option>50</option>
                                    <option>60</option>
                                </select>
                                <select class=\"btn btn-default dropdown-toggle\" name=\"select\">
                                    <option>Jour</option>
                                    <option>Lundi</option>
                                    <option>Mardi</option>
                                </select>
                                <select class=\"btn btn-default dropdown-toggle\" name=\"select\">
                                    <option>Horaire</option>
                                    <option>Matin</option>
                                    <option>Midi</option>
                                </select>
                                <select class=\"btn btn-default dropdown-toggle\" name=\"select\">
                                    <option>Note</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                                <center><button type=\"submit\" class=\"btn myBtn2\">Je cherche !</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"contenu\">
                    <img src=\"";
        // line 141
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
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

                <!-- Morris Charts JavaScript -->
                <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 191
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
        return array (  286 => 42,  282 => 41,  277 => 39,  272 => 37,  266 => 36,  261 => 34,  256 => 33,  250 => 31,  247 => 30,  244 => 29,  236 => 191,  232 => 190,  228 => 189,  222 => 186,  216 => 183,  171 => 141,  81 => 54,  74 => 50,  68 => 46,  66 => 29,  59 => 25,  53 => 22,  48 => 20,  43 => 18,  32 => 10,  24 => 4,  20 => 1,);
    }
}
