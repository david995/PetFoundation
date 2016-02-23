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
        $__internal_cd9e95b06756d80d9678e7b15ea63035282c8a36acbe4b0bfcdf0b69c46bcabf = $this->env->getExtension("native_profiler");
        $__internal_cd9e95b06756d80d9678e7b15ea63035282c8a36acbe4b0bfcdf0b69c46bcabf->enter($__internal_cd9e95b06756d80d9678e7b15ea63035282c8a36acbe4b0bfcdf0b69c46bcabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd9e95b06756d80d9678e7b15ea63035282c8a36acbe4b0bfcdf0b69c46bcabf->leave($__internal_cd9e95b06756d80d9678e7b15ea63035282c8a36acbe4b0bfcdf0b69c46bcabf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_380cadaeeed47d4b5518cf816e153f03cabb1f336ca72a465dad68fc4dc54007 = $this->env->getExtension("native_profiler");
        $__internal_380cadaeeed47d4b5518cf816e153f03cabb1f336ca72a465dad68fc4dc54007->enter($__internal_380cadaeeed47d4b5518cf816e153f03cabb1f336ca72a465dad68fc4dc54007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_380cadaeeed47d4b5518cf816e153f03cabb1f336ca72a465dad68fc4dc54007->leave($__internal_380cadaeeed47d4b5518cf816e153f03cabb1f336ca72a465dad68fc4dc54007_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0aa35bfaa8e2cb9f54a169debbd260bb7f78d97d5c3d1c8b29cdb910d365975b = $this->env->getExtension("native_profiler");
        $__internal_0aa35bfaa8e2cb9f54a169debbd260bb7f78d97d5c3d1c8b29cdb910d365975b->enter($__internal_0aa35bfaa8e2cb9f54a169debbd260bb7f78d97d5c3d1c8b29cdb910d365975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0aa35bfaa8e2cb9f54a169debbd260bb7f78d97d5c3d1c8b29cdb910d365975b->leave($__internal_0aa35bfaa8e2cb9f54a169debbd260bb7f78d97d5c3d1c8b29cdb910d365975b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22b2aaace835e75b126b0a259f2e3a9d1eb44707483d4a3694ecb4718cbb5b28 = $this->env->getExtension("native_profiler");
        $__internal_22b2aaace835e75b126b0a259f2e3a9d1eb44707483d4a3694ecb4718cbb5b28->enter($__internal_22b2aaace835e75b126b0a259f2e3a9d1eb44707483d4a3694ecb4718cbb5b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22b2aaace835e75b126b0a259f2e3a9d1eb44707483d4a3694ecb4718cbb5b28->leave($__internal_22b2aaace835e75b126b0a259f2e3a9d1eb44707483d4a3694ecb4718cbb5b28_prof);

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
