<?php

/* voyageTourismeBundle:Menu:liste.html.twig */
class __TwigTemplate_0786b74f88f1f1d023ce67d48f909e8d541010ece3be4037cdc67e242e1de6d9 extends Twig_Template
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
        echo "voyageTourismeBundle:Menu:liste";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Welcome to the Menu:liste page</h1>
    <ol>
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMenu"]) ? $context["listeMenu"] : $this->getContext($context, "listeMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 9
            echo "            <li>";
            echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ol>
";
    }

    public function getTemplateName()
    {
        return "voyageTourismeBundle:Menu:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
