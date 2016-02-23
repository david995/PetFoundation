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
        $__internal_b7dbe9cb0bcb9f030f7c561cbd53bf8b571dea113f62006067462c15d6684a5a = $this->env->getExtension("native_profiler");
        $__internal_b7dbe9cb0bcb9f030f7c561cbd53bf8b571dea113f62006067462c15d6684a5a->enter($__internal_b7dbe9cb0bcb9f030f7c561cbd53bf8b571dea113f62006067462c15d6684a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7dbe9cb0bcb9f030f7c561cbd53bf8b571dea113f62006067462c15d6684a5a->leave($__internal_b7dbe9cb0bcb9f030f7c561cbd53bf8b571dea113f62006067462c15d6684a5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9fb01885b5425021e04950cb9669e9edd44d108eee6d56c784384554ad1d60a = $this->env->getExtension("native_profiler");
        $__internal_e9fb01885b5425021e04950cb9669e9edd44d108eee6d56c784384554ad1d60a->enter($__internal_e9fb01885b5425021e04950cb9669e9edd44d108eee6d56c784384554ad1d60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e9fb01885b5425021e04950cb9669e9edd44d108eee6d56c784384554ad1d60a->leave($__internal_e9fb01885b5425021e04950cb9669e9edd44d108eee6d56c784384554ad1d60a_prof);

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
