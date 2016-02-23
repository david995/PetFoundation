<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0d67faa81751c56a4c380a6785027bcc569f258424ceb00b43c044593c9413f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_166995b4b3aa5b8fef7f5abbcda0ed66854482e5d7991bf3b29808b7f48ffe5f = $this->env->getExtension("native_profiler");
        $__internal_166995b4b3aa5b8fef7f5abbcda0ed66854482e5d7991bf3b29808b7f48ffe5f->enter($__internal_166995b4b3aa5b8fef7f5abbcda0ed66854482e5d7991bf3b29808b7f48ffe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_166995b4b3aa5b8fef7f5abbcda0ed66854482e5d7991bf3b29808b7f48ffe5f->leave($__internal_166995b4b3aa5b8fef7f5abbcda0ed66854482e5d7991bf3b29808b7f48ffe5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcb6a965c0b7c60b0f841b46e5ca88fda79773c5d670a6427e283d05fbd1f4c7 = $this->env->getExtension("native_profiler");
        $__internal_dcb6a965c0b7c60b0f841b46e5ca88fda79773c5d670a6427e283d05fbd1f4c7->enter($__internal_dcb6a965c0b7c60b0f841b46e5ca88fda79773c5d670a6427e283d05fbd1f4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_dcb6a965c0b7c60b0f841b46e5ca88fda79773c5d670a6427e283d05fbd1f4c7->leave($__internal_dcb6a965c0b7c60b0f841b46e5ca88fda79773c5d670a6427e283d05fbd1f4c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
