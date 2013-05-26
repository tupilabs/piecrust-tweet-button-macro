<?php

/* macros_less.html */
class __TwigTemplate_faa8e16df7179e3d5db5090a2513e295 extends Twig_Template
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
        // line 8
        echo "
";
    }

    // line 1
    public function getstylesheet($_baker = null, $_server = null, $_path = null, $_media = null)
    {
        $context = $this->env->mergeGlobals(array(
            "baker" => $_baker,
            "server" => $_server,
            "path" => $_path,
            "media" => $_media,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (($this->getAttribute((isset($context["baker"]) ? $context["baker"] : null), "is_baking") || $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "is_hosting"))) {
                // line 3
                echo "<link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo ".css\" type=\"text/css\" media=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("media", $context)) ? (_twig_default_filter((isset($context["media"]) ? $context["media"] : null), "all")) : ("all")), "html", null, true);
                echo "\" />
";
            } else {
                // line 5
                echo "<link rel=\"stylesheet/less\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo ".less\" type=\"text/css\" media=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("media", $context)) ? (_twig_default_filter((isset($context["media"]) ? $context["media"] : null), "all")) : ("all")), "html", null, true);
                echo "\" />
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getless_js($_baker = null, $_server = null, $_site_root = null)
    {
        $context = $this->env->mergeGlobals(array(
            "baker" => $_baker,
            "server" => $_server,
            "site_root" => $_site_root,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            if (((!$this->getAttribute((isset($context["baker"]) ? $context["baker"] : null), "is_baking")) && (!$this->getAttribute((isset($context["server"]) ? $context["server"] : null), "is_hosting")))) {
                // line 11
                echo "<script src=\"";
                echo twig_escape_filter($this->env, (isset($context["site_root"]) ? $context["site_root"] : null), "html", null, true);
                echo "js/less-1.0.41.min.js\" type=\"text/javascript\"></script>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros_less.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  78 => 10,  48 => 5,  40 => 3,  38 => 2,  65 => 9,  60 => 6,  49 => 5,  35 => 2,  149 => 44,  146 => 43,  140 => 38,  135 => 37,  132 => 36,  123 => 22,  120 => 21,  112 => 48,  108 => 46,  106 => 43,  101 => 40,  99 => 36,  90 => 30,  86 => 29,  82 => 28,  76 => 24,  74 => 21,  66 => 16,  62 => 15,  57 => 14,  55 => 13,  50 => 11,  46 => 10,  42 => 9,  33 => 7,  28 => 4,  26 => 3,  24 => 1,  22 => 1,  19 => 8,);
    }
}
