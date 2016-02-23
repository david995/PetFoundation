<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f00d35714eef09dd7f2b2100f95d73a57b68c5f3590db3523342b65a1982850d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1ea03452624a30056f89e26873437934df2d47dae3da0a0936f9b65ed9d7383c = $this->env->getExtension("native_profiler");
        $__internal_1ea03452624a30056f89e26873437934df2d47dae3da0a0936f9b65ed9d7383c->enter($__internal_1ea03452624a30056f89e26873437934df2d47dae3da0a0936f9b65ed9d7383c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea03452624a30056f89e26873437934df2d47dae3da0a0936f9b65ed9d7383c->leave($__internal_1ea03452624a30056f89e26873437934df2d47dae3da0a0936f9b65ed9d7383c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae5477396100d445b5322222ba43295e17b4a6fd85e4a8b4530bed401886adf7 = $this->env->getExtension("native_profiler");
        $__internal_ae5477396100d445b5322222ba43295e17b4a6fd85e4a8b4530bed401886adf7->enter($__internal_ae5477396100d445b5322222ba43295e17b4a6fd85e4a8b4530bed401886adf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae5477396100d445b5322222ba43295e17b4a6fd85e4a8b4530bed401886adf7->leave($__internal_ae5477396100d445b5322222ba43295e17b4a6fd85e4a8b4530bed401886adf7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08c06db7979e8ca73659cc5d6ae5f0dc9dfced6f6445c5b91f96d411424fdc83 = $this->env->getExtension("native_profiler");
        $__internal_08c06db7979e8ca73659cc5d6ae5f0dc9dfced6f6445c5b91f96d411424fdc83->enter($__internal_08c06db7979e8ca73659cc5d6ae5f0dc9dfced6f6445c5b91f96d411424fdc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08c06db7979e8ca73659cc5d6ae5f0dc9dfced6f6445c5b91f96d411424fdc83->leave($__internal_08c06db7979e8ca73659cc5d6ae5f0dc9dfced6f6445c5b91f96d411424fdc83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_075a1ad3bed9a022b90262730145fc71293382b96f9b5b282fe5cd270acf9942 = $this->env->getExtension("native_profiler");
        $__internal_075a1ad3bed9a022b90262730145fc71293382b96f9b5b282fe5cd270acf9942->enter($__internal_075a1ad3bed9a022b90262730145fc71293382b96f9b5b282fe5cd270acf9942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_075a1ad3bed9a022b90262730145fc71293382b96f9b5b282fe5cd270acf9942->leave($__internal_075a1ad3bed9a022b90262730145fc71293382b96f9b5b282fe5cd270acf9942_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
