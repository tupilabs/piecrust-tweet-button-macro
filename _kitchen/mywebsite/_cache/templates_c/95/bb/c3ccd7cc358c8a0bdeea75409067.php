<?php

/* blueprint.html */
class __TwigTemplate_95bbc3ccd7cc358c8a0bdeea75409067 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "css/blueprint/screen.css\" type=\"text/css\" media=\"screen, projection\" />
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "css/blueprint/print.css\" type=\"text/css\" media=\"print\" /> 
<!--[if lt IE 8]>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "css/blueprint/ie.css\" type=\"text/css\" media=\"screen, projection\" />
<![endif]-->
";
    }

    public function getTemplateName()
    {
        return "blueprint.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  21 => 1,  80 => 11,  78 => 10,  48 => 5,  40 => 3,  38 => 2,  65 => 9,  60 => 6,  49 => 5,  35 => 2,  149 => 44,  146 => 43,  140 => 38,  135 => 37,  132 => 36,  123 => 22,  120 => 21,  112 => 48,  108 => 46,  106 => 43,  101 => 40,  99 => 36,  90 => 30,  86 => 29,  82 => 28,  76 => 24,  74 => 21,  66 => 16,  62 => 15,  57 => 14,  55 => 13,  50 => 11,  46 => 10,  42 => 7,  33 => 7,  28 => 4,  26 => 3,  24 => 2,  22 => 1,  19 => 1,);
    }
}
