<?php

/* partials/base.html.twig */
class __TwigTemplate_5e7699d871281602010e13c33e6bed400e9f64ab395abdcd81fddf09ab4b6c02 extends Twig_Template
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
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
    <div id=\"page\">
        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('navigation', $context, $blocks);
        // line 52
        echo "
        <div id=\"content\" class=\"site-content\">
          ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        </div>

        ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 60
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
        // line 70
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\" rel=\"home\" title=\"";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "\">
            ";
        // line 71
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "
          </a>
        </div>
        ";
        // line 74
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array())) {
            // line 75
            echo "        <div class=\"blog-credits\">
              ";
            // line 76
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
            echo "
        </div>
        ";
        }
        // line 79
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

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    <link rel='stylesheet' id='gateway-fonts-css'  href='//fonts.googleapis.com/css?family=Quattrocento%3A400%2C700%7CFanwood+Text%3A400%2C400italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />

    <link rel='stylesheet' href=\"";
        // line 25
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/custom.css\" />
    
    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.min.css"), "method");
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://fonts/css/font-awesome.css", 1 => 100), "method");
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/rescue_shortcodes_styles.css"), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/app.css"), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://genericons/genericons.css"), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jetpack.css"), "method");
        // line 20
        echo "    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/foundation.js"), "method");
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.js", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/skip-link-focus-fix.js"), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/rescue_toggle.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/rescue_progressbar.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/infinity.js"), "method");
        // line 37
        echo "    ";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
        echo "          ";
        $this->loadTemplate("partials/header_alt.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "        ";
    }

    // line 49
    public function block_navigation($context, array $blocks = array())
    {
        // line 50
        echo "          ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "        ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "          ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
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
        return array (  253 => 59,  250 => 58,  247 => 57,  242 => 54,  238 => 51,  235 => 50,  232 => 49,  228 => 47,  225 => 46,  222 => 45,  218 => 37,  215 => 36,  212 => 35,  209 => 34,  206 => 33,  203 => 32,  200 => 31,  197 => 30,  194 => 29,  191 => 28,  188 => 27,  184 => 20,  181 => 19,  178 => 18,  175 => 17,  172 => 16,  169 => 15,  166 => 14,  163 => 13,  160 => 12,  152 => 38,  150 => 27,  145 => 25,  139 => 22,  136 => 21,  134 => 12,  129 => 10,  126 => 9,  124 => 8,  116 => 7,  113 => 6,  110 => 5,  101 => 79,  95 => 76,  92 => 75,  90 => 74,  84 => 71,  78 => 70,  66 => 60,  64 => 57,  60 => 55,  58 => 54,  54 => 52,  52 => 49,  49 => 48,  47 => 45,  41 => 42,  38 => 41,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
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

    <link rel='stylesheet' href=\"{{ theme_url }}/css/custom.css\" />
    
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
", "partials/base.html.twig", "/mnt/tank/home/groups/hcht/web/user/themes/gateway/templates/partials/base.html.twig");
    }
}
