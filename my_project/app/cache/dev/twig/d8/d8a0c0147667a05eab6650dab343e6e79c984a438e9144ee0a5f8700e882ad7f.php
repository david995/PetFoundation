<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_cc0f28f2c2cdee2dfbe8e991df5b6ce45543e59bec4144a0af28d95cc526e572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6d7882888bf5f3435a2c0cfd191a51af4eeb840aa0b1523ea2f7cdcb8c38d8a8 = $this->env->getExtension("native_profiler");
        $__internal_6d7882888bf5f3435a2c0cfd191a51af4eeb840aa0b1523ea2f7cdcb8c38d8a8->enter($__internal_6d7882888bf5f3435a2c0cfd191a51af4eeb840aa0b1523ea2f7cdcb8c38d8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d7882888bf5f3435a2c0cfd191a51af4eeb840aa0b1523ea2f7cdcb8c38d8a8->leave($__internal_6d7882888bf5f3435a2c0cfd191a51af4eeb840aa0b1523ea2f7cdcb8c38d8a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52d3b6fdf4a1d14e3250dd752c6bd157fe2380b156473e1801a05acd87a521a5 = $this->env->getExtension("native_profiler");
        $__internal_52d3b6fdf4a1d14e3250dd752c6bd157fe2380b156473e1801a05acd87a521a5->enter($__internal_52d3b6fdf4a1d14e3250dd752c6bd157fe2380b156473e1801a05acd87a521a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_52d3b6fdf4a1d14e3250dd752c6bd157fe2380b156473e1801a05acd87a521a5->leave($__internal_52d3b6fdf4a1d14e3250dd752c6bd157fe2380b156473e1801a05acd87a521a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
