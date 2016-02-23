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
        $__internal_d3a1d6f63b3d1172c0a0500df39d6b4fac46ae49d79bb2ad904bcee0dd9dd439 = $this->env->getExtension("native_profiler");
        $__internal_d3a1d6f63b3d1172c0a0500df39d6b4fac46ae49d79bb2ad904bcee0dd9dd439->enter($__internal_d3a1d6f63b3d1172c0a0500df39d6b4fac46ae49d79bb2ad904bcee0dd9dd439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d3a1d6f63b3d1172c0a0500df39d6b4fac46ae49d79bb2ad904bcee0dd9dd439->leave($__internal_d3a1d6f63b3d1172c0a0500df39d6b4fac46ae49d79bb2ad904bcee0dd9dd439_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_faa21ffe45e6998808501197f860aeec939af9907a817165b45ced685f47d0af = $this->env->getExtension("native_profiler");
        $__internal_faa21ffe45e6998808501197f860aeec939af9907a817165b45ced685f47d0af->enter($__internal_faa21ffe45e6998808501197f860aeec939af9907a817165b45ced685f47d0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_faa21ffe45e6998808501197f860aeec939af9907a817165b45ced685f47d0af->leave($__internal_faa21ffe45e6998808501197f860aeec939af9907a817165b45ced685f47d0af_prof);

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
