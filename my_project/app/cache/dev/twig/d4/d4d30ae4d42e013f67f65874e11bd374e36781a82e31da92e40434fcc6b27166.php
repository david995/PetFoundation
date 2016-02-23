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
        $__internal_129b1ea3834b7e7aed86e6ecb53c15023a8f0f0b32f755e9e1bbb8ecb0b10eb1 = $this->env->getExtension("native_profiler");
        $__internal_129b1ea3834b7e7aed86e6ecb53c15023a8f0f0b32f755e9e1bbb8ecb0b10eb1->enter($__internal_129b1ea3834b7e7aed86e6ecb53c15023a8f0f0b32f755e9e1bbb8ecb0b10eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129b1ea3834b7e7aed86e6ecb53c15023a8f0f0b32f755e9e1bbb8ecb0b10eb1->leave($__internal_129b1ea3834b7e7aed86e6ecb53c15023a8f0f0b32f755e9e1bbb8ecb0b10eb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b28bf27026ff166ba5eb2deba5c9c26b5eb2912dbf314b920b0db6704a3349ec = $this->env->getExtension("native_profiler");
        $__internal_b28bf27026ff166ba5eb2deba5c9c26b5eb2912dbf314b920b0db6704a3349ec->enter($__internal_b28bf27026ff166ba5eb2deba5c9c26b5eb2912dbf314b920b0db6704a3349ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b28bf27026ff166ba5eb2deba5c9c26b5eb2912dbf314b920b0db6704a3349ec->leave($__internal_b28bf27026ff166ba5eb2deba5c9c26b5eb2912dbf314b920b0db6704a3349ec_prof);

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
