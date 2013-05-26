<?php

/* macros_tweet.html */
class __TwigTemplate_c9f57f9c560db7326759d901a50c5a84 extends Twig_Template
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
    }

    // line 1
    public function getbutton($_base_url = null, $_counturl = null, $_url = null, $_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "base_url" => $_base_url,
            "counturl" => $_counturl,
            "url" => $_url,
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"tw_button\" style=\"\">
    <iframe
        allowtransparency=\"true\"
        frameborder=\"0\"
        scrolling=\"no\"
        src=\"http://platform.twitter.com/widgets/tweet_button.1368146021.html#_=1369516789398&amp;count=horizontal&amp;counturl=";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null));
            echo twig_escape_filter($this->env, (isset($context["counturl"]) ? $context["counturl"] : null));
            echo "&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null));
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null));
            echo "&amp;size=m&amp;text=";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null));
            echo "&amp;url=";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null));
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null));
            echo "\"
        class=\"twitter-share-button twitter-count-horizontal\"
        title=\"Twitter Tweet Button\"
        data-twttr-rendered=\"true\"
        style=\"width: 107px; height: 20px;\"></iframe>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros_tweet.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 1,  80 => 11,  78 => 10,  48 => 5,  40 => 3,  38 => 2,  65 => 9,  60 => 6,  49 => 5,  35 => 2,  149 => 44,  146 => 43,  140 => 38,  135 => 37,  132 => 36,  123 => 22,  120 => 21,  112 => 48,  108 => 46,  106 => 43,  101 => 40,  99 => 36,  90 => 30,  86 => 29,  82 => 28,  76 => 24,  74 => 21,  66 => 16,  62 => 15,  57 => 14,  55 => 13,  50 => 11,  46 => 10,  42 => 7,  33 => 7,  28 => 4,  26 => 3,  24 => 1,  22 => 1,  19 => 8,);
    }
}
