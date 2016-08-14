<?php

/* voyageTourismeBundle:Menu:ajouter.html.twig */
class __TwigTemplate_d7f3313307cf117230984c243e5e12167aa2999d3bb1e9ac9cc2abace8e170ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "voyageTourismeBundle:Menu:ajouter";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Welcome to the Menu:ajouter page</h1>
    <div class=\"well\">
        <form method=\"post\" ";
        // line 8
        if ((!array_key_exists("edit", $context))) {
            echo " action=\"";
            echo $this->env->getExtension('routing')->getPath("menu_ajouter");
            echo "\" ";
        } else {
            echo " action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menu_ajouter", array("id" => (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")))), "html", null, true);
            echo "\" ";
        }
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" ";
        // line 10
        if ((!array_key_exists("edit", $context))) {
            echo " value=\"Ajouter\" ";
        } else {
            echo " value=\"Modifier\" ";
        }
        echo "/>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "voyageTourismeBundle:Menu:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
