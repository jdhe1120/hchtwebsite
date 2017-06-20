<?php

/* blog.html.twig */
class __TwigTemplate_ba708a8f4d9d97428e2a41d621d0dc063f36aea1c7dddc9f0be4c6768119a7e9 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "407531592")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
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

{% set collection = page.collection() %}
{% set the_base_url = page.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      {{ page.content }}
    </div>
  </div>
</div>


<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-12 columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        {% for child in collection %}
        <div class=\"large-4 columns\">
          {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true, 'readmore': false} %}
        </div>
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}

      </main>
    </div>
    {% if not page.header.fullwidth %}
    <!-- <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div> -->
    {% endif %}
  </div>
</div>
{% endblock %}

{% endembed %}
", "blog.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/HCHT/hchtwebsite/user/themes/gateway/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_ba708a8f4d9d97428e2a41d621d0dc063f36aea1c7dddc9f0be4c6768119a7e9_407531592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 4
        $context["the_base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 5
        $context["feed_url"] = (isset($context["the_base_url"]) ? $context["the_base_url"] : null);
        // line 7
        if (((isset($context["the_base_url"]) ? $context["the_base_url"] : null) == "/")) {
            // line 8
            $context["the_base_url"] = "";
        }
        // line 11
        if (((isset($context["the_base_url"]) ? $context["the_base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 12
            $context["feed_url"] = (((isset($context["the_base_url"]) ? $context["the_base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      ";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>
  </div>
</div>


<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-12 columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 30
            echo "        <div class=\"large-4 columns\">
          ";
            // line 31
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 31)->display(array_merge($context, array("page" => $context["child"], "truncate" => true, "readmore" => false)));
            // line 32
            echo "        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        ";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 36
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 36)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 37
            echo "        ";
        }
        // line 38
        echo "
      </main>
    </div>
    ";
        // line 41
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fullwidth", array())) {
            // line 42
            echo "    <!-- <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 44
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 44)->display($context);
            // line 45
            echo "      </div>
    </div> -->
    ";
        }
        // line 48
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 48,  222 => 45,  220 => 44,  216 => 42,  214 => 41,  209 => 38,  206 => 37,  203 => 36,  201 => 35,  198 => 34,  183 => 32,  181 => 31,  178 => 30,  161 => 29,  148 => 19,  143 => 16,  140 => 15,  136 => 1,  133 => 12,  131 => 11,  128 => 8,  126 => 7,  124 => 5,  122 => 4,  120 => 3,  19 => 1,);
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

{% set collection = page.collection() %}
{% set the_base_url = page.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      {{ page.content }}
    </div>
  </div>
</div>


<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-12 columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        {% for child in collection %}
        <div class=\"large-4 columns\">
          {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true, 'readmore': false} %}
        </div>
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}

      </main>
    </div>
    {% if not page.header.fullwidth %}
    <!-- <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div> -->
    {% endif %}
  </div>
</div>
{% endblock %}

{% endembed %}
", "blog.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/HCHT/hchtwebsite/user/themes/gateway/templates/blog.html.twig");
    }
}
