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
        $__internal_5041dd80637b7ed58067718d2e14665a2a9a4e22667c278467304a912dc98be6 = $this->env->getExtension("native_profiler");
        $__internal_5041dd80637b7ed58067718d2e14665a2a9a4e22667c278467304a912dc98be6->enter($__internal_5041dd80637b7ed58067718d2e14665a2a9a4e22667c278467304a912dc98be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5041dd80637b7ed58067718d2e14665a2a9a4e22667c278467304a912dc98be6->leave($__internal_5041dd80637b7ed58067718d2e14665a2a9a4e22667c278467304a912dc98be6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f3396ba2ff0092d84c220ee9311dcbb08717bde3216cf7781138a4e9bd5fa23 = $this->env->getExtension("native_profiler");
        $__internal_6f3396ba2ff0092d84c220ee9311dcbb08717bde3216cf7781138a4e9bd5fa23->enter($__internal_6f3396ba2ff0092d84c220ee9311dcbb08717bde3216cf7781138a4e9bd5fa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6f3396ba2ff0092d84c220ee9311dcbb08717bde3216cf7781138a4e9bd5fa23->leave($__internal_6f3396ba2ff0092d84c220ee9311dcbb08717bde3216cf7781138a4e9bd5fa23_prof);

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
