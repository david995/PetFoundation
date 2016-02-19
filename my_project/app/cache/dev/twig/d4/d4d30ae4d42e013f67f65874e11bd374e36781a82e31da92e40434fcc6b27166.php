<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fcfd1e91d14c67f22e5ff0261c30d1395fb306ade9b7e28c7cc61395cd080c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b75a5136b7bc890911fcacac950a483d6b948fc9d0b6dcabfcc5a4d651dc5546 = $this->env->getExtension("native_profiler");
        $__internal_b75a5136b7bc890911fcacac950a483d6b948fc9d0b6dcabfcc5a4d651dc5546->enter($__internal_b75a5136b7bc890911fcacac950a483d6b948fc9d0b6dcabfcc5a4d651dc5546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b75a5136b7bc890911fcacac950a483d6b948fc9d0b6dcabfcc5a4d651dc5546->leave($__internal_b75a5136b7bc890911fcacac950a483d6b948fc9d0b6dcabfcc5a4d651dc5546_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e61ef7fa34b8f5b123eafd754366b1ac112f539551ef37d8c6d7ba4ec063765 = $this->env->getExtension("native_profiler");
        $__internal_2e61ef7fa34b8f5b123eafd754366b1ac112f539551ef37d8c6d7ba4ec063765->enter($__internal_2e61ef7fa34b8f5b123eafd754366b1ac112f539551ef37d8c6d7ba4ec063765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2e61ef7fa34b8f5b123eafd754366b1ac112f539551ef37d8c6d7ba4ec063765->leave($__internal_2e61ef7fa34b8f5b123eafd754366b1ac112f539551ef37d8c6d7ba4ec063765_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
