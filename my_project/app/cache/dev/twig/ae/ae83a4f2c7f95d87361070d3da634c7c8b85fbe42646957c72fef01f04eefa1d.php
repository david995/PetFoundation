<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_41e5235dd947051c35b69810bd83fcc77f831fdde4042acf22e0f73719d40726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_aca67931381a261d03a2712f280af8b8d6ef2c8c7639326da4e28a46361447a0 = $this->env->getExtension("native_profiler");
        $__internal_aca67931381a261d03a2712f280af8b8d6ef2c8c7639326da4e28a46361447a0->enter($__internal_aca67931381a261d03a2712f280af8b8d6ef2c8c7639326da4e28a46361447a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aca67931381a261d03a2712f280af8b8d6ef2c8c7639326da4e28a46361447a0->leave($__internal_aca67931381a261d03a2712f280af8b8d6ef2c8c7639326da4e28a46361447a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4a3a21ea9655e9b9fb6afd6c8f9a48a9bd4752d97bc0c19bb24096d917bffb7 = $this->env->getExtension("native_profiler");
        $__internal_a4a3a21ea9655e9b9fb6afd6c8f9a48a9bd4752d97bc0c19bb24096d917bffb7->enter($__internal_a4a3a21ea9655e9b9fb6afd6c8f9a48a9bd4752d97bc0c19bb24096d917bffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a4a3a21ea9655e9b9fb6afd6c8f9a48a9bd4752d97bc0c19bb24096d917bffb7->leave($__internal_a4a3a21ea9655e9b9fb6afd6c8f9a48a9bd4752d97bc0c19bb24096d917bffb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
