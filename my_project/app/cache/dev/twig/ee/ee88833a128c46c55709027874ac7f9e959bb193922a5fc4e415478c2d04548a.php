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
        $__internal_afd5858794dd878cc812889fcc4f675f49d0f8fc8841a9385c457fd42a9dad86 = $this->env->getExtension("native_profiler");
        $__internal_afd5858794dd878cc812889fcc4f675f49d0f8fc8841a9385c457fd42a9dad86->enter($__internal_afd5858794dd878cc812889fcc4f675f49d0f8fc8841a9385c457fd42a9dad86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afd5858794dd878cc812889fcc4f675f49d0f8fc8841a9385c457fd42a9dad86->leave($__internal_afd5858794dd878cc812889fcc4f675f49d0f8fc8841a9385c457fd42a9dad86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5fba0e94fbc3bfb4a56d3e91f2337e8268a0d9fcdeaa7008d14daebe5e3931f9 = $this->env->getExtension("native_profiler");
        $__internal_5fba0e94fbc3bfb4a56d3e91f2337e8268a0d9fcdeaa7008d14daebe5e3931f9->enter($__internal_5fba0e94fbc3bfb4a56d3e91f2337e8268a0d9fcdeaa7008d14daebe5e3931f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fba0e94fbc3bfb4a56d3e91f2337e8268a0d9fcdeaa7008d14daebe5e3931f9->leave($__internal_5fba0e94fbc3bfb4a56d3e91f2337e8268a0d9fcdeaa7008d14daebe5e3931f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6eb9ec121115a902e4d02a281448e154ebbdb81b806a46134aee3ce84c995b4 = $this->env->getExtension("native_profiler");
        $__internal_f6eb9ec121115a902e4d02a281448e154ebbdb81b806a46134aee3ce84c995b4->enter($__internal_f6eb9ec121115a902e4d02a281448e154ebbdb81b806a46134aee3ce84c995b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f6eb9ec121115a902e4d02a281448e154ebbdb81b806a46134aee3ce84c995b4->leave($__internal_f6eb9ec121115a902e4d02a281448e154ebbdb81b806a46134aee3ce84c995b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42471e99017f55f510bf6a0220ded5fe22bb7643dcab05ef75799b7d65e5f58a = $this->env->getExtension("native_profiler");
        $__internal_42471e99017f55f510bf6a0220ded5fe22bb7643dcab05ef75799b7d65e5f58a->enter($__internal_42471e99017f55f510bf6a0220ded5fe22bb7643dcab05ef75799b7d65e5f58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42471e99017f55f510bf6a0220ded5fe22bb7643dcab05ef75799b7d65e5f58a->leave($__internal_42471e99017f55f510bf6a0220ded5fe22bb7643dcab05ef75799b7d65e5f58a_prof);

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
