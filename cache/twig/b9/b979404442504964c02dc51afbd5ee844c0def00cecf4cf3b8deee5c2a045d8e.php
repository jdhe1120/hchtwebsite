<?php

/* error.html.twig */
class __TwigTemplate_777e0ff05cbfa8a83b52916cd872665748477cf86ad271b938c2f55ab41818ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"primary\" class=\"content-area\">
  <main id=\"main\" class=\"site-main\" role=\"main\">
    <section class=\"error-404 not-found\">
      <div class=\"row\">
        <div class=\"large-12 columns\">
          <header class=\"page-header\">
            <h1 class=\"page-title\">Error ";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
          </header>
        </div>
      </div>
      <div class=\"page-content\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
            <p>";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</p>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div id=\"primary\" class=\"content-area\">
  <main id=\"main\" class=\"site-main\" role=\"main\">
    <section class=\"error-404 not-found\">
      <div class=\"row\">
        <div class=\"large-12 columns\">
          <header class=\"page-header\">
            <h1 class=\"page-title\">Error {{ page.header.http_response_code }}</h1>
          </header>
        </div>
      </div>
      <div class=\"page-content\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
            <p>{{ page.content }}</p>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
{% endblock %}
", "error.html.twig", "/mnt/tank/home/groups/hcht/web/user/themes/gateway/templates/error.html.twig");
    }
}
