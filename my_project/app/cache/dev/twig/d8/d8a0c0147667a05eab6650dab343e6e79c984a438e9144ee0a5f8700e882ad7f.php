<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_cc0f28f2c2cdee2dfbe8e991df5b6ce45543e59bec4144a0af28d95cc526e572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_34eb8adb6639361134ea00ebdb26b11b3389713094e3fedb4936eab0de8e9c3a = $this->env->getExtension("native_profiler");
        $__internal_34eb8adb6639361134ea00ebdb26b11b3389713094e3fedb4936eab0de8e9c3a->enter($__internal_34eb8adb6639361134ea00ebdb26b11b3389713094e3fedb4936eab0de8e9c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34eb8adb6639361134ea00ebdb26b11b3389713094e3fedb4936eab0de8e9c3a->leave($__internal_34eb8adb6639361134ea00ebdb26b11b3389713094e3fedb4936eab0de8e9c3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03dbe332a1cf8d47e9c2ded9597c3012fa06e900e50aefb6df57edfc097ffd11 = $this->env->getExtension("native_profiler");
        $__internal_03dbe332a1cf8d47e9c2ded9597c3012fa06e900e50aefb6df57edfc097ffd11->enter($__internal_03dbe332a1cf8d47e9c2ded9597c3012fa06e900e50aefb6df57edfc097ffd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_03dbe332a1cf8d47e9c2ded9597c3012fa06e900e50aefb6df57edfc097ffd11->leave($__internal_03dbe332a1cf8d47e9c2ded9597c3012fa06e900e50aefb6df57edfc097ffd11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
