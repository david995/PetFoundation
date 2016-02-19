<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0d67faa81751c56a4c380a6785027bcc569f258424ceb00b43c044593c9413f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6bedb53ce3099d567683864f70447a1c4984dc283679ba2e70781f2ed7e9c687 = $this->env->getExtension("native_profiler");
        $__internal_6bedb53ce3099d567683864f70447a1c4984dc283679ba2e70781f2ed7e9c687->enter($__internal_6bedb53ce3099d567683864f70447a1c4984dc283679ba2e70781f2ed7e9c687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bedb53ce3099d567683864f70447a1c4984dc283679ba2e70781f2ed7e9c687->leave($__internal_6bedb53ce3099d567683864f70447a1c4984dc283679ba2e70781f2ed7e9c687_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1678285103769043b78df4847058068634ab98e47f75c42b9e4058e0899af6c = $this->env->getExtension("native_profiler");
        $__internal_b1678285103769043b78df4847058068634ab98e47f75c42b9e4058e0899af6c->enter($__internal_b1678285103769043b78df4847058068634ab98e47f75c42b9e4058e0899af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b1678285103769043b78df4847058068634ab98e47f75c42b9e4058e0899af6c->leave($__internal_b1678285103769043b78df4847058068634ab98e47f75c42b9e4058e0899af6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
