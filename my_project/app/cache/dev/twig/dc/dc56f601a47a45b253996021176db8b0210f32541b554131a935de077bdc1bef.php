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
        $__internal_3738ce6106f7ef1a9550c7684c09ff02cd720e6297624948d1d0d8ed2ea3743f = $this->env->getExtension("native_profiler");
        $__internal_3738ce6106f7ef1a9550c7684c09ff02cd720e6297624948d1d0d8ed2ea3743f->enter($__internal_3738ce6106f7ef1a9550c7684c09ff02cd720e6297624948d1d0d8ed2ea3743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3738ce6106f7ef1a9550c7684c09ff02cd720e6297624948d1d0d8ed2ea3743f->leave($__internal_3738ce6106f7ef1a9550c7684c09ff02cd720e6297624948d1d0d8ed2ea3743f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_981e0c45803ba4770edcc88494528225c9ef6665b447aee5ec610309a5f2cdf0 = $this->env->getExtension("native_profiler");
        $__internal_981e0c45803ba4770edcc88494528225c9ef6665b447aee5ec610309a5f2cdf0->enter($__internal_981e0c45803ba4770edcc88494528225c9ef6665b447aee5ec610309a5f2cdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_981e0c45803ba4770edcc88494528225c9ef6665b447aee5ec610309a5f2cdf0->leave($__internal_981e0c45803ba4770edcc88494528225c9ef6665b447aee5ec610309a5f2cdf0_prof);

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
