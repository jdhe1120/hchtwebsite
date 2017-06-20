<?php

/* partials/footer.html.twig */
class __TwigTemplate_8c04c4790a29440232b44a8da59aab96822bba4fbcae3e39abb4d21a3fedd83e extends Twig_Template
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
        echo "<div class=\"footer-wrap\">
   <div class=\"row\">
      <div class=\"large-12 columns\">
         <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
            <div class=\"row\">
               <div class=\"large-4 columns\">
                  <aside id=\"text-5\" class=\"widget widget_text\">
                    ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "widget", array()), "title", array())) {
            // line 9
            echo "                     <h1 class=\"widget-title\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "widget", array()), "title", array());
            echo "</h1>
                    ";
        }
        // line 11
        echo "                     <div class=\"textwidget\">
                       ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "widget", array()), "description", array())) {
            // line 13
            echo "                        <p>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "widget", array()), "description", array());
            echo "</p>
                      ";
        }
        // line 15
        echo "                        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "widget", array()), "link", array()), "url", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "widget", array()), "link", array()), "text", array()))) {
            // line 16
            echo "                        <p><a class=\"more-link\" href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "widget", array()), "link", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "widget", array()), "link", array()), "text", array());
            echo "</a></p>
                        ";
        }
        // line 18
        echo "                     </div>
                  </aside>
               </div>
               ";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 22
            echo "               <div class=\"large-4 columns\">
                  <aside id=\"recent-posts-4\" class=\"widget widget_recent_entries\">
                      <h1 class=\"widget-title\">Mailing List</h1>
                      <div class=\"textwidget\">
                        Sign up for our mailing list <a href=\"https://lists.hcs.harvard.edu/mailman/listinfo/HealingThoughts-list\">here</a>!
                      </div>
                  </aside>
               </div>
               ";
        }
        // line 31
        echo "               <div class=\"large-4 columns\">
                 ";
        // line 32
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array())) {
            // line 33
            echo "                  <aside id=\"text-6\" class=\"widget widget_text\">
                     <h1 class=\"widget-title\">Keep In Touch</h1>
                     <div class=\"textwidget\">
                       ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "                         <a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\"><i class=\"fa fa-";
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></i></a>
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                     </div>
                  </aside>
                  ";
        }
        // line 42
        echo "                  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 43
            echo "                  <aside id=\"search-4\" class=\"widget widget_search search-form\">
                     <h1 class=\"widget-title\">Find What You Need</h1>
                         ";
            // line 45
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/footer.html.twig", 45)->display($context);
            // line 46
            echo "                  </aside>
                   ";
        }
        // line 48
        echo "               </div>
            </div>
            ";
        // line 50
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array())) {
            // line 51
            echo "            <div class=\"site-info\">
               <p>
                  ";
            // line 53
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
            echo "
               </p>
            </div>
            ";
        }
        // line 57
        echo "         </footer>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 57,  129 => 53,  125 => 51,  123 => 50,  119 => 48,  115 => 46,  113 => 45,  109 => 43,  106 => 42,  101 => 39,  90 => 37,  86 => 36,  81 => 33,  79 => 32,  76 => 31,  65 => 22,  63 => 21,  58 => 18,  50 => 16,  47 => 15,  41 => 13,  39 => 12,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-wrap\">
   <div class=\"row\">
      <div class=\"large-12 columns\">
         <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
            <div class=\"row\">
               <div class=\"large-4 columns\">
                  <aside id=\"text-5\" class=\"widget widget_text\">
                    {% if site.footer.widget.title %}
                     <h1 class=\"widget-title\">{{ site.footer.widget.title }}</h1>
                    {% endif %}
                     <div class=\"textwidget\">
                       {% if site.footer.widget.description %}
                        <p>{{ site.footer.widget.description }}</p>
                      {% endif %}
                        {% if site.footer.widget.link.url or site.footer.widget.link.text %}
                        <p><a class=\"more-link\" href=\"{{ site.footer.widget.link.url }}\">{{ site.footer.widget.link.text }}</a></p>
                        {% endif %}
                     </div>
                  </aside>
               </div>
               {% if config.plugins.archives.enabled %}
               <div class=\"large-4 columns\">
                  <aside id=\"recent-posts-4\" class=\"widget widget_recent_entries\">
                      <h1 class=\"widget-title\">Mailing List</h1>
                      <div class=\"textwidget\">
                        Sign up for our mailing list <a href=\"https://lists.hcs.harvard.edu/mailman/listinfo/HealingThoughts-list\">here</a>!
                      </div>
                  </aside>
               </div>
               {% endif %}
               <div class=\"large-4 columns\">
                 {% if site.social %}
                  <aside id=\"text-6\" class=\"widget widget_text\">
                     <h1 class=\"widget-title\">Keep In Touch</h1>
                     <div class=\"textwidget\">
                       {% for item in site.social %}
                         <a href=\"{{ item.url }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a>
                       {% endfor %}
                     </div>
                  </aside>
                  {% endif %}
                  {% if config.plugins.simplesearch.enabled %}
                  <aside id=\"search-4\" class=\"widget widget_search search-form\">
                     <h1 class=\"widget-title\">Find What You Need</h1>
                         {% include 'partials/simplesearch_searchbox.html.twig' %}
                  </aside>
                   {% endif %}
               </div>
            </div>
            {% if site.copyright %}
            <div class=\"site-info\">
               <p>
                  {{ site.copyright }}
               </p>
            </div>
            {% endif %}
         </footer>
      </div>
   </div>
</div>
", "partials/footer.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/HCHT/hchtwebsite/user/themes/gateway/templates/partials/footer.html.twig");
    }
}
