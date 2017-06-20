<?php

/* partials/header_alt.html.twig */
class __TwigTemplate_9d9a2fc4410fdeb2e063937d5e7ae3ed1119fcf4f5fff32bb85a5c1079bc9185 extends Twig_Template
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
        echo "
<style type=\"text/css\" id=\"rescue_custom_css\">
.home-header-bg {
  background:url( '";
        // line 4
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "background", array());
        echo "' ) #ffffff no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-color: rgba(0,0,0,0.8);
  background-blend-mode: multiply;
}
/* for background-size:cover replacement on iOS devices */
@media only screen and (max-width: 40em) {
  .home-header-bg {
    background-attachment: scroll;
  }
}
@media only screen and (orientation: portrait) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: auto 150%;
    background-attachment: scroll;
  }
}
@media only screen and (orientation: landscape) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: 150% auto;
    background-attachment: scroll;
  }
}

.bg-image-header {
  background:url( '";
        // line 32
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "background", array());
        echo "' ) center bottom #ffffff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
  background-color: rgba(0,0,0,0.8);
  background-blend-mode: multiply;
}

.bg-center-center {
  background-position: center center;
}

.site-branding {
  margin: 0 auto;
  display: table;
  padding-top: 2em;
}
</style>

<div class=\"bg-image bg-image-header bg-center-center\">
  <div class=\"site-branding\">
    <a href=\"";
        // line 55
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
      <img class=\"logo\" src=\"";
        // line 56
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\">
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/header_alt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 56,  85 => 55,  57 => 32,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<style type=\"text/css\" id=\"rescue_custom_css\">
.home-header-bg {
  background:url( '{{ theme_url }}/img/{{ site.header.background }}' ) #ffffff no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-color: rgba(0,0,0,0.8);
  background-blend-mode: multiply;
}
/* for background-size:cover replacement on iOS devices */
@media only screen and (max-width: 40em) {
  .home-header-bg {
    background-attachment: scroll;
  }
}
@media only screen and (orientation: portrait) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: auto 150%;
    background-attachment: scroll;
  }
}
@media only screen and (orientation: landscape) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: 150% auto;
    background-attachment: scroll;
  }
}

.bg-image-header {
  background:url( '{{ theme_url }}/img/{{ site.header.background }}' ) center bottom #ffffff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
  background-color: rgba(0,0,0,0.8);
  background-blend-mode: multiply;
}

.bg-center-center {
  background-position: center center;
}

.site-branding {
  margin: 0 auto;
  display: table;
  padding-top: 2em;
}
</style>

<div class=\"bg-image bg-image-header bg-center-center\">
  <div class=\"site-branding\">
    <a href=\"{{ base_url_absolute }}\">
      <img class=\"logo\" src=\"{{ theme_url }}/img/{{ site.logo }}\" alt=\"{{ site.logo }}\">
    </a>
  </div>
</div>
", "partials/header_alt.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/HCHT/hchtwebsite/user/themes/gateway/templates/partials/header_alt.html.twig");
    }
}
