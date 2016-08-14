<?php

/* voyageTourismeBundle:Vues:accueil.html.twig */
class __TwigTemplate_3c241528efcac55dfa8bea0a3305098df53408dcc4fb210d81ce5e644f1c81ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'position' => array($this, 'block_position'),
            'slider' => array($this, 'block_slider'),
            'affiche' => array($this, 'block_affiche'),
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
                <li class=\"active accueil\">
                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("voyage_tourisme_homepage");
        echo "\">Accueil</a>
                </li>
                ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMenu"]) ? $context["listeMenu"] : $this->getContext($context, "listeMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 46
            echo "                    <li class=\"now";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "html", null, true);
            echo "\">
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
                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voyage_tourisme_menu", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "idSous" => $this->getAttribute((isset($context["sousmenu"]) ? $context["sousmenu"] : $this->getContext($context, "sousmenu")), "id"))), "html", null, true);
                echo "\">";
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
            ";
        // line 62
        $this->displayBlock('position', $context, $blocks);
        // line 65
        echo "            <div class=\"col-md-3\" style=\"height: 1000px;\">
                <div class=\"pub_1 panel panel-warning\">
                    ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panels"]) ? $context["panels"] : $this->getContext($context, "panels")));
        foreach ($context['_seq'] as $context["_key"] => $context["panel"]) {
            // line 68
            echo "                        <div onclick=\"detail(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"), "html", null, true);
            echo ");\" class=\"pubS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"), "html", null, true);
            echo " pubS col-md-12 expd panel-heading\" style=\"cursor: pointer\">
                            ";
            // line 69
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel"))), "html", null, true);
            echo "<span class=\"pull-right span_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"), "html", null, true);
            echo " glyphicon glyphicon-triangle-bottom\"></span>
                        </div>
                        ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "listAffiches"));
            foreach ($context['_seq'] as $context["_key"] => $context["affiche"]) {
                // line 72
                echo "                            <div class=\"col-md-12 pub pubS_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"), "html", null, true);
                echo " panel panel-warning\">
                                <div class=\"image\">
                                    <img class=\"img\" src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/head4.jpg"), "html", null, true);
                echo "\" width=\"70px\" height=\"50px\" style=\"border-radius: 10px;\"/>
                                    <a style=\"font-size: 20px; color: rosybrown;\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voyage_tourisme_panel", array("id" => $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche"))), "html", null, true);
                echo "</a><br>
                                </div>
                                &nbsp;&nbsp;";
                // line 77
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche")), "description")), 150, true, ""), "html", null, true);
                echo "
                                <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voyage_tourisme_panel", array("id" => $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"))), "html", null, true);
                echo "\"> <b>(...)lire la suite</b></a>
                                <hr style=\"border: 1px solid rosybrown;\">
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </div>
            </div>
            ";
        // line 85
        $this->displayBlock('slider', $context, $blocks);
        // line 110
        echo "            <div class=\"col-md-9 page_pub\" style=\"text-align: justify;\">
                ";
        // line 111
        $this->displayBlock('affiche', $context, $blocks);
        // line 128
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
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fb.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yahoo.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/link.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/whatsapp.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"50px\"/></a>
            </div>
        </div>
        <div class=\"col-md-10 col-md-offset-1 well\" style=\"font-size: 12px; font-family: monospace; height: 50px;\">
            <center><b>Designed By <i><a href=\"http://www.facebook.com/virus.programming\" target=\"blank\">";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "</a></i> 2016, July &copy; <i>All rights Reserved</i></b></center>
        </div>
    </footer>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/amazingslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/initslider-1.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    // line 62
    public function block_position($context, array $blocks = array())
    {
        // line 63
        echo "                <label style=\"border: 1px solid; color: #255625; height: 20px; margin-top: -1%;\" class=\"col-md-12\" >Vous êtes ici:<span class=\"glyphicon glyphicon-triangle-right\" style=\"color: lightcoral\">Accueil</span></label>
            ";
    }

    // line 85
    public function block_slider($context, array $blocks = array())
    {
        // line 86
        echo "                <div class=\"col-md-9 \" style=\"
                     height: 345px;\">
                    <h4><marquee>Quelques images pour nous découvrir!</marquee></h4>
                    <div id=\"amazingslider-2\" style=\"display:none;\">
                        <ul class=\"amazingslider-slides\" style=\"display:none;\" >
                            <li><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/1.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/head2.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/3.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/1.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/2.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/4.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/Head6.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/7.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/8.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/9.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/10.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/head3.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/5.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/6.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/7.jpeg"), "html", null, true);
        echo "\" /></li>
                        </ul>
                    </div>
                </div>
            ";
    }

    // line 111
    public function block_affiche($context, array $blocks = array())
    {
        // line 112
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panelAffiche"]) ? $context["panelAffiche"] : $this->getContext($context, "panelAffiche")));
        foreach ($context['_seq'] as $context["_key"] => $context["affiche"]) {
            // line 113
            echo "                        <div class=\"col-md-12 detail\">
                            <h4>";
            // line 114
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche"))), "html", null, true);
            echo "</h4>
                            <div class=\"col-md-12\">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;";
            // line 117
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche")), "description")), "html", null, true);
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
        // line 127
        echo "                ";
    }

    public function getTemplateName()
    {
        return "voyageTourismeBundle:Vues:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 127,  465 => 117,  459 => 114,  456 => 113,  451 => 112,  448 => 111,  439 => 105,  435 => 104,  431 => 103,  427 => 102,  423 => 101,  419 => 100,  415 => 99,  411 => 98,  407 => 97,  403 => 96,  399 => 95,  395 => 94,  391 => 93,  387 => 92,  383 => 91,  376 => 86,  373 => 85,  368 => 63,  365 => 62,  359 => 234,  355 => 233,  351 => 232,  345 => 229,  338 => 225,  334 => 224,  330 => 223,  326 => 222,  230 => 128,  228 => 111,  225 => 110,  223 => 85,  219 => 83,  213 => 82,  203 => 78,  199 => 77,  192 => 75,  188 => 74,  182 => 72,  178 => 71,  171 => 69,  164 => 68,  160 => 67,  156 => 65,  154 => 62,  149 => 59,  141 => 56,  130 => 53,  127 => 52,  123 => 51,  119 => 50,  107 => 47,  102 => 46,  98 => 45,  93 => 43,  64 => 17,  59 => 15,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,  71 => 21,  68 => 20,  60 => 16,  49 => 8,  45 => 6,  42 => 5,  33 => 3,  30 => 2,);
    }
}
