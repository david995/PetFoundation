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
        $__internal_5cdcaac9e04592627bb9128c37b732332cb87a9d7526b99d53e8a4fe2900ffbd = $this->env->getExtension("native_profiler");
        $__internal_5cdcaac9e04592627bb9128c37b732332cb87a9d7526b99d53e8a4fe2900ffbd->enter($__internal_5cdcaac9e04592627bb9128c37b732332cb87a9d7526b99d53e8a4fe2900ffbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cdcaac9e04592627bb9128c37b732332cb87a9d7526b99d53e8a4fe2900ffbd->leave($__internal_5cdcaac9e04592627bb9128c37b732332cb87a9d7526b99d53e8a4fe2900ffbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5e84a7c1bb5d489a663df777218770d45b432222c1f3f000d44d7696cf638eb = $this->env->getExtension("native_profiler");
        $__internal_c5e84a7c1bb5d489a663df777218770d45b432222c1f3f000d44d7696cf638eb->enter($__internal_c5e84a7c1bb5d489a663df777218770d45b432222c1f3f000d44d7696cf638eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c5e84a7c1bb5d489a663df777218770d45b432222c1f3f000d44d7696cf638eb->leave($__internal_c5e84a7c1bb5d489a663df777218770d45b432222c1f3f000d44d7696cf638eb_prof);

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
