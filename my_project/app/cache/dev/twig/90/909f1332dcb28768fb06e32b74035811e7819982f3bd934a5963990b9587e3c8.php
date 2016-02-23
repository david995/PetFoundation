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
        $__internal_58d0cd65d6d5526adff224d34b354e4b87ab1d0789463cbd8081baa6bdffb9ba = $this->env->getExtension("native_profiler");
        $__internal_58d0cd65d6d5526adff224d34b354e4b87ab1d0789463cbd8081baa6bdffb9ba->enter($__internal_58d0cd65d6d5526adff224d34b354e4b87ab1d0789463cbd8081baa6bdffb9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d0cd65d6d5526adff224d34b354e4b87ab1d0789463cbd8081baa6bdffb9ba->leave($__internal_58d0cd65d6d5526adff224d34b354e4b87ab1d0789463cbd8081baa6bdffb9ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97ec520321f16aaf6e046ab924ca7e2d4deb57d3a5991da4f316fbaa2986e439 = $this->env->getExtension("native_profiler");
        $__internal_97ec520321f16aaf6e046ab924ca7e2d4deb57d3a5991da4f316fbaa2986e439->enter($__internal_97ec520321f16aaf6e046ab924ca7e2d4deb57d3a5991da4f316fbaa2986e439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_97ec520321f16aaf6e046ab924ca7e2d4deb57d3a5991da4f316fbaa2986e439->leave($__internal_97ec520321f16aaf6e046ab924ca7e2d4deb57d3a5991da4f316fbaa2986e439_prof);

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
