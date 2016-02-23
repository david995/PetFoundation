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
        $__internal_e0515e4de8c3e9fd93d62f01de1182078bffe0ddf4ab1aeee9e0bcfc6fc14ee8 = $this->env->getExtension("native_profiler");
        $__internal_e0515e4de8c3e9fd93d62f01de1182078bffe0ddf4ab1aeee9e0bcfc6fc14ee8->enter($__internal_e0515e4de8c3e9fd93d62f01de1182078bffe0ddf4ab1aeee9e0bcfc6fc14ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0515e4de8c3e9fd93d62f01de1182078bffe0ddf4ab1aeee9e0bcfc6fc14ee8->leave($__internal_e0515e4de8c3e9fd93d62f01de1182078bffe0ddf4ab1aeee9e0bcfc6fc14ee8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0869449513989d1ab539bc197535f85c068c1bb61a83f5a33f5e83896446a307 = $this->env->getExtension("native_profiler");
        $__internal_0869449513989d1ab539bc197535f85c068c1bb61a83f5a33f5e83896446a307->enter($__internal_0869449513989d1ab539bc197535f85c068c1bb61a83f5a33f5e83896446a307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0869449513989d1ab539bc197535f85c068c1bb61a83f5a33f5e83896446a307->leave($__internal_0869449513989d1ab539bc197535f85c068c1bb61a83f5a33f5e83896446a307_prof);

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
