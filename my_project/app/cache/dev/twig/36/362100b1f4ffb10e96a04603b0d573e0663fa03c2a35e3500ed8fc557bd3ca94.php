<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_75f67e3b90f1195a6c7ec603bdae171f4cff6ed7bae6518f94a2e6c1ffb60d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c47d756f92e8ab72b09b916dd2f3af175b946c15b5cba30985917c3497c3ca98 = $this->env->getExtension("native_profiler");
        $__internal_c47d756f92e8ab72b09b916dd2f3af175b946c15b5cba30985917c3497c3ca98->enter($__internal_c47d756f92e8ab72b09b916dd2f3af175b946c15b5cba30985917c3497c3ca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c47d756f92e8ab72b09b916dd2f3af175b946c15b5cba30985917c3497c3ca98->leave($__internal_c47d756f92e8ab72b09b916dd2f3af175b946c15b5cba30985917c3497c3ca98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc873100e6a77de20096faee20a59e48b18395c4def42f335f0e2f1f6ac06200 = $this->env->getExtension("native_profiler");
        $__internal_cc873100e6a77de20096faee20a59e48b18395c4def42f335f0e2f1f6ac06200->enter($__internal_cc873100e6a77de20096faee20a59e48b18395c4def42f335f0e2f1f6ac06200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_cc873100e6a77de20096faee20a59e48b18395c4def42f335f0e2f1f6ac06200->leave($__internal_cc873100e6a77de20096faee20a59e48b18395c4def42f335f0e2f1f6ac06200_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
