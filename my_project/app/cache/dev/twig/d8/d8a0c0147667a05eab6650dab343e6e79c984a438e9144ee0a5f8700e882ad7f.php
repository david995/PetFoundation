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
        $__internal_1d3a66525b29a4745a620060b337abdd48df8b1c5e33ae55913b0458fe56b65d = $this->env->getExtension("native_profiler");
        $__internal_1d3a66525b29a4745a620060b337abdd48df8b1c5e33ae55913b0458fe56b65d->enter($__internal_1d3a66525b29a4745a620060b337abdd48df8b1c5e33ae55913b0458fe56b65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d3a66525b29a4745a620060b337abdd48df8b1c5e33ae55913b0458fe56b65d->leave($__internal_1d3a66525b29a4745a620060b337abdd48df8b1c5e33ae55913b0458fe56b65d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d6f0f7e890054a648a84c9c0480b8952a621a221f3aa13be9914f9c98b9f957 = $this->env->getExtension("native_profiler");
        $__internal_0d6f0f7e890054a648a84c9c0480b8952a621a221f3aa13be9914f9c98b9f957->enter($__internal_0d6f0f7e890054a648a84c9c0480b8952a621a221f3aa13be9914f9c98b9f957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0d6f0f7e890054a648a84c9c0480b8952a621a221f3aa13be9914f9c98b9f957->leave($__internal_0d6f0f7e890054a648a84c9c0480b8952a621a221f3aa13be9914f9c98b9f957_prof);

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
