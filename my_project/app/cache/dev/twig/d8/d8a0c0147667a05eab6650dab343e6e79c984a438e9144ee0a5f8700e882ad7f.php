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
        $__internal_6f6077027ee8da9d072136402082ad7008e949b1fe48185d7537c73d38df4f7b = $this->env->getExtension("native_profiler");
        $__internal_6f6077027ee8da9d072136402082ad7008e949b1fe48185d7537c73d38df4f7b->enter($__internal_6f6077027ee8da9d072136402082ad7008e949b1fe48185d7537c73d38df4f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6077027ee8da9d072136402082ad7008e949b1fe48185d7537c73d38df4f7b->leave($__internal_6f6077027ee8da9d072136402082ad7008e949b1fe48185d7537c73d38df4f7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ca133d05e62f81d1d59dbccef7b2b83c0546f4a7a308c3b00d64c1af17f655a = $this->env->getExtension("native_profiler");
        $__internal_4ca133d05e62f81d1d59dbccef7b2b83c0546f4a7a308c3b00d64c1af17f655a->enter($__internal_4ca133d05e62f81d1d59dbccef7b2b83c0546f4a7a308c3b00d64c1af17f655a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4ca133d05e62f81d1d59dbccef7b2b83c0546f4a7a308c3b00d64c1af17f655a->leave($__internal_4ca133d05e62f81d1d59dbccef7b2b83c0546f4a7a308c3b00d64c1af17f655a_prof);

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
