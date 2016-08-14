<?php

/* voyageTourismeBundle:Vues:detailPanel.html.twig */
class __TwigTemplate_09b23598b71741bd74ef9fffcf9f4c155329596e051b3f30cedca452677a509b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("voyageTourismeBundle:Vues:accueil.html.twig");

        $this->blocks = array(
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
    public function block_slider($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-md-9 \" style=\"
         height: 345px;\">
        <h4><marquee>Quelques aperçues de: ";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["paneau"]) ? $context["paneau"] : $this->getContext($context, "paneau"))), "html", null, true);
        echo "</marquee></h4>
        <div id=\"amazingslider-2\" style=\"display:none;\">
            <ul class=\"amazingslider-slides\" style=\"display:none;\" >

            </ul>
        </div>
    </div>
";
    }

    // line 13
    public function block_affiche($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paneauAffiche"]) ? $context["paneauAffiche"] : $this->getContext($context, "paneauAffiche")));
        foreach ($context['_seq'] as $context["_key"] => $context["affiche"]) {
            // line 15
            echo "        <div class=\"col-md-12 detail\">
            <h4>";
            // line 16
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche"))), "html", null, true);
            echo "</h4>
            <div class=\"col-md-12\">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;";
            // line 19
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
    }

    public function getTemplateName()
    {
        return "voyageTourismeBundle:Vues:detailPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  59 => 16,  56 => 15,  51 => 14,  48 => 13,  36 => 5,  32 => 3,  29 => 2,);
    }
}
