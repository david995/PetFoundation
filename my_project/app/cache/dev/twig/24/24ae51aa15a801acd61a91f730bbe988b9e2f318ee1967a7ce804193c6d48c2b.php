<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3a33ddd25c02482e15e53e2d608d58016a0cb1037da0f024dab223885560e28c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0d90aa6f6542af21475eedba7b3421fcca6d04534849732a936bb263755d8929 = $this->env->getExtension("native_profiler");
        $__internal_0d90aa6f6542af21475eedba7b3421fcca6d04534849732a936bb263755d8929->enter($__internal_0d90aa6f6542af21475eedba7b3421fcca6d04534849732a936bb263755d8929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d90aa6f6542af21475eedba7b3421fcca6d04534849732a936bb263755d8929->leave($__internal_0d90aa6f6542af21475eedba7b3421fcca6d04534849732a936bb263755d8929_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_976d882671eec86ef23f99368c9e055ac88778e68fc91623dd5e420c28ac7f8f = $this->env->getExtension("native_profiler");
        $__internal_976d882671eec86ef23f99368c9e055ac88778e68fc91623dd5e420c28ac7f8f->enter($__internal_976d882671eec86ef23f99368c9e055ac88778e68fc91623dd5e420c28ac7f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_976d882671eec86ef23f99368c9e055ac88778e68fc91623dd5e420c28ac7f8f->leave($__internal_976d882671eec86ef23f99368c9e055ac88778e68fc91623dd5e420c28ac7f8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
