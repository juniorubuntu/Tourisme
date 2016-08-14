<?php

/* voyageTourismeBundle:Vues:accueilTest.html.twig */
class __TwigTemplate_52c3cbfc48f586dc5515fb1e078bba69f868cdaedfc8e26062a374b3f5b56811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
            <div class=\"col-md-3\" style=\"height: 1000px;\">
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
                                    <a style=\"font-size: 20px; color: rosybrown;\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voyage_tourisme_panel", array("id" => $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche"))), "html", null, true);
                echo "</a><br>
                                </div>
                                &nbsp;&nbsp;";
                // line 74
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche")), "description")), "html", null, true);
                echo "
                                <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voyage_tourisme_panel", array("id" => $this->getAttribute((isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "id"))), "html", null, true);
                echo "\">lire la suite...</a>
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
            ";
        // line 82
        $this->displayBlock('slider', $context, $blocks);
        // line 99
        echo "            <div class=\"col-md-9 page_pub\" style=\"text-align: justify;\">
                ";
        // line 100
        $this->displayBlock('affiche', $context, $blocks);
        // line 117
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
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fb.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yahoo.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/link.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/whatsapp.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"50px\"/></a>
            </div>
        </div>
        <div class=\"col-md-10 col-md-offset-1 well\" style=\"font-size: 12px; font-family: monospace; height: 50px;\">
            <center><b>Designed By <i><a href=\"http://www.facebook.com/virus.programming\" target=\"blank\">";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "</a></i> 2016, July &copy; <i>All rights Reserved</i></b></center>
        </div>
    </footer>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/amazingslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/initslider-1.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    // line 82
    public function block_slider($context, array $blocks = array())
    {
        // line 83
        echo "                <div class=\"col-md-9 \" style=\"
                     height: 345px;\">
                    <div id=\"amazingslider-2\" style=\"display:none;\">
                        <ul class=\"amazingslider-slides\" style=\"display:none;\" >
                            <li><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/1.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/2.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/4.jpeg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/Head6.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/7.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/8.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/9.jpg"), "html", null, true);
        echo "\" /></li>
                            <li><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/10.jpg"), "html", null, true);
        echo "\" /></li>
                        </ul>
                    </div>
                </div>
            ";
    }

    // line 100
    public function block_affiche($context, array $blocks = array())
    {
        // line 101
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["affiches"]) ? $context["affiches"] : $this->getContext($context, "affiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["affiche"]) {
            // line 102
            echo "                        <div class=\"col-md-12 detail\">
                            <h4>";
            // line 103
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche"))), "html", null, true);
            echo "</h4>
                            <div class=\"col-md-12\">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;";
            // line 106
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
        // line 116
        echo "                ";
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
        return array (  432 => 116,  416 => 106,  410 => 103,  399 => 100,  390 => 94,  386 => 93,  382 => 92,  378 => 91,  370 => 89,  366 => 88,  356 => 83,  353 => 82,  347 => 223,  343 => 222,  339 => 221,  333 => 218,  326 => 214,  318 => 212,  218 => 117,  216 => 100,  213 => 99,  211 => 82,  207 => 80,  191 => 75,  180 => 72,  170 => 69,  152 => 65,  148 => 64,  124 => 53,  113 => 50,  58 => 15,  53 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 102,  402 => 101,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 90,  368 => 112,  365 => 111,  362 => 87,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 213,  314 => 211,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 66,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 17,  59 => 6,  38 => 6,  201 => 79,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 52,  117 => 51,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 45,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  26 => 6,  28 => 3,  24 => 3,  87 => 25,  31 => 6,  25 => 5,  21 => 1,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  44 => 11,  27 => 5,  79 => 18,  72 => 16,  69 => 11,  47 => 10,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 47,  98 => 46,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 11,  52 => 21,  50 => 10,  43 => 9,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 74,  182 => 66,  176 => 71,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 59,  133 => 56,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 10,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 17,  42 => 8,  39 => 8,  36 => 5,  33 => 6,  30 => 7,);
    }
}
