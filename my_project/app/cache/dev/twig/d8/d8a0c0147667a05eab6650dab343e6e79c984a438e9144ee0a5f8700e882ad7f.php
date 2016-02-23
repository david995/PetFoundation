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
        $__internal_e7094236e7129a71327f7ed18242495a63c2d1687774117b43ea1d377bb78688 = $this->env->getExtension("native_profiler");
        $__internal_e7094236e7129a71327f7ed18242495a63c2d1687774117b43ea1d377bb78688->enter($__internal_e7094236e7129a71327f7ed18242495a63c2d1687774117b43ea1d377bb78688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7094236e7129a71327f7ed18242495a63c2d1687774117b43ea1d377bb78688->leave($__internal_e7094236e7129a71327f7ed18242495a63c2d1687774117b43ea1d377bb78688_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6d409f9edb900fc0eebef77969b2e3018c5eadf6161d91107172cf92312c751 = $this->env->getExtension("native_profiler");
        $__internal_a6d409f9edb900fc0eebef77969b2e3018c5eadf6161d91107172cf92312c751->enter($__internal_a6d409f9edb900fc0eebef77969b2e3018c5eadf6161d91107172cf92312c751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a6d409f9edb900fc0eebef77969b2e3018c5eadf6161d91107172cf92312c751->leave($__internal_a6d409f9edb900fc0eebef77969b2e3018c5eadf6161d91107172cf92312c751_prof);

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
