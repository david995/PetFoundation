<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_1f595b4f5b87ddc342a1f16d08efd7aeeb84d99d8d7455d89791133fc2407864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_82a90b3b8b79006f1e586c5bd1ab4480e55a539dc8b379a3e329d45f0abdb355 = $this->env->getExtension("native_profiler");
        $__internal_82a90b3b8b79006f1e586c5bd1ab4480e55a539dc8b379a3e329d45f0abdb355->enter($__internal_82a90b3b8b79006f1e586c5bd1ab4480e55a539dc8b379a3e329d45f0abdb355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82a90b3b8b79006f1e586c5bd1ab4480e55a539dc8b379a3e329d45f0abdb355->leave($__internal_82a90b3b8b79006f1e586c5bd1ab4480e55a539dc8b379a3e329d45f0abdb355_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afecd3b4527eb9a4fbae2741c41a60f3a64d281f567ad32ff423919cc71bb4fd = $this->env->getExtension("native_profiler");
        $__internal_afecd3b4527eb9a4fbae2741c41a60f3a64d281f567ad32ff423919cc71bb4fd->enter($__internal_afecd3b4527eb9a4fbae2741c41a60f3a64d281f567ad32ff423919cc71bb4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_afecd3b4527eb9a4fbae2741c41a60f3a64d281f567ad32ff423919cc71bb4fd->leave($__internal_afecd3b4527eb9a4fbae2741c41a60f3a64d281f567ad32ff423919cc71bb4fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
