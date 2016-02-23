<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_1f595b4f5b87ddc342a1f16d08efd7aeeb84d99d8d7455d89791133fc2407864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_28bb3642d77d180132e5bb8f52cbfbd0edb841d946c825afe69a7f99a4f51e32 = $this->env->getExtension("native_profiler");
        $__internal_28bb3642d77d180132e5bb8f52cbfbd0edb841d946c825afe69a7f99a4f51e32->enter($__internal_28bb3642d77d180132e5bb8f52cbfbd0edb841d946c825afe69a7f99a4f51e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28bb3642d77d180132e5bb8f52cbfbd0edb841d946c825afe69a7f99a4f51e32->leave($__internal_28bb3642d77d180132e5bb8f52cbfbd0edb841d946c825afe69a7f99a4f51e32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b976c6f29329ec34a624ba43a2464be1e516d5cfd0a799408b9f8071505f4909 = $this->env->getExtension("native_profiler");
        $__internal_b976c6f29329ec34a624ba43a2464be1e516d5cfd0a799408b9f8071505f4909->enter($__internal_b976c6f29329ec34a624ba43a2464be1e516d5cfd0a799408b9f8071505f4909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_b976c6f29329ec34a624ba43a2464be1e516d5cfd0a799408b9f8071505f4909->leave($__internal_b976c6f29329ec34a624ba43a2464be1e516d5cfd0a799408b9f8071505f4909_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
