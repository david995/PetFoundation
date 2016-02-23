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
        $__internal_2ca3aa08dc76c8c31f2a2a187eea6b29569cc397344da688a7fb34d910ef2937 = $this->env->getExtension("native_profiler");
        $__internal_2ca3aa08dc76c8c31f2a2a187eea6b29569cc397344da688a7fb34d910ef2937->enter($__internal_2ca3aa08dc76c8c31f2a2a187eea6b29569cc397344da688a7fb34d910ef2937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca3aa08dc76c8c31f2a2a187eea6b29569cc397344da688a7fb34d910ef2937->leave($__internal_2ca3aa08dc76c8c31f2a2a187eea6b29569cc397344da688a7fb34d910ef2937_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9afbdb9a0d2e26381d6913b6b6c905d9c561c50a2a53904c4ce885d6da2acac = $this->env->getExtension("native_profiler");
        $__internal_b9afbdb9a0d2e26381d6913b6b6c905d9c561c50a2a53904c4ce885d6da2acac->enter($__internal_b9afbdb9a0d2e26381d6913b6b6c905d9c561c50a2a53904c4ce885d6da2acac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b9afbdb9a0d2e26381d6913b6b6c905d9c561c50a2a53904c4ce885d6da2acac->leave($__internal_b9afbdb9a0d2e26381d6913b6b6c905d9c561c50a2a53904c4ce885d6da2acac_prof);

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
