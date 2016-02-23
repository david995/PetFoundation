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
        $__internal_05bb86b6e8bf95012b5307d94dfa8a5c73b3870562ebaabb9193161aa8c16212 = $this->env->getExtension("native_profiler");
        $__internal_05bb86b6e8bf95012b5307d94dfa8a5c73b3870562ebaabb9193161aa8c16212->enter($__internal_05bb86b6e8bf95012b5307d94dfa8a5c73b3870562ebaabb9193161aa8c16212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bb86b6e8bf95012b5307d94dfa8a5c73b3870562ebaabb9193161aa8c16212->leave($__internal_05bb86b6e8bf95012b5307d94dfa8a5c73b3870562ebaabb9193161aa8c16212_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ce49fda4548235bc98e160fba343afd33684ccb8f97fb3932f5eaaca6c7833b = $this->env->getExtension("native_profiler");
        $__internal_1ce49fda4548235bc98e160fba343afd33684ccb8f97fb3932f5eaaca6c7833b->enter($__internal_1ce49fda4548235bc98e160fba343afd33684ccb8f97fb3932f5eaaca6c7833b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1ce49fda4548235bc98e160fba343afd33684ccb8f97fb3932f5eaaca6c7833b->leave($__internal_1ce49fda4548235bc98e160fba343afd33684ccb8f97fb3932f5eaaca6c7833b_prof);

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
