<?php

/* voyageTourismeBundle:Vues:accuel.html.twig */
class __TwigTemplate_46a80acbc55c25e58b7702efc4a99fb10165c668dc3104291fbc550b2c8dfa47 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
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
        <nav class=\"menu navbar-default navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"#\">Accueil</a>
                </li>
                <li class=\"dropdown\">
                    <a onclick='sousMenu(\"menu1\", \"test1\");' class=\"menu1 dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Venez Découvrir
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu test1\">
                        <li><a href=\"#\">Des Parcs</a></li>
                        <li><a href=\"#\">Des Musés</a></li>
                        <li><a href=\"#\">Des Barages</a></li>
                        <li><a href=\"#\">Les Chefferies</a></li>
                        <li><a href=\"#\">Les Coutumes et Habitas</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
                <li>
                    <a onclick='sousMenu(\"menu2\", \"test2\");' class=\"menu2 dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Vous Déplacer
                        <span class=\"caret\"></span>
                    </a>

                    <ul class=\"test2 dropdown-menu\">
                        <li><a href=\"#\">Voyager Par Vol</a></li>
                        <li><a href=\"#\">Voyager Par Bus de Transport</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
                <li>
                    <a onclick='sousMenu(\"menu3\", \"test3\");' class=\"menu3 dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Visite Guidée
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"test3 dropdown-menu\">
                        <li><a href=\"#\">Assistance en Ligne</a></li>
                        <li><a href=\"#\">Assistance Physique</a></li>
                        <li><a href=\"#\">Assistance Par Carte</a></li>
                        <li><a href=\"#\">Localiser</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
                <li>
                    <a onclick='sousMenu(\"menu4\", \"test4\");' class=\"menu4 dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Séjourner
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"test4 dropdown-menu\">
                        <li><a href=\"#\">Hébergement</a></li>
                        <li><a href=\"#\">Restauration</a></li>
                        <li><a href=\"#\">Points de Reccueils</a></li>
                        <li><a href=\"#\">Nos Tarifs</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
                <li>
                    <a onclick='sousMenu(\"menu5\", \"test5\");' class=\"menu5 dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Obtenez
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"test5 dropdown-menu\">
                        <li><a href=\"#\">Des Réductions</a></li>
                        <li><a href=\"#\">Séjours Gratuits</a></li>
                        <li><a href=\"#\">Assistances Gratiutes</a></li>
                        <li><a href=\"#\">Voyages Gratuit</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
                <li>
                    <a onclick='sousMenu(\"menu6\", \"test6\");' class=\"menu6 dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">A Propos
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"test6 dropdown-menu\">
                        <li><a href=\"#\">Qui Sommes-Nous?</a></li>
                        <li><a href=\"#\">Nous Rejoindre?</a></li>
                        <li><a href=\"#\">Faites une Suggestion!</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class=\" well page col-md-10 col-md-offset-1\">
            <div class=\"col-md-3\">
                <div class=\"pub_1 panel panel-warning\">
                    <div onclick=\"detail();\" class=\"pubS col-md-12 expd panel-heading\" style=\"cursor: pointer\">
                        Nos Services <span class=\"pull-right span_1 glyphicon glyphicon-triangle-bottom\"></span>
                    </div>
                    <div class=\"col-md-12 pub pubS_1 panel panel-warning\">
                        <p>
                        <div class=\"image\">
                            <img class=\"img\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/head4.jpg"), "html", null, true);
        echo "\" width=\"70px\" height=\"50px\" style=\"border-radius: 10px;\"/>
                            <a style=\"font-size: 20px; color: rosybrown;\" href=\"#\">Voyages</a><br>Le graphiste designer, également, appelé infographiste, mode
                        </div>
                        designer ou site designer, selon ses fonctions, il devra commencé par étudier la
                        demande du client. Une fois l’idée définie, il doit la développer par une
                        illustration. <a href=\"#\">lire la suite...</a></p>
                        <hr style=\"border: 1px solid rosybrown;\">
                        <p><div class=\"image\">
                            <img class=\"img\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/head3.jpg"), "html", null, true);
        echo "\" width=\"70px\" height=\"50px\" style=\"border-radius: 10px;\"/>
                            <a style=\"font-size: 20px; color: rosybrown;\" href=\"#\">Tourisme</a><br>Le graphiste designer, également, appelé infographiste, mode
                        </div>Le graphiste designer, également, appelé infographiste, mode
                        designer ou site designer, selon ses fonctions, il devra commencé par étudier la
                        demande du client. Une fois l’idée définie, il doit la développer par une
                        illustration. <a href=\"#\">lire la suite...</a></p>
                        <hr style=\"border: 1px solid rosybrown;\">
                        <p><p><div class=\"image\">
                            <img class=\"img\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/head2.jpg"), "html", null, true);
        echo "\" width=\"70px\" height=\"50px\" style=\"border-radius: 10px;\"/>
                            <a style=\"font-size: 20px; color: rosybrown;\" href=\"#\">Confort</a><br>Le graphiste designer, également, appelé infographiste, mode
                        </div>Le graphiste designer, également, appelé infographiste, mode
                        designer ou site designer, selon ses fonctions, il devra commencé par étudier la
                        demande du client. Une fois l’idée définie, il doit la développer par une
                        illustration. <a href=\"#\">lire la suite...</a></p>
                    </div>
                </div>
                <div class=\"pub panel panel-warning\">
                    <div class=\"pubS col-md-12  alert-warning panel-heading\">
                        Nos Agences
                    </div>
                    <div class=\"col-md-12 pub panel panel-warning\">

                    </div>
                </div>
                <div class=\"pub panel panel-warning\">
                    <div class=\"pubS col-md-12  alert-warning panel-heading\">
                        Nos Agences
                    </div>
                    <div class=\"col-md-12 pub panel panel-warning\">

                    </div>
                </div>
            </div>
            <div class=\"col-md-9\" style=\"
                 height: 300px;\">
                <div id=\"amazingslider-2\" style=\"display:none;\">
                    <ul class=\"amazingslider-slides\" style=\"display:none;\" >
                        <li><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/1.jpeg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/2.jpeg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/4.jpeg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test/Head6.jpg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/7.jpg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/8.jpg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/9.jpg"), "html", null, true);
        echo "\" /></li>
                        <li><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/10.jpg"), "html", null, true);
        echo "\" /></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-9\" >
                <div class=\"col-md-12 detail\">

                </div>
                <div class=\"col-md-12 detail\">

                </div>
                <div class=\"col-md-12 detail\">

                </div>
            </div>

        </div>
    </body>
    <footer class=\" col-md-12\" style=\"width: 100%;\">
        <div class=\"col-md-offset-1\">
            <ul class=\" navbar-nav pied\">
                <li class=\"\">
                    <a href=\"#\" class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Accueil</a>
                    <ul class=\"\">
                        <li><a href=\"#\">Des Parcs</a></li>
                        <li><a href=\"#\">Des Musés</a></li>
                        <li><a href=\"#\">Des Barages</a></li>
                        <li><a href=\"#\">Les Chefferies</a></li>
                        <li><a href=\"#\">Les Coutumes et Habitas</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\" class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Venez Découvrir
                    </a>
                    <ul class=\"\">
                        <li><a href=\"#\">Des Parcs</a></li>
                        <li><a href=\"#\">Des Musés</a></li>
                        <li><a href=\"#\">Des Barages</a></li>
                        <li><a href=\"#\">Les Chefferies</a></li>
                        <li><a href=\"#\">Les Coutumes et Habitas</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
                <li>
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Vous Déplacer
                    </a>
                    <ul class=\"\">
                        <li><a href=\"#\">Voyager Par Vol</a></li>
                        <li><a href=\"#\">Voyager Par Bus de Transport</a></li>
                        <li><a href=\"#\">Autres</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/amazingslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/initslider-1.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "voyageTourismeBundle:Vues:accuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 235,  255 => 178,  251 => 177,  239 => 174,  231 => 172,  195 => 142,  184 => 134,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 236,  314 => 234,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 176,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 175,  240 => 86,  238 => 85,  235 => 173,  230 => 82,  227 => 171,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 23,  49 => 11,  101 => 32,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 15,  50 => 10,  29 => 6,  26 => 6,  43 => 8,  28 => 3,  24 => 3,  35 => 5,  87 => 25,  72 => 16,  66 => 24,  55 => 15,  41 => 9,  31 => 5,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 126,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 10,  42 => 7,  39 => 9,  36 => 5,  33 => 7,  30 => 7,);
    }
}
