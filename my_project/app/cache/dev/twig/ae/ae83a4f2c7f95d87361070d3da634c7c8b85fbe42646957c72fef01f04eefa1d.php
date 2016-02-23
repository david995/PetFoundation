<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_41e5235dd947051c35b69810bd83fcc77f831fdde4042acf22e0f73719d40726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_644b2749225db0feb2138b6b371b508c6e949b23f31876816538a0acb2f435de = $this->env->getExtension("native_profiler");
        $__internal_644b2749225db0feb2138b6b371b508c6e949b23f31876816538a0acb2f435de->enter($__internal_644b2749225db0feb2138b6b371b508c6e949b23f31876816538a0acb2f435de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644b2749225db0feb2138b6b371b508c6e949b23f31876816538a0acb2f435de->leave($__internal_644b2749225db0feb2138b6b371b508c6e949b23f31876816538a0acb2f435de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1fbe099a15b7417c9b936b002fc04b396941fa55ab0a12a1c7c21e720a2aea5 = $this->env->getExtension("native_profiler");
        $__internal_f1fbe099a15b7417c9b936b002fc04b396941fa55ab0a12a1c7c21e720a2aea5->enter($__internal_f1fbe099a15b7417c9b936b002fc04b396941fa55ab0a12a1c7c21e720a2aea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f1fbe099a15b7417c9b936b002fc04b396941fa55ab0a12a1c7c21e720a2aea5->leave($__internal_f1fbe099a15b7417c9b936b002fc04b396941fa55ab0a12a1c7c21e720a2aea5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
