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
        $__internal_fffeaafa7db71a23f3f2191566867bed03f1a627e988bea668f3b355abe888cd = $this->env->getExtension("native_profiler");
        $__internal_fffeaafa7db71a23f3f2191566867bed03f1a627e988bea668f3b355abe888cd->enter($__internal_fffeaafa7db71a23f3f2191566867bed03f1a627e988bea668f3b355abe888cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffeaafa7db71a23f3f2191566867bed03f1a627e988bea668f3b355abe888cd->leave($__internal_fffeaafa7db71a23f3f2191566867bed03f1a627e988bea668f3b355abe888cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a9eea3c27a7460656f855be2e85483febd5d69f90a7f242e4c83ffb9628b0ab = $this->env->getExtension("native_profiler");
        $__internal_5a9eea3c27a7460656f855be2e85483febd5d69f90a7f242e4c83ffb9628b0ab->enter($__internal_5a9eea3c27a7460656f855be2e85483febd5d69f90a7f242e4c83ffb9628b0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5a9eea3c27a7460656f855be2e85483febd5d69f90a7f242e4c83ffb9628b0ab->leave($__internal_5a9eea3c27a7460656f855be2e85483febd5d69f90a7f242e4c83ffb9628b0ab_prof);

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
