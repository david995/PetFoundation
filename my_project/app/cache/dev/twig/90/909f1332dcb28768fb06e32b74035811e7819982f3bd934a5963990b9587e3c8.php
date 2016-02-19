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
        $__internal_6c4e23af9b3637556370f77bfb7ee0fe2221ffca770069cc50f1c99f03547d0f = $this->env->getExtension("native_profiler");
        $__internal_6c4e23af9b3637556370f77bfb7ee0fe2221ffca770069cc50f1c99f03547d0f->enter($__internal_6c4e23af9b3637556370f77bfb7ee0fe2221ffca770069cc50f1c99f03547d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c4e23af9b3637556370f77bfb7ee0fe2221ffca770069cc50f1c99f03547d0f->leave($__internal_6c4e23af9b3637556370f77bfb7ee0fe2221ffca770069cc50f1c99f03547d0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4d2f9347fd61afc63cfb1462738c75cd5065d12ec498b463aab6df579caed99 = $this->env->getExtension("native_profiler");
        $__internal_b4d2f9347fd61afc63cfb1462738c75cd5065d12ec498b463aab6df579caed99->enter($__internal_b4d2f9347fd61afc63cfb1462738c75cd5065d12ec498b463aab6df579caed99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_b4d2f9347fd61afc63cfb1462738c75cd5065d12ec498b463aab6df579caed99->leave($__internal_b4d2f9347fd61afc63cfb1462738c75cd5065d12ec498b463aab6df579caed99_prof);

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
