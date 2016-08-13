<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5a4a6863fb7d4a5ba8ce99826a861800e4434e7dad1428b60cc8f3e284c8b542 extends Twig_Template
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
        echo twig_jsonencode_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,  43 => 6,  28 => 3,  24 => 4,  35 => 5,  87 => 20,  72 => 16,  66 => 15,  55 => 13,  41 => 5,  31 => 5,  25 => 3,  21 => 2,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 11,  44 => 7,  40 => 8,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 15,  60 => 13,  57 => 14,  54 => 11,  51 => 9,  48 => 9,  45 => 8,  42 => 6,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}
