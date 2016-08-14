<?php

/* voyageTourismeBundle:Panel:liste.html.twig */
class __TwigTemplate_96bac530198adf46ef476fc2a8f4378975a5c312c5b275fabda394c2c1c925cd extends Twig_Template
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
        echo "    <h1>Welcome to the Panel:liste page</h1>
    <ol>
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listePanel"]) ? $context["listePanel"] : $this->getContext($context, "listePanel")));
        foreach ($context['_seq'] as $context["_key"] => $context["paneau"]) {
            // line 9
            echo "            <li>";
            echo twig_escape_filter($this->env, (isset($context["paneau"]) ? $context["paneau"] : $this->getContext($context, "paneau")), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paneau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ol>
";
    }

    public function getTemplateName()
    {
        return "voyageTourismeBundle:Panel:liste.html.twig";
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
