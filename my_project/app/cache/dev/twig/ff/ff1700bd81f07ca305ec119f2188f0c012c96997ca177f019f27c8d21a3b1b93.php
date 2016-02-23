<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_629ab911e2363598531992b5a148ad33629d84aeb69eafb47a9442918108c9c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_073ce5c270f43490878be0593c0a8a4ac5a21975cec3d3678c969d59a306499a = $this->env->getExtension("native_profiler");
        $__internal_073ce5c270f43490878be0593c0a8a4ac5a21975cec3d3678c969d59a306499a->enter($__internal_073ce5c270f43490878be0593c0a8a4ac5a21975cec3d3678c969d59a306499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073ce5c270f43490878be0593c0a8a4ac5a21975cec3d3678c969d59a306499a->leave($__internal_073ce5c270f43490878be0593c0a8a4ac5a21975cec3d3678c969d59a306499a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5859e458d7af51ac551283c0b88b45983a8c1418a6c36fde98453a78144e4e8c = $this->env->getExtension("native_profiler");
        $__internal_5859e458d7af51ac551283c0b88b45983a8c1418a6c36fde98453a78144e4e8c->enter($__internal_5859e458d7af51ac551283c0b88b45983a8c1418a6c36fde98453a78144e4e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5859e458d7af51ac551283c0b88b45983a8c1418a6c36fde98453a78144e4e8c->leave($__internal_5859e458d7af51ac551283c0b88b45983a8c1418a6c36fde98453a78144e4e8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
