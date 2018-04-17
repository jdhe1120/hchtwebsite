<?php

/* slideshow.html.twig */
class __TwigTemplate_f62b68f363cc7ed1d125ed61dc9d5d4d05cfad886d456088ae39c4c22d432443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "slideshow.html.twig", 1);
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
        echo "<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-";
        // line 6
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fullwidth", array())) {
            echo "8";
        } else {
            echo "12";
        }
        echo " columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              ";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "
            </h2>
          </header>

          <div class=\"entry-content\">
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "progressbar", array())) {
            // line 17
            echo "            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            <div class=\"rescue-column rescue-all\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "progressbar", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                // line 20
                echo "                ";
                if (($this->getAttribute($context["bar"], "position", array()) == "top")) {
                    // line 21
                    echo "               <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                    echo $this->getAttribute($context["bar"], "percent", array());
                    echo "%\">
                  <div class=\"rescue-progressbar-title\" style=\"background: ";
                    // line 22
                    echo $this->getAttribute($context["bar"], "background", array());
                    echo ";\"><span>";
                    echo $this->getAttribute($context["bar"], "title", array());
                    echo "</span></div>
                  <div class=\"rescue-progressbar-bar\" style=\"background: ";
                    // line 23
                    echo $this->getAttribute($context["bar"], "background", array());
                    echo ";\"></div>
                  <div class=\"rescue-progress-bar-percent\">";
                    // line 24
                    echo $this->getAttribute($context["bar"], "percent", array());
                    echo "%</div>
               </div>
               ";
                }
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </div>
            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggles", array())) {
            // line 33
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                // line 34
                echo "                ";
                if (($this->getAttribute($context["toggle"], "position", array()) == "top")) {
                    // line 35
                    echo "                  <div class=\"rescue-toggle  rescue-all\">
                    <h3 class=\"rescue-toggle-trigger\">";
                    // line 36
                    echo $this->getAttribute($context["toggle"], "title", array());
                    echo "</h3>
                    <div class=\"rescue-toggle-container\">";
                    // line 37
                    echo $this->getAttribute($context["toggle"], "description", array());
                    echo "</div>
                  </div>
                ";
                }
                // line 40
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            <hr class=\"rescue-spacing \" style=\"height: 30px\">
            ";
        }
        // line 43
        echo "            ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            <div class=\"entry-content\">
              ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "progressbar", array())) {
            // line 46
            echo "              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              <div class=\"rescue-column rescue-all\">
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "progressbar", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                // line 49
                echo "                  ";
                if (($this->getAttribute($context["bar"], "position", array()) == "bottom")) {
                    // line 50
                    echo "                 <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                    echo $this->getAttribute($context["bar"], "percent", array());
                    echo "%\">
                    <div class=\"rescue-progressbar-title\" style=\"background: ";
                    // line 51
                    echo $this->getAttribute($context["bar"], "background", array());
                    echo ";\"><span>";
                    echo $this->getAttribute($context["bar"], "title", array());
                    echo "</span></div>
                    <div class=\"rescue-progressbar-bar\" style=\"background: ";
                    // line 52
                    echo $this->getAttribute($context["bar"], "background", array());
                    echo ";\"></div>
                    <div class=\"rescue-progress-bar-percent\">";
                    // line 53
                    echo $this->getAttribute($context["bar"], "percent", array());
                    echo "%</div>
                 </div>
                 ";
                }
                // line 56
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "              </div>
              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              ";
        }
        // line 60
        echo "              ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggles", array())) {
            // line 61
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                // line 62
                echo "                  ";
                if (($this->getAttribute($context["toggle"], "position", array()) == "bottom")) {
                    // line 63
                    echo "                    <div class=\"rescue-toggle  rescue-all\">
                      <h3 class=\"rescue-toggle-trigger\">";
                    // line 64
                    echo $this->getAttribute($context["toggle"], "title", array());
                    echo "</h3>
                      <div class=\"rescue-toggle-container\">";
                    // line 65
                    echo $this->getAttribute($context["toggle"], "description", array());
                    echo "</div>
                    </div>
                  ";
                }
                // line 68
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "              <hr class=\"rescue-spacing \" style=\"height: 30px\">
              ";
        }
        // line 71
        echo "          </div>
          <div id=\"slideshow\">
            <div class=\"slideshow-container\">
              <div class=\"mySlides fade\">
                <div class=\"numbertext\">1 / 2</div>
                <img src=\"";
        // line 76
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/4.jpg\" style=\"width:100%\">
                <div class=\"text\"></div>
              </div>

              <div class=\"mySlides fade\">
                <div class=\"numbertext\">2 / 2</div>
                <img src=\"";
        // line 82
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/5.jpg\" style=\"width:100%\">
                <div class=\"text\"></div>
              </div>

              <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
              <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
            </div>

            <br>

            <div style=\"text-align:center\">
              <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
              <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
            </div>
          </div>
        </article>
      </main>
    </div>
    ";
        // line 100
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fullwidth", array())) {
            // line 101
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <aside class=\"widget widget_categories\">
        <h1 class=\"widget-title\">Past Years</h1>
        <ul>
          <li class=\"cat-item cat-item-1\"><a href=\"/~hcht/speaker-series/2017-speaker-series\">2017 Speaker Series</a></li>
        </ul>
      </aside>
    </div>
    ";
        }
        // line 110
        echo "  </div>
</div>

<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
  showSlides(slideIndex += n);
  }

  function currentSlide(n) {
  showSlides(slideIndex = n);
  }

  function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName(\"mySlides\");
  var dots = document.getElementsByClassName(\"dot\");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = \"none\";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(\" active\", \"\");
  }
  slides[slideIndex-1].style.display = \"block\";
  dots[slideIndex-1].className += \" active\";
  }
</script>

";
    }

    public function getTemplateName()
    {
        return "slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 110,  260 => 101,  258 => 100,  237 => 82,  228 => 76,  221 => 71,  217 => 69,  211 => 68,  205 => 65,  201 => 64,  198 => 63,  195 => 62,  190 => 61,  187 => 60,  182 => 57,  176 => 56,  170 => 53,  166 => 52,  160 => 51,  155 => 50,  152 => 49,  148 => 48,  144 => 46,  142 => 45,  136 => 43,  132 => 41,  126 => 40,  120 => 37,  116 => 36,  113 => 35,  110 => 34,  105 => 33,  103 => 32,  100 => 31,  95 => 28,  89 => 27,  83 => 24,  79 => 23,  73 => 22,  68 => 21,  65 => 20,  61 => 19,  57 => 17,  55 => 16,  47 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              {{ page.header.title }}
            </h2>
          </header>

          <div class=\"entry-content\">
            {% if page.header.progressbar %}
            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            <div class=\"rescue-column rescue-all\">
            {% for bar in page.header.progressbar %}
                {% if bar.position == 'top' %}
               <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"{{ bar.percent }}%\">
                  <div class=\"rescue-progressbar-title\" style=\"background: {{ bar.background }};\"><span>{{ bar.title }}</span></div>
                  <div class=\"rescue-progressbar-bar\" style=\"background: {{ bar.background }};\"></div>
                  <div class=\"rescue-progress-bar-percent\">{{ bar.percent }}%</div>
               </div>
               {% endif %}
            {% endfor %}
            </div>
            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            {% endif %}

            {% if page.header.toggles %}
              {% for toggle in page.header.toggles %}
                {% if toggle.position == 'top' %}
                  <div class=\"rescue-toggle  rescue-all\">
                    <h3 class=\"rescue-toggle-trigger\">{{ toggle.title }}</h3>
                    <div class=\"rescue-toggle-container\">{{ toggle.description }}</div>
                  </div>
                {% endif %}
              {% endfor %}
            <hr class=\"rescue-spacing \" style=\"height: 30px\">
            {% endif %}
            {{ page.content }}
            <div class=\"entry-content\">
              {% if page.header.progressbar %}
              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              <div class=\"rescue-column rescue-all\">
              {% for bar in page.header.progressbar %}
                  {% if bar.position == 'bottom' %}
                 <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"{{ bar.percent }}%\">
                    <div class=\"rescue-progressbar-title\" style=\"background: {{ bar.background }};\"><span>{{ bar.title }}</span></div>
                    <div class=\"rescue-progressbar-bar\" style=\"background: {{ bar.background }};\"></div>
                    <div class=\"rescue-progress-bar-percent\">{{ bar.percent }}%</div>
                 </div>
                 {% endif %}
              {% endfor %}
              </div>
              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              {% endif %}
              {% if page.header.toggles %}
                {% for toggle in page.header.toggles %}
                  {% if toggle.position == 'bottom' %}
                    <div class=\"rescue-toggle  rescue-all\">
                      <h3 class=\"rescue-toggle-trigger\">{{ toggle.title }}</h3>
                      <div class=\"rescue-toggle-container\">{{ toggle.description }}</div>
                    </div>
                  {% endif %}
                {% endfor %}
              <hr class=\"rescue-spacing \" style=\"height: 30px\">
              {% endif %}
          </div>
          <div id=\"slideshow\">
            <div class=\"slideshow-container\">
              <div class=\"mySlides fade\">
                <div class=\"numbertext\">1 / 2</div>
                <img src=\"{{ theme_url }}/img/4.jpg\" style=\"width:100%\">
                <div class=\"text\"></div>
              </div>

              <div class=\"mySlides fade\">
                <div class=\"numbertext\">2 / 2</div>
                <img src=\"{{ theme_url }}/img/5.jpg\" style=\"width:100%\">
                <div class=\"text\"></div>
              </div>

              <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
              <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
            </div>

            <br>

            <div style=\"text-align:center\">
              <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
              <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
            </div>
          </div>
        </article>
      </main>
    </div>
    {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <aside class=\"widget widget_categories\">
        <h1 class=\"widget-title\">Past Years</h1>
        <ul>
          <li class=\"cat-item cat-item-1\"><a href=\"/~hcht/speaker-series/2017-speaker-series\">2017 Speaker Series</a></li>
        </ul>
      </aside>
    </div>
    {% endif %}
  </div>
</div>

<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
  showSlides(slideIndex += n);
  }

  function currentSlide(n) {
  showSlides(slideIndex = n);
  }

  function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName(\"mySlides\");
  var dots = document.getElementsByClassName(\"dot\");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = \"none\";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(\" active\", \"\");
  }
  slides[slideIndex-1].style.display = \"block\";
  dots[slideIndex-1].className += \" active\";
  }
</script>

{% endblock %}
", "slideshow.html.twig", "/mnt/tank/home/groups/hcht/web/user/themes/gateway/templates/slideshow.html.twig");
    }
}
