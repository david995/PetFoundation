<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f00d35714eef09dd7f2b2100f95d73a57b68c5f3590db3523342b65a1982850d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aee47ba1430a99f62b958b6a98aff880f042d88afa6dbddaa73b50ecee3b039 = $this->env->getExtension("native_profiler");
        $__internal_0aee47ba1430a99f62b958b6a98aff880f042d88afa6dbddaa73b50ecee3b039->enter($__internal_0aee47ba1430a99f62b958b6a98aff880f042d88afa6dbddaa73b50ecee3b039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aee47ba1430a99f62b958b6a98aff880f042d88afa6dbddaa73b50ecee3b039->leave($__internal_0aee47ba1430a99f62b958b6a98aff880f042d88afa6dbddaa73b50ecee3b039_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b5831bc3a461c3946c4a2cf410cdcabe9494f00c32d5917e7f5f7e875ecf5a0 = $this->env->getExtension("native_profiler");
        $__internal_2b5831bc3a461c3946c4a2cf410cdcabe9494f00c32d5917e7f5f7e875ecf5a0->enter($__internal_2b5831bc3a461c3946c4a2cf410cdcabe9494f00c32d5917e7f5f7e875ecf5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b5831bc3a461c3946c4a2cf410cdcabe9494f00c32d5917e7f5f7e875ecf5a0->leave($__internal_2b5831bc3a461c3946c4a2cf410cdcabe9494f00c32d5917e7f5f7e875ecf5a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_466db177a8ed518f04c4d1ff1203b1dcccb10eddb252bf4f01658c97ed1f2f1b = $this->env->getExtension("native_profiler");
        $__internal_466db177a8ed518f04c4d1ff1203b1dcccb10eddb252bf4f01658c97ed1f2f1b->enter($__internal_466db177a8ed518f04c4d1ff1203b1dcccb10eddb252bf4f01658c97ed1f2f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_466db177a8ed518f04c4d1ff1203b1dcccb10eddb252bf4f01658c97ed1f2f1b->leave($__internal_466db177a8ed518f04c4d1ff1203b1dcccb10eddb252bf4f01658c97ed1f2f1b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cb7920b846631f594c0ae0df1125750e7d353b107150aa231ad38207c51c033 = $this->env->getExtension("native_profiler");
        $__internal_8cb7920b846631f594c0ae0df1125750e7d353b107150aa231ad38207c51c033->enter($__internal_8cb7920b846631f594c0ae0df1125750e7d353b107150aa231ad38207c51c033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8cb7920b846631f594c0ae0df1125750e7d353b107150aa231ad38207c51c033->leave($__internal_8cb7920b846631f594c0ae0df1125750e7d353b107150aa231ad38207c51c033_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
