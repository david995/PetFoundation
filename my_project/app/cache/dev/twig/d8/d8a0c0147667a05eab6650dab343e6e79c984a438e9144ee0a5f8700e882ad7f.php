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
        $__internal_1879c176542ebbb88353da9f1ad8e8dda3000c292074cac3854d72639627fc17 = $this->env->getExtension("native_profiler");
        $__internal_1879c176542ebbb88353da9f1ad8e8dda3000c292074cac3854d72639627fc17->enter($__internal_1879c176542ebbb88353da9f1ad8e8dda3000c292074cac3854d72639627fc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1879c176542ebbb88353da9f1ad8e8dda3000c292074cac3854d72639627fc17->leave($__internal_1879c176542ebbb88353da9f1ad8e8dda3000c292074cac3854d72639627fc17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e5d62fe469d185bfbf2219cda9e3fecb9f149ac80022e2d32d13dd030a1e7e6 = $this->env->getExtension("native_profiler");
        $__internal_6e5d62fe469d185bfbf2219cda9e3fecb9f149ac80022e2d32d13dd030a1e7e6->enter($__internal_6e5d62fe469d185bfbf2219cda9e3fecb9f149ac80022e2d32d13dd030a1e7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6e5d62fe469d185bfbf2219cda9e3fecb9f149ac80022e2d32d13dd030a1e7e6->leave($__internal_6e5d62fe469d185bfbf2219cda9e3fecb9f149ac80022e2d32d13dd030a1e7e6_prof);

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
