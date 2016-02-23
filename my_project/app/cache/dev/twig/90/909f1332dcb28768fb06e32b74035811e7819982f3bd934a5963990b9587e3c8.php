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
        $__internal_818780a203dadcfc4308b4d350533710aebd44db30beb08c0bf4aa25d210f888 = $this->env->getExtension("native_profiler");
        $__internal_818780a203dadcfc4308b4d350533710aebd44db30beb08c0bf4aa25d210f888->enter($__internal_818780a203dadcfc4308b4d350533710aebd44db30beb08c0bf4aa25d210f888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818780a203dadcfc4308b4d350533710aebd44db30beb08c0bf4aa25d210f888->leave($__internal_818780a203dadcfc4308b4d350533710aebd44db30beb08c0bf4aa25d210f888_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb90a0a32f5e59e16488e99eec0c781c21cfd4a955685ac4b23e00edd9d4fa85 = $this->env->getExtension("native_profiler");
        $__internal_cb90a0a32f5e59e16488e99eec0c781c21cfd4a955685ac4b23e00edd9d4fa85->enter($__internal_cb90a0a32f5e59e16488e99eec0c781c21cfd4a955685ac4b23e00edd9d4fa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_cb90a0a32f5e59e16488e99eec0c781c21cfd4a955685ac4b23e00edd9d4fa85->leave($__internal_cb90a0a32f5e59e16488e99eec0c781c21cfd4a955685ac4b23e00edd9d4fa85_prof);

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
