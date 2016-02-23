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
        $__internal_b119625fe8198fe2381a1d488b76ae7804a0bf9adaa7b0441549f7632b74358e = $this->env->getExtension("native_profiler");
        $__internal_b119625fe8198fe2381a1d488b76ae7804a0bf9adaa7b0441549f7632b74358e->enter($__internal_b119625fe8198fe2381a1d488b76ae7804a0bf9adaa7b0441549f7632b74358e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b119625fe8198fe2381a1d488b76ae7804a0bf9adaa7b0441549f7632b74358e->leave($__internal_b119625fe8198fe2381a1d488b76ae7804a0bf9adaa7b0441549f7632b74358e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a8db91a50f7744e572f79b857f1c793428c843dfe20022c726c99b76df45525 = $this->env->getExtension("native_profiler");
        $__internal_0a8db91a50f7744e572f79b857f1c793428c843dfe20022c726c99b76df45525->enter($__internal_0a8db91a50f7744e572f79b857f1c793428c843dfe20022c726c99b76df45525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0a8db91a50f7744e572f79b857f1c793428c843dfe20022c726c99b76df45525->leave($__internal_0a8db91a50f7744e572f79b857f1c793428c843dfe20022c726c99b76df45525_prof);

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
