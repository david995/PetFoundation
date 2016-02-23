<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5a816a520250b85d03943ef1cd8a0fd9e4b38de177ab9d7b959ef55b09de1ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a47209cf777802912c3419d3c01fb5387b64ac289a1a806755bda82fb652ac8 = $this->env->getExtension("native_profiler");
        $__internal_9a47209cf777802912c3419d3c01fb5387b64ac289a1a806755bda82fb652ac8->enter($__internal_9a47209cf777802912c3419d3c01fb5387b64ac289a1a806755bda82fb652ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9a47209cf777802912c3419d3c01fb5387b64ac289a1a806755bda82fb652ac8->leave($__internal_9a47209cf777802912c3419d3c01fb5387b64ac289a1a806755bda82fb652ac8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec546173bcd073a4585d77fefea4e38363862c99a7a2b9cdf68ad25fc98a9207 = $this->env->getExtension("native_profiler");
        $__internal_ec546173bcd073a4585d77fefea4e38363862c99a7a2b9cdf68ad25fc98a9207->enter($__internal_ec546173bcd073a4585d77fefea4e38363862c99a7a2b9cdf68ad25fc98a9207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ec546173bcd073a4585d77fefea4e38363862c99a7a2b9cdf68ad25fc98a9207->leave($__internal_ec546173bcd073a4585d77fefea4e38363862c99a7a2b9cdf68ad25fc98a9207_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
