<?php

/* journal2/template/common/header.twig */
class __TwigTemplate_46e09fd7facbc01374802f272ea31ea66d2925c1efe4523458b7b4981e2f623e extends Twig_Template
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
        echo "<!DOCTYPE html>
";
        // line 2
        if ( !twig_constant("JOURNAL_INSTALLED")) {
            // line 3
            echo "    <h3>Journal Installation Error</h3>
    <p>Make sure you have uploaded all Journal files to your server and successfully replaced <b>system/engine/front.php</b> file.</p>
    <p>Please read this: <a href=\"http://docs.digital-atelier.com/opencart/journal/#/settings/install\" target=\"_blank\">here</a>.</p>
";
        }
        // line 7
        if ( !(isset($context["currency"]) ? $context["currency"] : null)) {
            // line 8
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "addClass", array(0 => "no-currency"), "method");
        }
        // line 10
        if ( !(isset($context["language"]) ? $context["language"] : null)) {
            // line 11
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "addClass", array(0 => "no-language"), "method");
        }
        // line 13
        echo "<html dir=\"";
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "getAll", array(), "method");
        echo "\" data-j2v=\"";
        echo twig_constant("JOURNAL_VERSION");
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        
        ";
        // line 18
        echo "        <meta name=\"googlebot\" content=\"noindex\">


        ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "responsive_design", 1 => "1"), "method") == "1")) {
            // line 22
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pinch_zoom", 1 => "1"), "method") == "1")) {
                // line 23
                echo "                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            ";
            } else {
                // line 25
                echo "                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            ";
            }
            // line 27
            echo "        ";
        }
        // line 28
        echo "        <meta name=\"format-detection\" content=\"telephone=no\">
        <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge,chrome=1\"/><![endif]-->
        <title>";
        // line 30
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
        <base href=\"";
        // line 31
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
        ";
        // line 32
        $context["meta_title"] = $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_meta_title"), "method");
        // line 33
        echo "        
        ";
        // line 34
        if ((isset($context["meta_title"]) ? $context["meta_title"] : null)) {
            // line 35
            echo "            <meta name=\"title\" content=\"";
            echo (isset($context["meta_title"]) ? $context["meta_title"] : null);
            echo "\" />
        ";
        }
        // line 37
        echo "        
        ";
        // line 38
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 39
            echo "            <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
        ";
        }
        // line 41
        echo "        
        ";
        // line 42
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 43
            echo "            <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
        ";
        }
        // line 45
        echo "        
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_metas", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["sm"]) {
            // line 47
            echo "            <meta ";
            echo $this->getAttribute($context["sm"], "key", array());
            echo "=\"";
            echo $this->getAttribute($context["sm"], "type", array());
            echo "\" content=\"";
            echo $this->getAttribute($context["sm"], "content", array());
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        
        ";
        // line 50
        if ((isset($context["icon"]) ? $context["icon"] : null)) {
            // line 51
            echo "            <link href=\"";
            echo (isset($context["icon"]) ? $context["icon"] : null);
            echo "\" rel=\"icon\" />
        ";
        }
        // line 53
        echo "        
        ";
        // line 54
        $context["blog_feed_url"] = $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_blog_feed_url"), "method");
        // line 55
        echo "        
        ";
        // line 56
        if ((isset($context["blog_feed_url"]) ? $context["blog_feed_url"] : null)) {
            // line 57
            echo "            <link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
            echo (isset($context["blog_feed_url"]) ? $context["blog_feed_url"] : null);
            echo "\" />
        ";
        }
        // line 59
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 60
            echo "            <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 64
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => $this->getAttribute($context["style"], "href", array())), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "google_fonts", array()), "getFonts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 68
            echo "            <link rel=\"stylesheet\" href=\"";
            echo $context["font"];
            echo "\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 71
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addScript", array(0 => $context["script"], 1 => "header"), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/hint.min.css"), "method");
        // line 74
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/journal.css"), "method");
        // line 75
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/features.css"), "method");
        // line 76
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/header.css"), "method");
        // line 77
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/module.css"), "method");
        // line 78
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/pages.css"), "method");
        // line 79
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/account.css"), "method");
        // line 80
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/blog-manager.css"), "method");
        // line 81
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/side-column.css"), "method");
        // line 82
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/product.css"), "method");
        // line 83
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/category.css"), "method");
        // line 84
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/footer.css"), "method");
        // line 85
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/icons.css"), "method");
        // line 86
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "responsive_design"), "method")) {
            // line 87
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/responsive.css"), "method");
        }
        // line 89
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/flex.css"), "method");
        // line 90
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/rtl.css"), "method");
        // line 91
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "css", array(), "method");
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "cache", array()), "getDeveloperMode", array(), "method") ||  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "getMinifyCss", array(), "method"))) {
            // line 93
            echo "        <link rel=\"stylesheet\" href=\"index.php?route=journal2/assets/css\" />
        ";
        }
        // line 95
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addScript", array(0 => "catalog/view/theme/journal2/js/journal.js", 1 => "header"), "method");
        // line 96
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "loadGoogleRecaptcha", array(), "method")) {
            // line 97
            echo "        <script src=\"https://www.google.com/recaptcha/api.js\"></script>
        ";
        }
        // line 99
        echo "        ";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "js", array(0 => "header"), "method");
        echo "
        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 101
            echo "        ";
            echo $context["analytic"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        <script>
        ";
        // line 104
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 105
            echo "        Journal.COUNTDOWN = {
          DAYS    : \"";
            // line 106
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_days", 1 => "Days"), "method");
            echo "\",
          HOURS   : \"";
            // line 107
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_hours", 1 => "Hours"), "method");
            echo "\",
          MINUTES : \"";
            // line 108
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_min", 1 => "Min"), "method");
            echo "\",
          SECONDS : \"";
            // line 109
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_sec", 1 => "Sec"), "method");
            echo "\"
        };
        ";
        }
        // line 112
        echo "        Journal.NOTIFICATION_BUTTONS = '";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_buttons"), "method");
        echo "';
        </script>
</head>
<body>
<!--[if lt IE 9]>
<div class=\"old-browser\">";
        // line 117
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "old_browser_message", 1 => "You are using an old browser. Please <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">upgrade to a newer version</a> or <a href=\"http://browsehappy.com/\">try a different browser</a>."), "method");
        echo "</div>
<![endif]-->
";
        // line 119
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_header_modules"), "method");
        echo "
";
        // line 120
        $context["header_type"] = ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_type", 1 => "default"), "method") == "extended")) ? ("default") : ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_type", 1 => "default"), "method")));
        // line 121
        echo twig_include($this->env, $context, ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_template"), "method") . "/template/journal2/headers/") . (isset($context["header_type"]) ? $context["header_type"] : null)) . ".twig"));
        echo "
";
        // line 122
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_top_modules"), "method")) {
            // line 123
            echo "<div id=\"top-modules\">
  ";
            // line 124
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_top_modules"), "method");
            echo "
</div>
";
        }
        // line 127
        echo "<div class=\"extended-container\">
";
    }

    public function getTemplateName()
    {
        return "journal2/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 127,  349 => 124,  346 => 123,  344 => 122,  340 => 121,  338 => 120,  334 => 119,  329 => 117,  320 => 112,  314 => 109,  310 => 108,  306 => 107,  302 => 106,  299 => 105,  297 => 104,  294 => 103,  285 => 101,  281 => 100,  276 => 99,  272 => 97,  270 => 96,  268 => 95,  264 => 93,  262 => 92,  260 => 91,  258 => 90,  256 => 89,  253 => 87,  251 => 86,  249 => 85,  247 => 84,  245 => 83,  243 => 82,  241 => 81,  239 => 80,  237 => 79,  235 => 78,  233 => 77,  231 => 76,  229 => 75,  227 => 74,  225 => 73,  219 => 71,  214 => 70,  205 => 68,  201 => 67,  198 => 66,  192 => 64,  188 => 63,  185 => 62,  174 => 60,  169 => 59,  163 => 57,  161 => 56,  158 => 55,  156 => 54,  153 => 53,  147 => 51,  145 => 50,  142 => 49,  129 => 47,  125 => 46,  122 => 45,  116 => 43,  114 => 42,  111 => 41,  105 => 39,  103 => 38,  100 => 37,  94 => 35,  92 => 34,  89 => 33,  87 => 32,  83 => 31,  79 => 30,  75 => 28,  72 => 27,  68 => 25,  64 => 23,  61 => 22,  59 => 21,  54 => 18,  40 => 13,  37 => 11,  35 => 10,  32 => 8,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* {% if not constant('JOURNAL_INSTALLED') %}*/
/*     <h3>Journal Installation Error</h3>*/
/*     <p>Make sure you have uploaded all Journal files to your server and successfully replaced <b>system/engine/front.php</b> file.</p>*/
/*     <p>Please read this: <a href="http://docs.digital-atelier.com/opencart/journal/#/settings/install" target="_blank">here</a>.</p>*/
/* {% endif %}*/
/* {% if not currency %}*/
/*     {{- journal2.html_classes.addClass('no-currency') -}}*/
/* {% endif %}*/
/* {% if not language %}*/
/*     {{- journal2.html_classes.addClass('no-language') -}}*/
/* {% endif %}*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="{{ journal2.html_classes.getAll() }}" data-j2v="{{ constant('JOURNAL_VERSION') }}">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         */
/*         {# para que no indexe los buscadores de google #}*/
/*         <meta name="googlebot" content="noindex">*/
/* */
/* */
/*         {% if journal2.settings.get('responsive_design', '1') == '1' %}*/
/*             {% if journal2.settings.get('pinch_zoom', '1') == '1' %}*/
/*                 <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*             {% else %}*/
/*                 <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <meta name="format-detection" content="telephone=no">*/
/*         <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/><![endif]-->*/
/*         <title>{{ title }}</title>*/
/*         <base href="{{ base }}" />*/
/*         {% set meta_title = journal2.settings.get('blog_meta_title') %}*/
/*         */
/*         {% if meta_title %}*/
/*             <meta name="title" content="{{ meta_title }}" />*/
/*         {% endif %}*/
/*         */
/*         {% if description %}*/
/*             <meta name="description" content="{{ description }}" />*/
/*         {% endif %}*/
/*         */
/*         {% if keywords %}*/
/*             <meta name="keywords" content="{{ keywords }}" />*/
/*         {% endif %}*/
/*         */
/*         {% for sm in journal2.settings.get('share_metas', {}) %}*/
/*             <meta {{ sm.key }}="{{ sm.type }}" content="{{ sm.content }}" />*/
/*         {% endfor %}*/
/*         */
/*         {% if icon %}*/
/*             <link href="{{ icon }}" rel="icon" />*/
/*         {% endif %}*/
/*         */
/*         {% set blog_feed_url = journal2.settings.get('blog_blog_feed_url') %}*/
/*         */
/*         {% if blog_feed_url %}*/
/*             <link rel="alternate" type="application/rss+xml" title="RSS" href="{{ blog_feed_url }}" />*/
/*         {% endif %}*/
/*         {% for link in links %}*/
/*             <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/*         {% endfor %}*/
/*         */
/*         {% for style in styles %}*/
/*             {{- journal2.minifier.addStyle(style.href) -}}*/
/*         {% endfor %}*/
/*         */
/*         {% for font in journal2.google_fonts.getFonts() %}*/
/*             <link rel="stylesheet" href="{{ font }}"/>*/
/*         {% endfor %}*/
/*         {% for script in scripts %}*/
/*         {{- journal2.minifier.addScript(script, 'header') -}}*/
/*         {% endfor %}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/hint.min.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/journal.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/features.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/header.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/module.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/pages.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/account.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/blog-manager.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/side-column.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/product.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/category.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/footer.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/icons.css') -}}*/
/*         {% if journal2.settings.get('responsive_design') %}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/responsive.css') -}}*/
/*         {% endif %}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/flex.css') -}}*/
/*         {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/rtl.css') -}}*/
/*         {{- journal2.minifier.css() -}}*/
/*         {% if journal2.cache.getDeveloperMode() or not journal2.minifier.getMinifyCss() %}*/
/*         <link rel="stylesheet" href="index.php?route=journal2/assets/css" />*/
/*         {% endif %}*/
/*         {{- journal2.minifier.addScript('catalog/view/theme/journal2/js/journal.js', 'header') -}}*/
/*         {% if journal2.minifier.loadGoogleRecaptcha()  %}*/
/*         <script src="https://www.google.com/recaptcha/api.js"></script>*/
/*         {% endif %}*/
/*         {{ journal2.minifier.js('header') }}*/
/*         {% for analytic in analytics %}*/
/*         {{ analytic }}*/
/*         {% endfor %}*/
/*         <script>*/
/*         {% if journal2.settings.get('show_countdown', 'never') != 'never' or journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/*         Journal.COUNTDOWN = {*/
/*           DAYS    : "{{ journal2.settings.get('countdown_days', 'Days') }}",*/
/*           HOURS   : "{{ journal2.settings.get('countdown_hours', 'Hours') }}",*/
/*           MINUTES : "{{ journal2.settings.get('countdown_min', 'Min') }}",*/
/*           SECONDS : "{{ journal2.settings.get('countdown_sec', 'Sec') }}"*/
/*         };*/
/*         {% endif %}*/
/*         Journal.NOTIFICATION_BUTTONS = '{{ journal2.settings.get('notification_buttons') }}';*/
/*         </script>*/
/* </head>*/
/* <body>*/
/* <!--[if lt IE 9]>*/
/* <div class="old-browser">{{ journal2.settings.get('old_browser_message', 'You are using an old browser. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade to a newer version</a> or <a href="http://browsehappy.com/">try a different browser</a>.') }}</div>*/
/* <![endif]-->*/
/* {{ journal2.settings.get('config_header_modules') }}*/
/* {% set header_type = journal2.settings.get('header_type', 'default') == 'extended' ? 'default' : journal2.settings.get('header_type', 'default') %}*/
/* {{ include(config.get('config_template') ~ "/template/journal2/headers/" ~ header_type ~ ".twig") }}*/
/* {% if journal2.settings.get('config_top_modules') %}*/
/* <div id="top-modules">*/
/*   {{ journal2.settings.get('config_top_modules') }}*/
/* </div>*/
/* {% endif %}*/
/* <div class="extended-container">*/
/* */
