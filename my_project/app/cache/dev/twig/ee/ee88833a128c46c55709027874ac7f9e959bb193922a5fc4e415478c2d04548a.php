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
        $__internal_4d204303231d45980324367302bb8b62d4d848eb6b574938a254da952efe954b = $this->env->getExtension("native_profiler");
        $__internal_4d204303231d45980324367302bb8b62d4d848eb6b574938a254da952efe954b->enter($__internal_4d204303231d45980324367302bb8b62d4d848eb6b574938a254da952efe954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d204303231d45980324367302bb8b62d4d848eb6b574938a254da952efe954b->leave($__internal_4d204303231d45980324367302bb8b62d4d848eb6b574938a254da952efe954b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f424ac87ed16538867ee103af92a7d58173b9100191c7049317c6b827fc31e2 = $this->env->getExtension("native_profiler");
        $__internal_0f424ac87ed16538867ee103af92a7d58173b9100191c7049317c6b827fc31e2->enter($__internal_0f424ac87ed16538867ee103af92a7d58173b9100191c7049317c6b827fc31e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f424ac87ed16538867ee103af92a7d58173b9100191c7049317c6b827fc31e2->leave($__internal_0f424ac87ed16538867ee103af92a7d58173b9100191c7049317c6b827fc31e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9f665eb2baf008a836574ce51baa31987b426f85ed9ba4ad82dc24a0f8fc3ce = $this->env->getExtension("native_profiler");
        $__internal_f9f665eb2baf008a836574ce51baa31987b426f85ed9ba4ad82dc24a0f8fc3ce->enter($__internal_f9f665eb2baf008a836574ce51baa31987b426f85ed9ba4ad82dc24a0f8fc3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9f665eb2baf008a836574ce51baa31987b426f85ed9ba4ad82dc24a0f8fc3ce->leave($__internal_f9f665eb2baf008a836574ce51baa31987b426f85ed9ba4ad82dc24a0f8fc3ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72f215e2b9f711951fe2fd0073695c8e2f354c5b31e9664b58f10af94f287a39 = $this->env->getExtension("native_profiler");
        $__internal_72f215e2b9f711951fe2fd0073695c8e2f354c5b31e9664b58f10af94f287a39->enter($__internal_72f215e2b9f711951fe2fd0073695c8e2f354c5b31e9664b58f10af94f287a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72f215e2b9f711951fe2fd0073695c8e2f354c5b31e9664b58f10af94f287a39->leave($__internal_72f215e2b9f711951fe2fd0073695c8e2f354c5b31e9664b58f10af94f287a39_prof);

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
