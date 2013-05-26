<?php

/* macros_google.html */
class __TwigTemplate_1587babd08d389b4cca3da6fd66332b9 extends Twig_Template
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
        // line 4
        echo "
";
    }

    // line 1
    public function getwebfonts($_fontnames = null)
    {
        $context = $this->env->mergeGlobals(array(
            "fontnames" => $_fontnames,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, (isset($context["fontnames"]) ? $context["fontnames"] : null), "html", null, true);
            echo "\">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getanalytics($_siteId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "siteId" => $_siteId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["siteId"]) ? $context["siteId"] : null), "html", null, true);
            echo "']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros_google.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  60 => 6,  49 => 5,  35 => 2,  149 => 44,  146 => 43,  140 => 38,  135 => 37,  132 => 36,  123 => 22,  120 => 21,  112 => 48,  108 => 46,  106 => 43,  101 => 40,  99 => 36,  90 => 30,  86 => 29,  82 => 28,  76 => 24,  74 => 21,  66 => 16,  62 => 15,  57 => 14,  55 => 13,  50 => 11,  46 => 10,  42 => 9,  33 => 7,  28 => 4,  26 => 3,  24 => 1,  22 => 1,  19 => 4,);
    }
}
