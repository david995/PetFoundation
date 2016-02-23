<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9a34e2003cb380f62f33cbf5f15e9ca72c378a9a3488b636c32ab1cf32247715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7547e31f9cf2d60bb0822c3c5b17981c5b028b7fae31135ad9f8c7772ea853af = $this->env->getExtension("native_profiler");
        $__internal_7547e31f9cf2d60bb0822c3c5b17981c5b028b7fae31135ad9f8c7772ea853af->enter($__internal_7547e31f9cf2d60bb0822c3c5b17981c5b028b7fae31135ad9f8c7772ea853af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7547e31f9cf2d60bb0822c3c5b17981c5b028b7fae31135ad9f8c7772ea853af->leave($__internal_7547e31f9cf2d60bb0822c3c5b17981c5b028b7fae31135ad9f8c7772ea853af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98498c05999513066b643c15fbd91dfe02f2a1db67d4cc295b94cfd98b490162 = $this->env->getExtension("native_profiler");
        $__internal_98498c05999513066b643c15fbd91dfe02f2a1db67d4cc295b94cfd98b490162->enter($__internal_98498c05999513066b643c15fbd91dfe02f2a1db67d4cc295b94cfd98b490162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_98498c05999513066b643c15fbd91dfe02f2a1db67d4cc295b94cfd98b490162->leave($__internal_98498c05999513066b643c15fbd91dfe02f2a1db67d4cc295b94cfd98b490162_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
