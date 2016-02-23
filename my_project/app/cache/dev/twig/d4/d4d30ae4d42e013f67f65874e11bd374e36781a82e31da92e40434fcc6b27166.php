<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fcfd1e91d14c67f22e5ff0261c30d1395fb306ade9b7e28c7cc61395cd080c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e6dcea3c2a38f9a0f8c1a71175bc11910d9bf7ae168e6155768e5ca9b738bda = $this->env->getExtension("native_profiler");
        $__internal_6e6dcea3c2a38f9a0f8c1a71175bc11910d9bf7ae168e6155768e5ca9b738bda->enter($__internal_6e6dcea3c2a38f9a0f8c1a71175bc11910d9bf7ae168e6155768e5ca9b738bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e6dcea3c2a38f9a0f8c1a71175bc11910d9bf7ae168e6155768e5ca9b738bda->leave($__internal_6e6dcea3c2a38f9a0f8c1a71175bc11910d9bf7ae168e6155768e5ca9b738bda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f64991130d665853757fe5964f8dce1ecf8a095b6fb954a8eeccf3c4ae3a585 = $this->env->getExtension("native_profiler");
        $__internal_0f64991130d665853757fe5964f8dce1ecf8a095b6fb954a8eeccf3c4ae3a585->enter($__internal_0f64991130d665853757fe5964f8dce1ecf8a095b6fb954a8eeccf3c4ae3a585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0f64991130d665853757fe5964f8dce1ecf8a095b6fb954a8eeccf3c4ae3a585->leave($__internal_0f64991130d665853757fe5964f8dce1ecf8a095b6fb954a8eeccf3c4ae3a585_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
