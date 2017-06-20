<?php

/* partials/base.html.twig */
class __TwigTemplate_49c9f42cce678dab15cd11fd96fa284fb5473f0e68977c7dba2695d83fc05dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "</head>
<body id=\"top\" class=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
    <div id=\"page\">
        ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('navigation', $context, $blocks);
        // line 50
        echo "
        <div id=\"content\" class=\"site-content\">
          ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "        </div>

        ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "    </div>

    <script type=\"text/javascript\">
\t\t//<![CDATA[
\t\tvar infiniteScroll = {\"settings\":{\"id\":\"main\",\"type\":\"scroll\",\"wrapper\":true,\"wrapper_class\":\"infinite-wrap\",\"footer\":\"page\",\"click_handle\":\"1\",\"text\":\"Older posts\"}};
\t\t//]]>
\t\t</script>
    <div id=\"infinite-footer\">
      <div class=\"container\">
        <div class=\"blog-info\">
          <a id=\"infinity-blog-title\" href=\"";
        // line 68
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\" rel=\"home\" title=\"";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "\">
            ";
        // line 69
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "
          </a>
        </div>
        ";
        // line 72
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array())) {
            // line 73
            echo "        <div class=\"blog-credits\">
              ";
            // line 74
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
            echo "
        </div>
        ";
        }
        // line 77
        echo "      </div>
    </div>

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/favicon.png\" />
    <link rel='stylesheet' href=\"";
        // line 11
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/custom.css\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    <link rel='stylesheet' id='gateway-fonts-css'  href='//fonts.googleapis.com/css?family=Quattrocento%3A400%2C700%7CFanwood+Text%3A400%2C400italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.min.css"), "method");
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://fonts/css/font-awesome.css", 1 => 100), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/rescue_shortcodes_styles.css"), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/app.css"), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://genericons/genericons.css"), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jetpack.css"), "method");
        // line 21
        echo "    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/foundation.js"), "method");
        // line 28
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.js", 1 => 100), "method");
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/skip-link-focus-fix.js"), "method");
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/rescue_toggle.js"), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/rescue_progressbar.js"), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/infinity.js"), "method");
        // line 35
        echo "    ";
    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        // line 44
        echo "          ";
        $this->loadTemplate("partials/header_alt.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "        ";
    }

    // line 47
    public function block_navigation($context, array $blocks = array())
    {
        // line 48
        echo "          ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "        ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        // line 56
        echo "          ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 57,  248 => 56,  245 => 55,  240 => 52,  236 => 49,  233 => 48,  230 => 47,  226 => 45,  223 => 44,  220 => 43,  216 => 35,  213 => 34,  210 => 33,  207 => 32,  204 => 31,  201 => 30,  198 => 29,  195 => 28,  192 => 27,  189 => 26,  186 => 25,  182 => 21,  179 => 20,  176 => 19,  173 => 18,  170 => 17,  167 => 16,  164 => 15,  161 => 14,  158 => 13,  150 => 36,  148 => 25,  143 => 23,  140 => 22,  138 => 13,  133 => 11,  129 => 10,  126 => 9,  124 => 8,  116 => 7,  113 => 6,  110 => 5,  101 => 77,  95 => 74,  92 => 73,  90 => 72,  84 => 69,  78 => 68,  66 => 58,  64 => 55,  60 => 53,  58 => 52,  54 => 50,  52 => 47,  49 => 46,  47 => 43,  41 => 40,  38 => 39,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/img/favicon.png\" />
    <link rel='stylesheet' href=\"{{ theme_url }}/css/custom.css\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/animate.min.css') %}
        {% do assets.addCss('theme://fonts/css/font-awesome.css',100) %}
        {% do assets.addCss('theme://css/rescue_shortcodes_styles.css') %}
        {% do assets.addCss('theme://css/app.css') %}
        {% do assets.addCss('theme://css/style.css') %}
        {% do assets.addCss('theme://genericons/genericons.css') %}
        {% do assets.addCss('theme://css/jetpack.css') %}
    {% endblock %}

    {{ assets.css() }}
    <link rel='stylesheet' id='gateway-fonts-css'  href='//fonts.googleapis.com/css?family=Quattrocento%3A400%2C700%7CFanwood+Text%3A400%2C400italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    {% block javascripts %}
        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/foundation.js') %}
        {% do assets.addJs('theme://js/modernizr.custom.js',100) %}
        {% do assets.addJs('theme://js/skip-link-focus-fix.js') %}
        {% do assets.addJs('theme://js/scripts.js') %}
        {% do assets.addJs('theme://js/rescue_toggle.js') %}
        {% do assets.addJs('theme://js/rescue_progressbar.js') %}
        {% do assets.addJs('theme://js/waypoints.min.js') %}
        {% do assets.addJs('theme://js/infinity.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
    <div id=\"page\">
        {% block header %}
          {% include 'partials/header_alt.html.twig' %}
        {% endblock %}

        {% block navigation %}
          {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        <div id=\"content\" class=\"site-content\">
          {% block content %}{% endblock %}
        </div>

        {% block footer %}
          {% include 'partials/footer.html.twig' %}
        {% endblock %}
    </div>

    <script type=\"text/javascript\">
\t\t//<![CDATA[
\t\tvar infiniteScroll = {\"settings\":{\"id\":\"main\",\"type\":\"scroll\",\"wrapper\":true,\"wrapper_class\":\"infinite-wrap\",\"footer\":\"page\",\"click_handle\":\"1\",\"text\":\"Older posts\"}};
\t\t//]]>
\t\t</script>
    <div id=\"infinite-footer\">
      <div class=\"container\">
        <div class=\"blog-info\">
          <a id=\"infinity-blog-title\" href=\"{{ base_url_absolute }}\" rel=\"home\" title=\"{{ site.title }}\">
            {{ site.title }}
          </a>
        </div>
        {% if site.copyright %}
        <div class=\"blog-credits\">
              {{ site.copyright }}
        </div>
        {% endif %}
      </div>
    </div>

</body>
</html>
", "partials/base.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/HCHT/hchtwebsite/user/themes/gateway/templates/partials/base.html.twig");
    }
}
