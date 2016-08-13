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
                        <p><div class=\"image\">
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
                        Nos Ambitions
                    </div>
                    <div class=\"col-md-12 pub panel panel-warning\">

                    </div>
                </div>
            </div>
            <div class=\"col-md-9 \" style=\"
                 height: 345px;\">
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
            <div class=\"col-md-9\" style=\"text-align: justify\">
                <div class=\"col-md-12 detail\">
                    <h4>TRANSPORT & VOYAGES</h4>
                    <div class=\"col-md-12\">
                        <p>
                            <span style=\"font-size: 25px; font-weight: bold; font-family: constantia\">&nbsp;&nbsp;&nbsp; N</span>ous organisons les voyages, circuits 
                            touristiques seul ou en groupes pour 
                            vous et les grands groupes de voyages. 
                            Nos locaux sont situés à Buea dans la 
                            région de sud ouest, au pied du Mont 
                            Cameroun. Mais nos circuits couvrent 
                            tous le Cameroun. Nos voyages sont des 
                            itinéraires que nous avons deja parcourus 
                            et connaissaons bien ce que nous proposons 
                            aux touristes. Soucieux des la protection 
                            de l'environnement et des sites touristiques, 
                            nous prenons grand soin de preparer nos 
                            voyages et safaris dans un esprit d'ouverture 
                            de decouverte et de curiosité.
                        </p><br>
                        <p><label style=\"color: #955408; font-family: constantia\"><i>48 Personnes ont aimé!</i></label>
                        <button class=\"pull-right col-md-2 btn btn-link \"><span class=\"glyphicon glyphicon-comment\"></span> Commenter</button>
                        <button class=\"pull-right col-md-2 btn btn-link \"><span class=\"glyphicon glyphicon-thumbs-up\"></span>J'aime</button>
                        <button class=\"pull-right col-md-2 btn btn-link \"><span class=\"glyphicon glyphicon-share-alt\"></span>Partager</button></p>
                    </div>
                    <hr style=\"border: 1px solid white;\">
                </div>
                <div class=\"col-md-12 detail\">
                    <h4>TOURISME & DECOUVERTE</h4>
                    <div class=\"col-md-12\">
                        <p>
                            <span style=\"font-size: 25px; font-weight: bold; font-family: constantia\">&nbsp;&nbsp;&nbsp; N</span>ous organisons les voyages, circuits 
                            touristiques seul ou en groupes pour 
                            vous et les grands groupes de voyages. 
                            Nos locaux sont situés à Buea dans la 
                            région de sud ouest, au pied du Mont 
                            Cameroun. Mais nos circuits couvrent 
                            tous le Cameroun. Nos voyages sont des 
                            itinéraires que nous avons deja parcourus 
                            et connaissaons bien ce que nous proposons 
                            aux touristes. Soucieux des la protection 
                            de l'environnement et des sites touristiques, 
                            nous prenons grand soin de preparer nos 
                            voyages et safaris dans un esprit d'ouverture 
                            de decouverte et de curiosité.
                        </p>
                    </div>
                    <hr style=\"border: 1px solid white;\">
                </div>
                <div class=\"col-md-12 detail\">
                    <h4>HEBERGEMENT & RESTAURATION</h4>
                    <div class=\"col-md-12\">
                        <p>
                            <span style=\"font-size: 25px; font-weight: bold; font-family: constantia\">&nbsp;&nbsp;&nbsp; N</span>ous organisons les voyages, circuits 
                            touristiques seul ou en groupes pour 
                            vous et les grands groupes de voyages. 
                            Nos locaux sont situés à Buea dans la 
                            région de sud ouest, au pied du Mont 
                            Cameroun. Mais nos circuits couvrent 
                            tous le Cameroun. Nos voyages sont des 
                            itinéraires que nous avons deja parcourus 
                            et connaissaons bien ce que nous proposons 
                            aux touristes. Soucieux des la protection 
                            de l'environnement et des sites touristiques, 
                            nous prenons grand soin de preparer nos 
                            voyages et safaris dans un esprit d'ouverture 
                            de decouverte et de curiosité.
                        </p>
                    </div>
                    <hr style=\"border: 1px solid white;\">
                </div>
                <div class=\"col-md-12 detail panel modal-md\">
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
                                      width: 303px;\">Ex: Je suis prêt à rejoindre votre équipe de Développeur.
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
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fb.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yahoo.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/link.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"35px\"/></a>
                <a class=\"col-md-offset-1\" href=\"#\"><img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/whatsapp.png"), "html", null, true);
        echo "\" height=\"35px\" width=\"50px\"/></a>
            </div>
        </div>
        <div class=\"col-md-10 col-md-offset-1 well\" style=\"font-size: 16px; font-family: constantia; height: 50px;\">
            <center><b>Design By <i><a href=\"http://www.facebook.com/virus.programming\" target=\"blank\">";
        // line 354
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "</a></i> 2016, July &copy; <i>All rights Reserved</i></b></center>
        </div>
    </footer>
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("projetSlider/sliderengine/amazingslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 359
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
        return array (  460 => 359,  456 => 358,  452 => 357,  446 => 354,  439 => 350,  435 => 349,  431 => 348,  427 => 347,  255 => 178,  251 => 177,  247 => 176,  243 => 175,  239 => 174,  235 => 173,  231 => 172,  227 => 171,  195 => 142,  184 => 134,  173 => 126,  61 => 17,  56 => 15,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
