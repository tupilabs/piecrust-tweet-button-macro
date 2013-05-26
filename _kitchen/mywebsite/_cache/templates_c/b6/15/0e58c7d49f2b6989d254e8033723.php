<?php

/* default.html */
class __TwigTemplate_b6150e58c7d49f2b6989d254e8033723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["google"] = $this->env->loadTemplate("macros_google.html");
        // line 2
        $context["less"] = $this->env->loadTemplate("macros_less.html");
        // line 3
        $context["tweet"] = $this->env->loadTemplate("macros_tweet.html");
        // line 4
        echo "<!doctype html>
<html>
<head>
    <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        if ((!twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")))) {
            echo " &mdash; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        }
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t<meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description"), "html", null, true);
        echo "\" />
\t<meta name=\"author\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author"), "html", null, true);
        echo "\" />
    <meta name=\"generator\" content=\"PieCrust ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "version"), "html", null, true);
        echo "\" />
    <meta name=\"template-engine\" content=\"Twig\" />
";
        // line 13
        $this->env->loadTemplate("blueprint.html")->display($context);
        // line 14
        echo "\t";
        echo $context["google"]->getwebfonts("Lobster");
        echo "
\t";
        // line 15
        echo $context["less"]->getstylesheet((isset($context["baker"]) ? $context["baker"] : null), (isset($context["server"]) ? $context["server"] : null), ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root") . "css/default"));
        echo "
    ";
        // line 16
        echo $context["less"]->getless_js((isset($context["baker"]) ? $context["baker"] : null), (isset($context["server"]) ? $context["server"] : null), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"));
        echo "
</head>
<body>
    <div id=\"container\" class=\"container\">
        <div id=\"header\" class=\"span-24 last\">
\t\t\t";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "        </div>
        <div id=\"menu\" class=\"span-4 push-20 last\">
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl("blog"), "html", null, true);
        echo "\">Blog</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl("about"), "html", null, true);
        echo "\">About</a></li>
\t\t\t\t</ul>
\t\t\t</div>
        </div>
        <div id=\"content\" class=\"span-20 pull-4 last\">
            <div class=\"content\">
                ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "            </div>
        </div>
        <div id=\"footer\" class=\"span-24 last\">
\t\t\t";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "        </div>
    </div>
\t";
        // line 48
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "debug_info");
        echo "
</body>
</html>
";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "            <h1><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        echo "</a></h1>
\t\t\t";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "                ";
        echo $context["tweet"]->getbutton("http://www.mywebsite.com", $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url"), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url"), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"));
        echo "
                ";
        // line 38
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        \t\t";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "            <p>";
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "branding");
        echo "</p>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 44,  146 => 43,  140 => 38,  135 => 37,  132 => 36,  123 => 22,  120 => 21,  112 => 48,  108 => 46,  106 => 43,  101 => 40,  99 => 36,  90 => 30,  86 => 29,  82 => 28,  76 => 24,  74 => 21,  66 => 16,  62 => 15,  57 => 14,  55 => 13,  50 => 11,  46 => 10,  42 => 9,  33 => 7,  28 => 4,  26 => 3,  24 => 2,  22 => 1,  19 => 1,);
    }
}
