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
        $__internal_21594775d2e988acb9f1f57f0f618e7b099fab9d81539b75df477f3f15221054 = $this->env->getExtension("native_profiler");
        $__internal_21594775d2e988acb9f1f57f0f618e7b099fab9d81539b75df477f3f15221054->enter($__internal_21594775d2e988acb9f1f57f0f618e7b099fab9d81539b75df477f3f15221054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21594775d2e988acb9f1f57f0f618e7b099fab9d81539b75df477f3f15221054->leave($__internal_21594775d2e988acb9f1f57f0f618e7b099fab9d81539b75df477f3f15221054_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbd4cec047a84d3df591ba326afb49a99107cfbb3c31c32979996280c7a331cd = $this->env->getExtension("native_profiler");
        $__internal_fbd4cec047a84d3df591ba326afb49a99107cfbb3c31c32979996280c7a331cd->enter($__internal_fbd4cec047a84d3df591ba326afb49a99107cfbb3c31c32979996280c7a331cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fbd4cec047a84d3df591ba326afb49a99107cfbb3c31c32979996280c7a331cd->leave($__internal_fbd4cec047a84d3df591ba326afb49a99107cfbb3c31c32979996280c7a331cd_prof);

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
