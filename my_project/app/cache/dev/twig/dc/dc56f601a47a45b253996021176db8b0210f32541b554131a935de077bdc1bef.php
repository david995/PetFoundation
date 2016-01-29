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
        $__internal_e87b6a56267fe9dfbd446ee720a64430bc2d1aefcf6b67e8533cab166dbcd70b = $this->env->getExtension("native_profiler");
        $__internal_e87b6a56267fe9dfbd446ee720a64430bc2d1aefcf6b67e8533cab166dbcd70b->enter($__internal_e87b6a56267fe9dfbd446ee720a64430bc2d1aefcf6b67e8533cab166dbcd70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e87b6a56267fe9dfbd446ee720a64430bc2d1aefcf6b67e8533cab166dbcd70b->leave($__internal_e87b6a56267fe9dfbd446ee720a64430bc2d1aefcf6b67e8533cab166dbcd70b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05740483ce5fc895f5e352fd691b7fa74a0b34310730de8f0e3ecca0e49be402 = $this->env->getExtension("native_profiler");
        $__internal_05740483ce5fc895f5e352fd691b7fa74a0b34310730de8f0e3ecca0e49be402->enter($__internal_05740483ce5fc895f5e352fd691b7fa74a0b34310730de8f0e3ecca0e49be402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_05740483ce5fc895f5e352fd691b7fa74a0b34310730de8f0e3ecca0e49be402->leave($__internal_05740483ce5fc895f5e352fd691b7fa74a0b34310730de8f0e3ecca0e49be402_prof);

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
