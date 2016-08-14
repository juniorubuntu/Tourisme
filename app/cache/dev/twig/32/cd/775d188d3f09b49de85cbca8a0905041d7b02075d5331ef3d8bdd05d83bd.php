<?php

/* voyageTourismeBundle:Vues:detailMenu.html.twig */
class __TwigTemplate_32cd775d188d3f09b49de85cbca8a0905041d7b02075d5331ef3d8bdd05d83bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("voyageTourismeBundle:Vues:accueil.html.twig");

        $this->blocks = array(
            'position' => array($this, 'block_position'),
            'slider' => array($this, 'block_slider'),
            'affiche' => array($this, 'block_affiche'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "voyageTourismeBundle:Vues:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_position($context, array $blocks = array())
    {
        // line 3
        echo "    <label style=\"border: 1px solid; color: #255625; height: 20px; margin-top: -1%;\" class=\"col-md-12\" >Vous êtes ici:<span style=\"color: #245580\"> ";
        echo twig_escape_filter($this->env, (isset($context["menuPere"]) ? $context["menuPere"] : $this->getContext($context, "menuPere")), "html", null, true);
        echo "</span>--><span class=\"\" style=\"color: lightcoral\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["sousMenu"]) ? $context["sousMenu"] : $this->getContext($context, "sousMenu"))), "html", null, true);
        echo "</span></label>
    ";
    }

    // line 5
    public function block_slider($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-9 \" style=\"
         height: 345px;\">
        <h4><marquee>Quelques aperçues: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["sousMenu"]) ? $context["sousMenu"] : $this->getContext($context, "sousMenu")), "html", null, true);
        echo "</marquee></h4>
        <h1>Pas d'images pour l'instant</h1>
        <div id=\"amazingslider-2\" style=\"display:none;\">
            <ul class=\"amazingslider-slides\" style=\"display:none;\" >

            </ul>
        </div>
    </div>
    <script>
        \$('.now";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuPere"]) ? $context["menuPere"] : $this->getContext($context, "menuPere")), "id"), "html", null, true);
        echo "').addClass('active');
        \$('.accueil').removeClass('active');
    </script>
";
    }

    // line 21
    public function block_affiche($context, array $blocks = array())
    {
        // line 22
        echo "    <h1>Pas de Contenu pour l'instant</h1>
";
    }

    public function getTemplateName()
    {
        return "voyageTourismeBundle:Vues:detailMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  69 => 21,  61 => 17,  49 => 8,  45 => 6,  42 => 5,  33 => 3,  30 => 2,);
    }
}
