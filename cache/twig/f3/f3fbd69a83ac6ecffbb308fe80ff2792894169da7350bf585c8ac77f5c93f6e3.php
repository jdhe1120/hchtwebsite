<?php

/* partials/relatedpages.html.twig */
class __TwigTemplate_2871119f3aa5ae7b45aaca6bf44d88799bfde8282fe41de02ae625e7636c812f extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related_pages"]) ? $context["related_pages"] : null));
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
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 2
            $context["related"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "pages", array(), "array"), "get", array(0 => $context["related_path"]), "method");
            // line 3
            if ((isset($context["related"]) ? $context["related"] : null)) {
                // line 4
                echo "<div class=\"jp-relatedposts-post jp-relatedposts-post";
                echo $this->getAttribute($context["loop"], "index", array());
                echo " jp-relatedposts-post-thumbs\" data-post-id=\"";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" data-post-format=\"false\">
  <a class=\"jp-relatedposts-post-a\" href=\"";
                // line 5
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "url", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                echo "\" rel=\"nofollow\">
    ";
                // line 6
                if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["related"]) ? $context["related"] : null), "media", array()), "images", array()))) {
                    // line 7
                    echo "    ";
                    echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["related"]) ? $context["related"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 241, 1 => 138), "method"), "html", array(0 => "", 1 => "", 2 => "jp-relatedposts-post-img"), "method");
                    echo "
    ";
                }
                // line 9
                echo "  </a>
  <h4 class=\"jp-relatedposts-post-title\">
    <a class=\"jp-relatedposts-post-a\" href=\"";
                // line 11
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "url", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                echo "\" rel=\"nofollow\">
      ";
                // line 12
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                echo "
    </a>
  </h4>

  ";
                // line 16
                if ($this->getAttribute($this->getAttribute((isset($context["related"]) ? $context["related"] : null), "taxonomy", array()), "category", array())) {
                    // line 17
                    echo "  <p class=\"jp-relatedposts-post-context\">
    ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["related"]) ? $context["related"] : null), "taxonomy", array()), "category", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 19
                        echo "    In \"";
                        echo twig_capitalize_string_filter($this->env, $context["category"]);
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo ", ";
                        }
                        echo "\"
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "  </p>
  ";
                }
                // line 23
                echo "
</div>
";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 23,  120 => 21,  100 => 19,  83 => 18,  80 => 17,  78 => 16,  71 => 12,  65 => 11,  61 => 9,  55 => 7,  53 => 6,  47 => 5,  40 => 4,  38 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for related_path, score in related_pages %}
{% set related = grav['pages'].get(related_path) %}
{% if related %}
<div class=\"jp-relatedposts-post jp-relatedposts-post{{ loop.index }} jp-relatedposts-post-thumbs\" data-post-id=\"{{ loop.index }}\" data-post-format=\"false\">
  <a class=\"jp-relatedposts-post-a\" href=\"{{ related.url }}\" title=\"{{ related.title }}\" rel=\"nofollow\">
    {% if related.media.images|first %}
    {{ related.media.images|first.cropZoom(241,138).html('', '', 'jp-relatedposts-post-img') }}
    {% endif %}
  </a>
  <h4 class=\"jp-relatedposts-post-title\">
    <a class=\"jp-relatedposts-post-a\" href=\"{{ related.url }}\" title=\"{{ related.title }}\" rel=\"nofollow\">
      {{ related.title }}
    </a>
  </h4>

  {% if related.taxonomy.category %}
  <p class=\"jp-relatedposts-post-context\">
    {% for category in related.taxonomy.category %}
    In \"{{ category|capitalize }}{% if not loop.last %}, {% endif %}\"
    {% endfor %}
  </p>
  {% endif %}

</div>
{% endif %}
{% endfor %}
", "partials/relatedpages.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/MHRG/mhrgwebsite/user/themes/gateway/templates/partials/relatedpages.html.twig");
    }
}
