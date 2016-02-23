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
        $__internal_636842fe1f47cdbcde3bed2227c29566cb2b0bf7535da61c2b5ea4d8045ced9f = $this->env->getExtension("native_profiler");
        $__internal_636842fe1f47cdbcde3bed2227c29566cb2b0bf7535da61c2b5ea4d8045ced9f->enter($__internal_636842fe1f47cdbcde3bed2227c29566cb2b0bf7535da61c2b5ea4d8045ced9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_636842fe1f47cdbcde3bed2227c29566cb2b0bf7535da61c2b5ea4d8045ced9f->leave($__internal_636842fe1f47cdbcde3bed2227c29566cb2b0bf7535da61c2b5ea4d8045ced9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5152bfaa584357c77a068ed01bf4647b0b29ea882b73625451fa9a019b2d120 = $this->env->getExtension("native_profiler");
        $__internal_a5152bfaa584357c77a068ed01bf4647b0b29ea882b73625451fa9a019b2d120->enter($__internal_a5152bfaa584357c77a068ed01bf4647b0b29ea882b73625451fa9a019b2d120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a5152bfaa584357c77a068ed01bf4647b0b29ea882b73625451fa9a019b2d120->leave($__internal_a5152bfaa584357c77a068ed01bf4647b0b29ea882b73625451fa9a019b2d120_prof);

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
