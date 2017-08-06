<?php

/* item.html.twig */
class __TwigTemplate_89186ed3dc0e9a823c7f4d7887f372cf7b85f3b10072964deefc5a8472e756c9 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1749496889")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% set the_base_url = page.parent.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">

    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <div class=\"row\">
          {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
        </div>
      </main>
    </div>

    {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div>
    {% endif %}
  </div>
</div>
{% endblock %}
{% endembed %}
", "item.html.twig", "/mnt/tank/home/groups/hcht/web/user/themes/gateway/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_89186ed3dc0e9a823c7f4d7887f372cf7b85f3b10072964deefc5a8472e756c9_1749496889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        // line 3
        $context["the_base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = (isset($context["the_base_url"]) ? $context["the_base_url"] : null);
        // line 6
        if (((isset($context["the_base_url"]) ? $context["the_base_url"] : null) == "/")) {
            // line 7
            $context["the_base_url"] = "";
        }
        // line 10
        if (((isset($context["the_base_url"]) ? $context["the_base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 11
            $context["feed_url"] = (((isset($context["the_base_url"]) ? $context["the_base_url"] : null) . "/") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">

    <div class=\"large-";
        // line 18
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fullwidth", array())) {
            echo "8";
        } else {
            echo "12";
        }
        echo " columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <div class=\"row\">
          ";
        // line 21
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 21)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
        // line 22
        echo "        </div>
      </main>
    </div>

    ";
        // line 26
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fullwidth", array())) {
            // line 27
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 29
            $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 29)->display($context);
            // line 30
            echo "      </div>
    </div>
    ";
        }
        // line 33
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 33,  156 => 30,  154 => 29,  150 => 27,  148 => 26,  142 => 22,  140 => 21,  130 => 18,  125 => 15,  122 => 14,  118 => 1,  115 => 11,  113 => 10,  110 => 7,  108 => 6,  106 => 4,  104 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% set the_base_url = page.parent.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">

    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <div class=\"row\">
          {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
        </div>
      </main>
    </div>

    {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div>
    {% endif %}
  </div>
</div>
{% endblock %}
{% endembed %}
", "item.html.twig", "/mnt/tank/home/groups/hcht/web/user/themes/gateway/templates/item.html.twig");
    }
}
