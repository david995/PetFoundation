<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_119c4df99c4feca3fecdeec472bb7057b811670841610cc9c7c9c47c1fc3dabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4403a1088a68c560e90fd2e225735b4c014764e247ffbdeda81e1f5aa7539b9f = $this->env->getExtension("native_profiler");
        $__internal_4403a1088a68c560e90fd2e225735b4c014764e247ffbdeda81e1f5aa7539b9f->enter($__internal_4403a1088a68c560e90fd2e225735b4c014764e247ffbdeda81e1f5aa7539b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4403a1088a68c560e90fd2e225735b4c014764e247ffbdeda81e1f5aa7539b9f->leave($__internal_4403a1088a68c560e90fd2e225735b4c014764e247ffbdeda81e1f5aa7539b9f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74a931ae693b481ec5da264c973b7ce80912301b635f2c27b63613c28b5eda5f = $this->env->getExtension("native_profiler");
        $__internal_74a931ae693b481ec5da264c973b7ce80912301b635f2c27b63613c28b5eda5f->enter($__internal_74a931ae693b481ec5da264c973b7ce80912301b635f2c27b63613c28b5eda5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_74a931ae693b481ec5da264c973b7ce80912301b635f2c27b63613c28b5eda5f->leave($__internal_74a931ae693b481ec5da264c973b7ce80912301b635f2c27b63613c28b5eda5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
