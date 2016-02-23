<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9a34e2003cb380f62f33cbf5f15e9ca72c378a9a3488b636c32ab1cf32247715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6688f3021a1d68fc61210300e14bc22b0ccf99e8b4720d829ffaf9615a4b900c = $this->env->getExtension("native_profiler");
        $__internal_6688f3021a1d68fc61210300e14bc22b0ccf99e8b4720d829ffaf9615a4b900c->enter($__internal_6688f3021a1d68fc61210300e14bc22b0ccf99e8b4720d829ffaf9615a4b900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6688f3021a1d68fc61210300e14bc22b0ccf99e8b4720d829ffaf9615a4b900c->leave($__internal_6688f3021a1d68fc61210300e14bc22b0ccf99e8b4720d829ffaf9615a4b900c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3a5509a25d018368330d3e45195c53f47ef40972eb354f3f6acecb41b918eed = $this->env->getExtension("native_profiler");
        $__internal_d3a5509a25d018368330d3e45195c53f47ef40972eb354f3f6acecb41b918eed->enter($__internal_d3a5509a25d018368330d3e45195c53f47ef40972eb354f3f6acecb41b918eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d3a5509a25d018368330d3e45195c53f47ef40972eb354f3f6acecb41b918eed->leave($__internal_d3a5509a25d018368330d3e45195c53f47ef40972eb354f3f6acecb41b918eed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
