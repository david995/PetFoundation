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
        $__internal_300bf5bc12551c8f9183b48b4002083b8be9b05ff99520054a7940dc2188c9d9 = $this->env->getExtension("native_profiler");
        $__internal_300bf5bc12551c8f9183b48b4002083b8be9b05ff99520054a7940dc2188c9d9->enter($__internal_300bf5bc12551c8f9183b48b4002083b8be9b05ff99520054a7940dc2188c9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300bf5bc12551c8f9183b48b4002083b8be9b05ff99520054a7940dc2188c9d9->leave($__internal_300bf5bc12551c8f9183b48b4002083b8be9b05ff99520054a7940dc2188c9d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a75e44c496f5febe1a4c9f6d71d7ac9e825855dd218abf7201a355cbf58eef1 = $this->env->getExtension("native_profiler");
        $__internal_0a75e44c496f5febe1a4c9f6d71d7ac9e825855dd218abf7201a355cbf58eef1->enter($__internal_0a75e44c496f5febe1a4c9f6d71d7ac9e825855dd218abf7201a355cbf58eef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a75e44c496f5febe1a4c9f6d71d7ac9e825855dd218abf7201a355cbf58eef1->leave($__internal_0a75e44c496f5febe1a4c9f6d71d7ac9e825855dd218abf7201a355cbf58eef1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8bf9f00e389bf67ba29800808a151b9f630fe9963e5e0165e64433914041a08 = $this->env->getExtension("native_profiler");
        $__internal_e8bf9f00e389bf67ba29800808a151b9f630fe9963e5e0165e64433914041a08->enter($__internal_e8bf9f00e389bf67ba29800808a151b9f630fe9963e5e0165e64433914041a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8bf9f00e389bf67ba29800808a151b9f630fe9963e5e0165e64433914041a08->leave($__internal_e8bf9f00e389bf67ba29800808a151b9f630fe9963e5e0165e64433914041a08_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68a10d11b8ceb31718c5303d6b2ade62f287125d815f16a5eb1b072005c8ee37 = $this->env->getExtension("native_profiler");
        $__internal_68a10d11b8ceb31718c5303d6b2ade62f287125d815f16a5eb1b072005c8ee37->enter($__internal_68a10d11b8ceb31718c5303d6b2ade62f287125d815f16a5eb1b072005c8ee37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68a10d11b8ceb31718c5303d6b2ade62f287125d815f16a5eb1b072005c8ee37->leave($__internal_68a10d11b8ceb31718c5303d6b2ade62f287125d815f16a5eb1b072005c8ee37_prof);

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
