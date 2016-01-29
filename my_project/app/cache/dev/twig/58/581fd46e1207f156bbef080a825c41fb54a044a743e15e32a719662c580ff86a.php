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
        $__internal_319327319fb984f1f3460c7be1d3ffd2f09987afae84f23aa0ebe791ab766b8c = $this->env->getExtension("native_profiler");
        $__internal_319327319fb984f1f3460c7be1d3ffd2f09987afae84f23aa0ebe791ab766b8c->enter($__internal_319327319fb984f1f3460c7be1d3ffd2f09987afae84f23aa0ebe791ab766b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319327319fb984f1f3460c7be1d3ffd2f09987afae84f23aa0ebe791ab766b8c->leave($__internal_319327319fb984f1f3460c7be1d3ffd2f09987afae84f23aa0ebe791ab766b8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b66883521a7868772ff2e0641815df287a5e8f06bf14eec50c1e390ae08b858c = $this->env->getExtension("native_profiler");
        $__internal_b66883521a7868772ff2e0641815df287a5e8f06bf14eec50c1e390ae08b858c->enter($__internal_b66883521a7868772ff2e0641815df287a5e8f06bf14eec50c1e390ae08b858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b66883521a7868772ff2e0641815df287a5e8f06bf14eec50c1e390ae08b858c->leave($__internal_b66883521a7868772ff2e0641815df287a5e8f06bf14eec50c1e390ae08b858c_prof);

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
