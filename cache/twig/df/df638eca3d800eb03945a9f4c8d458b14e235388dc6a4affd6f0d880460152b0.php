<?php

/* blog.html.twig */
class __TwigTemplate_96c8a456f406d21604cb611c8cff26a928a95a31e721e11b8fabfc42d5078ca8 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "8125686")->display($context);
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
      <br/>
      <a style=\"font-size: 20px\" href=\"/search/query:anxiety\">Anxiety</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:depression\">Depression</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:parkinson\">Parkinson's</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:schizophrenia\">Schizophrenia</a>
      <br/>
      <br/>
      {% include 'partials/simplesearch_searchbox.html.twig' %}
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
", "blog.html.twig", "/mnt/tank/home/groups/hcht/web/user/themes/gateway/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_96c8a456f406d21604cb611c8cff26a928a95a31e721e11b8fabfc42d5078ca8_8125686 extends Twig_Template
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
      <br/>
      <a style=\"font-size: 20px\" href=\"/search/query:anxiety\">Anxiety</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:depression\">Depression</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:parkinson\">Parkinson's</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:schizophrenia\">Schizophrenia</a>
      <br/>
      <br/>
      ";
        // line 27
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "blog.html.twig", 27)->display($context);
        // line 28
        echo "    </div>
  </div>
</div>


<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-12 columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        ";
        // line 37
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
            // line 38
            echo "        <div class=\"large-4 columns\">
          ";
            // line 39
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 39)->display(array_merge($context, array("page" => $context["child"], "truncate" => true, "readmore" => false)));
            // line 40
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
        // line 42
        echo "
        ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 44
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 44)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 45
            echo "        ";
        }
        // line 46
        echo "
      </main>
    </div>
    ";
        // line 49
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fullwidth", array())) {
            // line 50
            echo "    <!-- <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 52
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 52)->display($context);
            // line 53
            echo "      </div>
    </div> -->
    ";
        }
        // line 56
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
        return array (  246 => 56,  241 => 53,  239 => 52,  235 => 50,  233 => 49,  228 => 46,  225 => 45,  222 => 44,  220 => 43,  217 => 42,  202 => 40,  200 => 39,  197 => 38,  180 => 37,  169 => 28,  167 => 27,  156 => 19,  151 => 16,  148 => 15,  144 => 1,  141 => 12,  139 => 11,  136 => 8,  134 => 7,  132 => 5,  130 => 4,  128 => 3,  19 => 1,);
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
      <br/>
      <a style=\"font-size: 20px\" href=\"/search/query:anxiety\">Anxiety</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:depression\">Depression</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:parkinson\">Parkinson's</a>
      <a style=\"padding-left: 20px; font-size: 20px\" href=\"/search/query:schizophrenia\">Schizophrenia</a>
      <br/>
      <br/>
      {% include 'partials/simplesearch_searchbox.html.twig' %}
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
", "blog.html.twig", "/mnt/tank/home/groups/hcht/web/user/themes/gateway/templates/blog.html.twig");
    }
}
