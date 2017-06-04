<?php

/* forms/form.html.twig */
class __TwigTemplate_7bd3cb3bdf91b6e0f8960fbfc5dd2a81f3464977835abbe4ddd1d03d6ec7fb0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 1);
        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'button_classes' => array($this, 'block_button_classes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form_classes($context, array $blocks = array())
    {
        // line 3
        echo "  class=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array());
        echo " contact-form commentsblock\"
";
    }

    // line 6
    public function block_button_classes($context, array $blocks = array())
    {
        // line 7
        echo "  class=\"";
        echo (($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array()), "button")) : ("button"));
        echo " pushbutton-wide\"
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'forms/default/form.html.twig' %}
{% block form_classes %}
  class=\"{{ form.classes }} contact-form commentsblock\"
{% endblock %}

{% block button_classes %}
  class=\"{{ button.classes|default('button') }} pushbutton-wide\"
{% endblock %}
", "forms/form.html.twig", "/Users/jdhe1120/Documents/Harvard/Freshman/Clubs/HCHT/New Website/user/themes/gateway/templates/forms/form.html.twig");
    }
}
