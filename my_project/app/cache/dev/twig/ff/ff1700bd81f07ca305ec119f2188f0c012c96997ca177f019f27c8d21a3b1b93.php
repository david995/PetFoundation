<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_629ab911e2363598531992b5a148ad33629d84aeb69eafb47a9442918108c9c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4f9a19acb98fd28141b8793d40523762041fe0a33172ad5ab4975fa0bfb25c25 = $this->env->getExtension("native_profiler");
        $__internal_4f9a19acb98fd28141b8793d40523762041fe0a33172ad5ab4975fa0bfb25c25->enter($__internal_4f9a19acb98fd28141b8793d40523762041fe0a33172ad5ab4975fa0bfb25c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f9a19acb98fd28141b8793d40523762041fe0a33172ad5ab4975fa0bfb25c25->leave($__internal_4f9a19acb98fd28141b8793d40523762041fe0a33172ad5ab4975fa0bfb25c25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf821355092b88b09d1d1df460a2c47c58bd8a9681dacb1067105f5577b359b7 = $this->env->getExtension("native_profiler");
        $__internal_bf821355092b88b09d1d1df460a2c47c58bd8a9681dacb1067105f5577b359b7->enter($__internal_bf821355092b88b09d1d1df460a2c47c58bd8a9681dacb1067105f5577b359b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_bf821355092b88b09d1d1df460a2c47c58bd8a9681dacb1067105f5577b359b7->leave($__internal_bf821355092b88b09d1d1df460a2c47c58bd8a9681dacb1067105f5577b359b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
