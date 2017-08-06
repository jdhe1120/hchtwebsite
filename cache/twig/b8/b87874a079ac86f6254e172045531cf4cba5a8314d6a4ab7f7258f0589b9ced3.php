<?php

/* modular/default.html.twig */
class __TwigTemplate_df37e1c29285f7bc8fbdba42ec74133acd0cb86b126626d573eb09a5a103b08a extends Twig_Template
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
        echo "<div class=\"row ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
   <div class=\"large-12 columns\">
      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
      <div class=\"grav-youtube\"><iframe src=\"https://www.youtube.com/embed/RhE0XGSZMsU\" frameborder=\"0\" allowfullscreen=\"\"></iframe></div>

      </div>
      <div class=\"rescue-column rescue-one-half rescue-column-last  rescue-all\">
         ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
         <p>
           ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 11
            echo "           <a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "         </p>
      </div>
   </div>
   <!-- .large-12 -->
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  39 => 11,  35 => 10,  30 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row {{ page.header.class }}\">
   <div class=\"large-12 columns\">
      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
      <div class=\"grav-youtube\"><iframe src=\"https://www.youtube.com/embed/RhE0XGSZMsU\" frameborder=\"0\" allowfullscreen=\"\"></iframe></div>

      </div>
      <div class=\"rescue-column rescue-one-half rescue-column-last  rescue-all\">
         {{ page.content }}
         <p>
           {% for button in page.header.buttons %}
           <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
           {% endfor %}
         </p>
      </div>
   </div>
   <!-- .large-12 -->
</div>
", "modular/default.html.twig", "/mnt/tank/home/groups/hcht/web/user/themes/gateway/templates/modular/default.html.twig");
    }
}
