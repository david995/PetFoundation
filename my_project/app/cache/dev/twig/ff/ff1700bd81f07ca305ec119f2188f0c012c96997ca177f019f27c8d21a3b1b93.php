<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_629ab911e2363598531992b5a148ad33629d84aeb69eafb47a9442918108c9c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9236a00ae1a1f07658be433488fd87bc287ef901dd4487026483177273c57917 = $this->env->getExtension("native_profiler");
        $__internal_9236a00ae1a1f07658be433488fd87bc287ef901dd4487026483177273c57917->enter($__internal_9236a00ae1a1f07658be433488fd87bc287ef901dd4487026483177273c57917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9236a00ae1a1f07658be433488fd87bc287ef901dd4487026483177273c57917->leave($__internal_9236a00ae1a1f07658be433488fd87bc287ef901dd4487026483177273c57917_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7e6c5498dbee01d87369c87e12429ab3b52b3bc8730a10e13d8443f63052507 = $this->env->getExtension("native_profiler");
        $__internal_a7e6c5498dbee01d87369c87e12429ab3b52b3bc8730a10e13d8443f63052507->enter($__internal_a7e6c5498dbee01d87369c87e12429ab3b52b3bc8730a10e13d8443f63052507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a7e6c5498dbee01d87369c87e12429ab3b52b3bc8730a10e13d8443f63052507->leave($__internal_a7e6c5498dbee01d87369c87e12429ab3b52b3bc8730a10e13d8443f63052507_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
