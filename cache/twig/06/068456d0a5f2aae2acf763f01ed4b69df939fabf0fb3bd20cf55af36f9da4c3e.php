<?php

/* slideshow.html.twig */
class __TwigTemplate_1271a892d8de0070139de8d1dab3da49fcde66510505dd465d49274d054c2863 extends Twig_Template
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

          <div id=\"slideshow\">
            <div class=\"slideshow-container\">
              <div class=\"mySlides fade\">
                <div class=\"numbertext\">1 / 2</div>
                <img src=\"";
        // line 19
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/hero-bg.jpg\" style=\"width:100%\">
                <div class=\"text\"></div>
              </div>

              <div class=\"mySlides fade\">
                <div class=\"numbertext\">2 / 2</div>
                <img src=\"";
        // line 25
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/background.jpg\" style=\"width:100%\">
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

          <div class=\"entry-content\">
            ";
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "progressbar", array())) {
            // line 43
            echo "            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            <div class=\"rescue-column rescue-all\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "progressbar", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                // line 46
                echo "                ";
                if (($this->getAttribute($context["bar"], "position", array()) == "top")) {
                    // line 47
                    echo "               <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                    echo $this->getAttribute($context["bar"], "percent", array());
                    echo "%\">
                  <div class=\"rescue-progressbar-title\" style=\"background: ";
                    // line 48
                    echo $this->getAttribute($context["bar"], "background", array());
                    echo ";\"><span>";
                    echo $this->getAttribute($context["bar"], "title", array());
                    echo "</span></div>
                  <div class=\"rescue-progressbar-bar\" style=\"background: ";
                    // line 49
                    echo $this->getAttribute($context["bar"], "background", array());
                    echo ";\"></div>
                  <div class=\"rescue-progress-bar-percent\">";
                    // line 50
                    echo $this->getAttribute($context["bar"], "percent", array());
                    echo "%</div>
               </div>
               ";
                }
                // line 53
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </div>
            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggles", array())) {
            // line 59
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                // line 60
                echo "                ";
                if (($this->getAttribute($context["toggle"], "position", array()) == "top")) {
                    // line 61
                    echo "                  <div class=\"rescue-toggle  rescue-all\">
                    <h3 class=\"rescue-toggle-trigger\">";
                    // line 62
                    echo $this->getAttribute($context["toggle"], "title", array());
                    echo "</h3>
                    <div class=\"rescue-toggle-container\">";
                    // line 63
                    echo $this->getAttribute($context["toggle"], "description", array());
                    echo "</div>
                  </div>
                ";
                }
                // line 66
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            <hr class=\"rescue-spacing \" style=\"height: 30px\">
            ";
        }
        // line 69
        echo "            ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            <div class=\"entry-content\">
              ";
        // line 71
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "progressbar", array())) {
            // line 72
            echo "              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              <div class=\"rescue-column rescue-all\">
              ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "progressbar", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                // line 75
                echo "                  ";
                if (($this->getAttribute($context["bar"], "position", array()) == "bottom")) {
                    // line 76
                    echo "                 <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                    echo $this->getAttribute($context["bar"], "percent", array());
                    echo "%\">
                    <div class=\"rescue-progressbar-title\" style=\"background: ";
                    // line 77
                    echo $this->getAttribute($context["bar"], "background", array());
                    echo ";\"><span>";
                    echo $this->getAttribute($context["bar"], "title", array());
                    echo "</span></div>
                    <div class=\"rescue-progressbar-bar\" style=\"background: ";
                    // line 78
                    echo $this->getAttribute($context["bar"], "background", array());
                    echo ";\"></div>
                    <div class=\"rescue-progress-bar-percent\">";
                    // line 79
                    echo $this->getAttribute($context["bar"], "percent", array());
                    echo "%</div>
                 </div>
                 ";
                }
                // line 82
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "              </div>
              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              ";
        }
        // line 86
        echo "              ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggles", array())) {
            // line 87
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                // line 88
                echo "                  ";
                if (($this->getAttribute($context["toggle"], "position", array()) == "bottom")) {
                    // line 89
                    echo "                    <div class=\"rescue-toggle  rescue-all\">
                      <h3 class=\"rescue-toggle-trigger\">";
                    // line 90
                    echo $this->getAttribute($context["toggle"], "title", array());
                    echo "</h3>
                      <div class=\"rescue-toggle-container\">";
                    // line 91
                    echo $this->getAttribute($context["toggle"], "description", array());
                    echo "</div>
                    </div>
                  ";
                }
                // line 94
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "              <hr class=\"rescue-spacing \" style=\"height: 30px\">
              ";
        }
        // line 97
        echo "          </div>
        </article>
      </main>
    </div>
    ";
        // line 101
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fullwidth", array())) {
            // line 102
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 104
            $this->loadTemplate("partials/sidebar.html.twig", "slideshow.html.twig", 104)->display($context);
            // line 105
            echo "      </div>
    </div>
    ";
        }
        // line 108
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
        return array (  272 => 108,  267 => 105,  265 => 104,  261 => 102,  259 => 101,  253 => 97,  249 => 95,  243 => 94,  237 => 91,  233 => 90,  230 => 89,  227 => 88,  222 => 87,  219 => 86,  214 => 83,  208 => 82,  202 => 79,  198 => 78,  192 => 77,  187 => 76,  184 => 75,  180 => 74,  176 => 72,  174 => 71,  168 => 69,  164 => 67,  158 => 66,  152 => 63,  148 => 62,  145 => 61,  142 => 60,  137 => 59,  135 => 58,  132 => 57,  127 => 54,  121 => 53,  115 => 50,  111 => 49,  105 => 48,  100 => 47,  97 => 46,  93 => 45,  89 => 43,  87 => 42,  67 => 25,  58 => 19,  47 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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

          <div id=\"slideshow\">
            <div class=\"slideshow-container\">
              <div class=\"mySlides fade\">
                <div class=\"numbertext\">1 / 2</div>
                <img src=\"{{ theme_url }}/img/hero-bg.jpg\" style=\"width:100%\">
                <div class=\"text\"></div>
              </div>

              <div class=\"mySlides fade\">
                <div class=\"numbertext\">2 / 2</div>
                <img src=\"{{ theme_url }}/img/background.jpg\" style=\"width:100%\">
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
        </article>
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
", "slideshow.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/HCHT/hchtwebsite/user/themes/gateway/templates/slideshow.html.twig");
    }
}
