<?php

/* partials/youtube.html.twig */
class __TwigTemplate_be43da8aafa591d59a533535f80147a88c4bbe5cd05c9f535a8e8e83682c262b extends Twig_Template
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
        echo "<div class=\"grav-youtube\">
    <iframe src=\"";
        // line 2
        echo $this->env->getExtension('Grav\Plugin\Youtube\Twig\YoutubeTwigExtension')->embedUrl((isset($context["video_id"]) ? $context["video_id"] : null), (isset($context["player_parameters"]) ? $context["player_parameters"] : null), (isset($context["privacy_enhanced_mode"]) ? $context["privacy_enhanced_mode"] : null));
        echo "\" frameborder=\"0\" allowfullscreen></iframe>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"grav-youtube\">
    <iframe src=\"{{- youtube_embed_url(video_id, player_parameters, privacy_enhanced_mode) -}}\" frameborder=\"0\" allowfullscreen></iframe>
</div>
", "partials/youtube.html.twig", "/Users/jdhe1120/Documents/Harvard/Sophomore/Clubs/HCHT/hchtwebsite/user/plugins/youtube/templates/partials/youtube.html.twig");
    }
}
