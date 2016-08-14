<?php

/* voyageTourismeBundle:Vues:accueilTest.html.twig */
class __TwigTemplate_52c3cbfc48f586dc5515fb1e078bba69f868cdaedfc8e26062a374b3f5b56811 extends Twig_Template
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
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/acceuilStyles.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/animations.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <title>TSANAGA TOUR | Accueil</title>
    </head>
    <body class=\"\">
        <div class=\"col-md-12 carossel\" style=\"background: url(";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/tete.jpg"), "html", null, true);
        echo ") no-repeat; background-size: 100% 100%;\">
            <div class=\"logo col-md-2 col-md-offset-1\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" height=\"160Opx\"/>
            </div>
            <div class=\"accueil-message col-md-9\" style=\"color: white; font-family: constantia;\">
                <div class=\"accueil-premier col-md-9\">
                    <h1>    
                        <b><i>Voyagez avec nous!!!</i></b>
                    </h1>
                    <center><b style=\"font-size: 18px;\"><i>&</i></b></center>
                    <h3 class=\"pull-right\" style=\"color: wheat;\">    
                        <b><i>Visitez le Grand-Nord Cameroun...</i></b>
                    </h3>
                </div>
                <div class=\"lang col-md-3 pull-right\" style=\"color: white; margin-top: 8%; \">
                    <form class=\"form-group pull-right form-inline\">
                        <label class=\"control-label\"><b>Langue:</b></label>
                        <select class=\"form-control btn btn-warning\">
                            <option selected=\"selected\">Français</option>
                            <option >English</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <nav class=\"menu navbar-default navbar-collapse alert-info\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"#\">Accueil</a>
                </li>
                ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMenu"]) ? $context["listeMenu"] : $this->getContext($context, "listeMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 46
            echo "                    <li>
                        <a onclick='sousMenu(\"menu";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "html", null, true);
            echo "\", \"test";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "html", null, true);
            echo "\");' class=\"menu";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "html", null, true);
            echo " dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">";
            echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "html", null, true);
            echo "
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu test";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "html", null, true);
            echo "\">
                            ";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "listFils"));
            foreach ($context['_seq'] as $context["_key"] => $context["sousmenu"]) {
                // line 52
                echo "                                <li>
                                    <a href=\"#\">";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["sousmenu"]) ? $context["sousmenu"] : $this->getContext($context, "sousmenu")), "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousmenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        </ul>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </ul>
        </nav>
        <div class=\" well page col-md-10 col-md-offset-1\">
            <div class=\"col-md-3\">
                <div class=\"pub_1 panel panel-warning\">
                    ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panels"]) ? $context["panels"] : $this->getContext($context, "panels")));
        foreach ($context['_seq'] as $context["_key"] => $context["panel"]) {
            // line 65
            echo "                        <div onclick=\"detail(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"), "html", null, true);
            echo ");\" class=\"pubS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"), "html", null, true);
            echo " pubS col-md-12 expd panel-heading\" style=\"cursor: pointer\">
                            ";
            // line 66
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel"))), "html", null, true);
            echo "<span class=\"pull-right span_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"), "html", null, true);
            echo " glyphicon glyphicon-triangle-bottom\"></span>
                        </div>
                        ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "listAffiches"));
            foreach ($context['_seq'] as $context["_key"] => $context["affiche"]) {
                // line 69
                echo "                            <div class=\"col-md-12 pub pubS_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"), "html", null, true);
                echo " panel panel-warning\">
                                <div class=\"image\">
                                    <img class=\"img\" src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/head4.jpg"), "html", null, true);
                echo "\" width=\"70px\" height=\"50px\" style=\"border-radius: 10px;\"/>
                                    <a style=\"font-size: 20px; color: rosybrown;\" href=\"#\">";
                // line 72
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche"))), "html", null, true);
                echo "</a><br>
                                </div>
                                &nbsp;&nbsp;";
                // line 74
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche")), "description")), "html", null, true);
                echo "
                                <a href=\"#\">lire la suite...</a>
                                <hr style=\"border: 1px solid rosybrown;\">
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </div>
            </div>
            <div class=\"col-md-9 \" style=\"
                 height: 345px;\">
                <div id=\"amazingslider-2\" style=\"display:none;\">
                    <ul class=\"amazingslider-slides\" style=\"display:none;\" >
                        <li><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/1.jpeg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/2.jpeg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/4.jpeg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/Head6.jpg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/7.jpg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/8.jpg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/9.jpg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/10.jpg"), "html", null, true);
        echo "\" /></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-9 page_pub\" style=\"text-align: justify;\">
                ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["affiches"]) ? $context["affiches"] : $this->getContext($context, "affiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["affiche"]) {
            // line 99
            echo "                    <div class=\"col-md-12 detail\">
                        <h4>";
            // line 100
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche"))), "html", null, true);
            echo "</h4>
                        <div class=\"col-md-12\">
                            <p>
                                ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche")), "description"), "html", null, true);
            echo "
                            </p><br>
                            <p><label style=\"color: #955408; font-family: constantia\"><i>48 Personnes ont aimé!</i></label>
                                <button class=\"pull-right col-md-2 btn btn-link \"><span class=\"glyphicon glyphicon-comment\"></span> Commenter</button>
                                <button class=\"pull-right col-md-2 btn btn-link \"><span class=\"glyphicon glyphicon-thumbs-up\"></span>J'aime</button>
                                <button class=\"pull-right col-md-2 btn btn-link \"><span class=\"glyphicon glyphicon-share-alt\"></span>Partager</button></p>
                        </div>
                        <hr style=\"border: 1px solid white;\">
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                <div class=\"col-md-12 detail panel modal-md\">
                    <h4>LAISSEZ NOUS UN COMMENTAIRE</h4>
                    <form class=\"form-horizontal form-comment\">
                        <div class=\"form-inline col-md-12\">
                            <label class=\"col-md-2\">Votre nom:<span style=\"color: red\">*</span></label>
                            <input  required class=\"form-control col-md-3\" placeholder=\"Ex: Atemgoua\"/>
                        </div>
                        <div class=\"form-inline col-md-12\">
                            <label class=\"col-md-2\">Votre email:</label>
                            <input class=\"form-control col-md-3\" placeholder=\"Ex: juniorubuntu@gmail.com\" />
                        </div>
                        <div class=\"form-inline col-md-12\">

                            <label class=\"col-md-2\">Commentaire<span style=\"color: red\">*</span></label>
                            <textarea class=\"form-control\" style=\"
                                      height: 182px;
                                      width: 303px;\">Ex: Je suis prêt à rejoindre votre équipe de Développeurs.
                            </textarea>
                        </div>
                        <div class=\"form-inline col-md-12\">
                            <label class=\"col-md-4\">Etre informé des actualités</label>
                            <input class=\"\" type=\"checkbox\" />
                        </div>
                        <div>
                            <button type=\"submit\" class=\"btn btn-primary col-md-offset-1\"><span class=\"glyphicon glyphicon-ok-sign\"></span>Poster</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <footer class=\" col-md-12\" style=\"width: 100%;\">
        <div class=\"col-md-offset-1\">
            <ul class=\" navbar-nav pied\">
                <li class=\"\">
                    <a href=\"#\" class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Partenaires</a>
                    <ul class=\"\">
                        <li><a href=\"#\">Agences de transport</a></li>
                        <li><a href=\"#\">Aéroports</a></li>
                        <li><a href=\"#\">Hotels</a></li>
                        <li><a href=\"#\">Services Traiteurs</a></li>
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\" class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Notre équipe
                    </a>
                    <ul class=\"\">
                        <li><a href=\"#\">Des Inénieurs</a></li>
                        <li><a href=\"#\">Des Géographes</a></li>
                        <li><a href=\"#\">Des Guides Touristiques</a></li>
                        <li><a href=\"#\">Hotesses</a></li>
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\" class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Notre équipe
                    </a>
                    <ul class=\"\">
                        <li><a href=\"#\">Des Inénieurs</a></li>
                        <li><a href=\"#\">Des Géographes</a></li>
                        <li><a href=\"#\">Des Guides Touristiques</a></li>
                        <li><a href=\"#\">Hotesses</a></li>
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\" class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Notre équipe
                    </a>
                    <ul class=\"\">
                        <li><a href=\"#\">Des Inénieurs</a></li>
                        <li><a href=\"#\">Des Géographes</a></li>
                        <li><a href=\"#\">Des Guides Touristiques</a></li>
                        <li><a href=\"#\">Hotesses</a></li>
                    </ul>
                </li>
                <li>
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Réseaux sociaux
                    </a>
                    <table class=\"table-responsive\">
                        <tr class=\"\">

                            <td><a href=\"#\">www.facebook.com</a></td>
                        </tr>
                        <tr>
                            <td><a href=\"#\">www.yahoo.com</a></a></td>
                        </tr>
                        <tr>
                            <td><a href=\"#\">www.linkedin.com</a></a></td>
                        </tr>
                        <tr>
                            <td><a href=\"#\">www.whatsapp.com</a></a></td>
                        </tr>
                    </table>
                </li>
            </ul>
            <div class=\"col-md-12\" style=\"margin-bottom: 5px;\">
                <a class=\"col-md-offset-3\" href=\"#\"><img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fb.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yahoo.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/link.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/whatsapp.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"50px\"/></a>
            </div>
        </div>
        <div class=\"col-md-10 col-md-offset-1 well\" style=\"font-size: 16px; font-family: constantia; height: 50px;\">
            <center><b>Design By <i><a href=\"http://www.facebook.com/virus.programming\" target=\"blank\">";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "</a></i> 2016, July &copy; <i>All rights Reserved</i></b></center>
        </div>
    </footer>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/amazingslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/initslider-1.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "voyageTourismeBundle:Vues:accueilTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 219,  398 => 218,  394 => 217,  388 => 214,  381 => 210,  377 => 209,  373 => 208,  369 => 207,  273 => 113,  257 => 103,  251 => 100,  248 => 99,  244 => 98,  236 => 93,  232 => 92,  228 => 91,  224 => 90,  220 => 89,  216 => 88,  212 => 87,  208 => 86,  200 => 80,  194 => 79,  183 => 74,  178 => 72,  174 => 71,  168 => 69,  164 => 68,  157 => 66,  150 => 65,  146 => 64,  139 => 59,  131 => 56,  122 => 53,  119 => 52,  115 => 51,  111 => 50,  99 => 47,  96 => 46,  92 => 45,  61 => 17,  56 => 15,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
