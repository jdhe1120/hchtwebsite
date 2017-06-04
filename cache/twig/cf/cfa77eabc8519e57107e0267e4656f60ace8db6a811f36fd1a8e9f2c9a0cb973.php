<?php

/* form.html.twig */
class __TwigTemplate_de32dc6fc0d111528174603ecd9d98f892c34c3367c00bd4966c2c96e9c0a5a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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

            <form name=\"my-nice-form\" action=\"https://formspree.io/jhe1120@gmail.com\" method=\"POST\" id=\"my-nice-form\" class=\" contact-form commentsblock\">

              <div class=\"form-field  \">
                <div class=\"form-label\">
                  <label class=\"inline\">
                    Name
                    <span class=\"required\">*</span>
                  </label>
                </div>
                <div class=\"form-data\" data-grav-field=\"text\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                  <div class=\"form-input-wrapper  \">
                    <input name=\"data[name]\" value=\"\" type=\"text\" placeholder=\"Enter your name\" autofocus=\"autofocus\" autocomplete=\"on\" required=\"required\">
                  </div>


                </div>
              </div>

              <div class=\"form-field  \">
                <div class=\"form-label\">
                  <label class=\"inline\">
                    Email
                    <span class=\"required\">*</span>
                  </label>
                </div>
                <div class=\"form-data\" data-grav-field=\"text\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                  <div class=\"form-input-wrapper  \">
                    <input name=\"data[email]\" value=\"\" type=\"text\" placeholder=\"Enter your email address\" required=\"required\">
                  </div>


                </div>
              </div>

              <div class=\"form-field  \">
                <div class=\"form-label\">
                  <label class=\"inline\">
                    Message
                    <span class=\"required\">*</span>
                  </label>
                </div>
                <div class=\"form-data\" data-grav-field=\"textarea\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                  <div class=\"form-textarea-wrapper long\">
                    <textarea name=\"data[message]\" class=\"input\" placeholder=\"Enter your message\" required=\"required\"></textarea>
                  </div>

                </div>
              </div>

              <input type=\"hidden\" name=\"__form-name__\" value=\"my-nice-form\">

              <div class=\"buttons\">

                <button class=\"btn pushbutton-wide\" type=\"submit\" value=\"Send\">
                  Submit »
                </button>

              </div>

              <input type=\"hidden\" name=\"form-nonce\" value=\"Send\">
            </form>



          </div>
        </article>
      </main>
    </div>
    <!-- ";
        // line 84
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fullwidth", array())) {
            // line 85
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 87
            $this->loadTemplate("partials/sidebar.html.twig", "form.html.twig", 87)->display($context);
            // line 88
            echo "      </div>
    </div>
    ";
        }
        // line 90
        echo " -->
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 90,  131 => 88,  129 => 87,  125 => 85,  123 => 84,  47 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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

            <form name=\"my-nice-form\" action=\"https://formspree.io/jhe1120@gmail.com\" method=\"POST\" id=\"my-nice-form\" class=\" contact-form commentsblock\">

              <div class=\"form-field  \">
                <div class=\"form-label\">
                  <label class=\"inline\">
                    Name
                    <span class=\"required\">*</span>
                  </label>
                </div>
                <div class=\"form-data\" data-grav-field=\"text\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                  <div class=\"form-input-wrapper  \">
                    <input name=\"data[name]\" value=\"\" type=\"text\" placeholder=\"Enter your name\" autofocus=\"autofocus\" autocomplete=\"on\" required=\"required\">
                  </div>


                </div>
              </div>

              <div class=\"form-field  \">
                <div class=\"form-label\">
                  <label class=\"inline\">
                    Email
                    <span class=\"required\">*</span>
                  </label>
                </div>
                <div class=\"form-data\" data-grav-field=\"text\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                  <div class=\"form-input-wrapper  \">
                    <input name=\"data[email]\" value=\"\" type=\"text\" placeholder=\"Enter your email address\" required=\"required\">
                  </div>


                </div>
              </div>

              <div class=\"form-field  \">
                <div class=\"form-label\">
                  <label class=\"inline\">
                    Message
                    <span class=\"required\">*</span>
                  </label>
                </div>
                <div class=\"form-data\" data-grav-field=\"textarea\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                  <div class=\"form-textarea-wrapper long\">
                    <textarea name=\"data[message]\" class=\"input\" placeholder=\"Enter your message\" required=\"required\"></textarea>
                  </div>

                </div>
              </div>

              <input type=\"hidden\" name=\"__form-name__\" value=\"my-nice-form\">

              <div class=\"buttons\">

                <button class=\"btn pushbutton-wide\" type=\"submit\" value=\"Send\">
                  Submit »
                </button>

              </div>

              <input type=\"hidden\" name=\"form-nonce\" value=\"Send\">
            </form>



          </div>
        </article>
      </main>
    </div>
    <!-- {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div>
    {% endif %} -->
  </div>
</div>
{% endblock %}
", "form.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/HCHT/hchtwebsite/user/themes/gateway/templates/form.html.twig");
    }
}
