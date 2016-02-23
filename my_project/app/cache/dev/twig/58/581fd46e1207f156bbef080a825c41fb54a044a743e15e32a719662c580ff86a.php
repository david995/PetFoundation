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
        $__internal_88b4830be67bc40cf9f19fdf00618d33e4b9c09cf52e27fa6d2f64d85413410f = $this->env->getExtension("native_profiler");
        $__internal_88b4830be67bc40cf9f19fdf00618d33e4b9c09cf52e27fa6d2f64d85413410f->enter($__internal_88b4830be67bc40cf9f19fdf00618d33e4b9c09cf52e27fa6d2f64d85413410f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b4830be67bc40cf9f19fdf00618d33e4b9c09cf52e27fa6d2f64d85413410f->leave($__internal_88b4830be67bc40cf9f19fdf00618d33e4b9c09cf52e27fa6d2f64d85413410f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb0bd421ed7255fab4d72d9aecf963035a206a238c755bfd7ed95e08f6fe0bde = $this->env->getExtension("native_profiler");
        $__internal_fb0bd421ed7255fab4d72d9aecf963035a206a238c755bfd7ed95e08f6fe0bde->enter($__internal_fb0bd421ed7255fab4d72d9aecf963035a206a238c755bfd7ed95e08f6fe0bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_fb0bd421ed7255fab4d72d9aecf963035a206a238c755bfd7ed95e08f6fe0bde->leave($__internal_fb0bd421ed7255fab4d72d9aecf963035a206a238c755bfd7ed95e08f6fe0bde_prof);

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
