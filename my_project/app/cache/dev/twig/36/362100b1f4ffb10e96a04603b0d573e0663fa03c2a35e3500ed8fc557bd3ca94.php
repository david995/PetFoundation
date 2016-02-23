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
        $__internal_4ff8d9f96a57c18f40991073da8d8e6f63e82b69c5e0d7d516c73c4a5763814e = $this->env->getExtension("native_profiler");
        $__internal_4ff8d9f96a57c18f40991073da8d8e6f63e82b69c5e0d7d516c73c4a5763814e->enter($__internal_4ff8d9f96a57c18f40991073da8d8e6f63e82b69c5e0d7d516c73c4a5763814e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ff8d9f96a57c18f40991073da8d8e6f63e82b69c5e0d7d516c73c4a5763814e->leave($__internal_4ff8d9f96a57c18f40991073da8d8e6f63e82b69c5e0d7d516c73c4a5763814e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc656584fcaef425e44bc75b00dd16f8cac016b316f910bd6c1e0c0f93b2006f = $this->env->getExtension("native_profiler");
        $__internal_dc656584fcaef425e44bc75b00dd16f8cac016b316f910bd6c1e0c0f93b2006f->enter($__internal_dc656584fcaef425e44bc75b00dd16f8cac016b316f910bd6c1e0c0f93b2006f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_dc656584fcaef425e44bc75b00dd16f8cac016b316f910bd6c1e0c0f93b2006f->leave($__internal_dc656584fcaef425e44bc75b00dd16f8cac016b316f910bd6c1e0c0f93b2006f_prof);

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
