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
        $__internal_81974f9fd52cb4561b6be264d0816ad1dff7631649355c3359b2c0dd086df358 = $this->env->getExtension("native_profiler");
        $__internal_81974f9fd52cb4561b6be264d0816ad1dff7631649355c3359b2c0dd086df358->enter($__internal_81974f9fd52cb4561b6be264d0816ad1dff7631649355c3359b2c0dd086df358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81974f9fd52cb4561b6be264d0816ad1dff7631649355c3359b2c0dd086df358->leave($__internal_81974f9fd52cb4561b6be264d0816ad1dff7631649355c3359b2c0dd086df358_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0d82d574b2bfd6e9e818c80a36a7fb89cc6ce815c55e858edb5ffbd16cf12ae = $this->env->getExtension("native_profiler");
        $__internal_a0d82d574b2bfd6e9e818c80a36a7fb89cc6ce815c55e858edb5ffbd16cf12ae->enter($__internal_a0d82d574b2bfd6e9e818c80a36a7fb89cc6ce815c55e858edb5ffbd16cf12ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a0d82d574b2bfd6e9e818c80a36a7fb89cc6ce815c55e858edb5ffbd16cf12ae->leave($__internal_a0d82d574b2bfd6e9e818c80a36a7fb89cc6ce815c55e858edb5ffbd16cf12ae_prof);

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
