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
        $__internal_5144bcbd0f4b35187bb52d7d8af7dcdb707df8b6a8bc7ddaf8b713ddbe6bcfca = $this->env->getExtension("native_profiler");
        $__internal_5144bcbd0f4b35187bb52d7d8af7dcdb707df8b6a8bc7ddaf8b713ddbe6bcfca->enter($__internal_5144bcbd0f4b35187bb52d7d8af7dcdb707df8b6a8bc7ddaf8b713ddbe6bcfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5144bcbd0f4b35187bb52d7d8af7dcdb707df8b6a8bc7ddaf8b713ddbe6bcfca->leave($__internal_5144bcbd0f4b35187bb52d7d8af7dcdb707df8b6a8bc7ddaf8b713ddbe6bcfca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2784e02ebd546e90e6ae6f0a28858dbf77e64e582f76b85186711e49d8f28fdd = $this->env->getExtension("native_profiler");
        $__internal_2784e02ebd546e90e6ae6f0a28858dbf77e64e582f76b85186711e49d8f28fdd->enter($__internal_2784e02ebd546e90e6ae6f0a28858dbf77e64e582f76b85186711e49d8f28fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2784e02ebd546e90e6ae6f0a28858dbf77e64e582f76b85186711e49d8f28fdd->leave($__internal_2784e02ebd546e90e6ae6f0a28858dbf77e64e582f76b85186711e49d8f28fdd_prof);

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
