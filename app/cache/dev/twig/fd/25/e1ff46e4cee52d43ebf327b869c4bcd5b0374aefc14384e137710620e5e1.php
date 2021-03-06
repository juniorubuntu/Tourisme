<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_fd25e1ff46e4cee52d43ebf327b869c4bcd5b0374aefc14384e137710620e5e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  90 => 32,  84 => 29,  76 => 17,  432 => 116,  416 => 106,  410 => 103,  399 => 100,  390 => 94,  386 => 93,  382 => 92,  378 => 91,  370 => 89,  366 => 88,  356 => 83,  353 => 82,  347 => 223,  343 => 222,  339 => 221,  333 => 218,  326 => 214,  318 => 212,  218 => 117,  216 => 100,  213 => 99,  211 => 82,  207 => 80,  191 => 75,  180 => 72,  170 => 69,  152 => 65,  148 => 64,  124 => 53,  113 => 50,  58 => 17,  53 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 102,  402 => 101,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 90,  368 => 112,  365 => 111,  362 => 87,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 213,  314 => 211,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 66,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 17,  67 => 15,  63 => 17,  59 => 6,  38 => 6,  201 => 79,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 52,  117 => 19,  105 => 18,  91 => 27,  62 => 23,  49 => 13,  94 => 34,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 11,  26 => 9,  28 => 3,  24 => 3,  87 => 25,  31 => 4,  25 => 35,  21 => 1,  19 => 1,  93 => 28,  88 => 31,  78 => 26,  46 => 9,  44 => 12,  27 => 5,  79 => 18,  72 => 16,  69 => 11,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 47,  98 => 46,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 14,  50 => 10,  43 => 11,  41 => 5,  35 => 7,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 74,  182 => 66,  176 => 71,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 59,  133 => 56,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 10,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 17,  42 => 8,  39 => 8,  36 => 5,  33 => 3,  30 => 3,);
    }
}
