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
        $__internal_db5ca1526fad90e2c389bc19a5e1bc1bc9af64c155900d0a0483f2ac92df9a07 = $this->env->getExtension("native_profiler");
        $__internal_db5ca1526fad90e2c389bc19a5e1bc1bc9af64c155900d0a0483f2ac92df9a07->enter($__internal_db5ca1526fad90e2c389bc19a5e1bc1bc9af64c155900d0a0483f2ac92df9a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db5ca1526fad90e2c389bc19a5e1bc1bc9af64c155900d0a0483f2ac92df9a07->leave($__internal_db5ca1526fad90e2c389bc19a5e1bc1bc9af64c155900d0a0483f2ac92df9a07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3426b6ea59f531e0188fc9842b7928c717a62d0cbb4c18d0a9b6ba4ba26b7fd = $this->env->getExtension("native_profiler");
        $__internal_d3426b6ea59f531e0188fc9842b7928c717a62d0cbb4c18d0a9b6ba4ba26b7fd->enter($__internal_d3426b6ea59f531e0188fc9842b7928c717a62d0cbb4c18d0a9b6ba4ba26b7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3426b6ea59f531e0188fc9842b7928c717a62d0cbb4c18d0a9b6ba4ba26b7fd->leave($__internal_d3426b6ea59f531e0188fc9842b7928c717a62d0cbb4c18d0a9b6ba4ba26b7fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bdfa10c9273776c2d5610925e1641e3e646479cf1b7a9c8921c13f47c83dba0 = $this->env->getExtension("native_profiler");
        $__internal_5bdfa10c9273776c2d5610925e1641e3e646479cf1b7a9c8921c13f47c83dba0->enter($__internal_5bdfa10c9273776c2d5610925e1641e3e646479cf1b7a9c8921c13f47c83dba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5bdfa10c9273776c2d5610925e1641e3e646479cf1b7a9c8921c13f47c83dba0->leave($__internal_5bdfa10c9273776c2d5610925e1641e3e646479cf1b7a9c8921c13f47c83dba0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8caeb4eff7e3520186eb036280387d7e4887d93f804aa715f564117c5aba93a = $this->env->getExtension("native_profiler");
        $__internal_b8caeb4eff7e3520186eb036280387d7e4887d93f804aa715f564117c5aba93a->enter($__internal_b8caeb4eff7e3520186eb036280387d7e4887d93f804aa715f564117c5aba93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b8caeb4eff7e3520186eb036280387d7e4887d93f804aa715f564117c5aba93a->leave($__internal_b8caeb4eff7e3520186eb036280387d7e4887d93f804aa715f564117c5aba93a_prof);

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
