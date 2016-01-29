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
        $__internal_e15edf12ac6582532ecaff794232154308591eab3065e166d95ad276ea14b776 = $this->env->getExtension("native_profiler");
        $__internal_e15edf12ac6582532ecaff794232154308591eab3065e166d95ad276ea14b776->enter($__internal_e15edf12ac6582532ecaff794232154308591eab3065e166d95ad276ea14b776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e15edf12ac6582532ecaff794232154308591eab3065e166d95ad276ea14b776->leave($__internal_e15edf12ac6582532ecaff794232154308591eab3065e166d95ad276ea14b776_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_694dcfafe14f99550910db164d3c87afef7d6596a0effa692491a6be30686766 = $this->env->getExtension("native_profiler");
        $__internal_694dcfafe14f99550910db164d3c87afef7d6596a0effa692491a6be30686766->enter($__internal_694dcfafe14f99550910db164d3c87afef7d6596a0effa692491a6be30686766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_694dcfafe14f99550910db164d3c87afef7d6596a0effa692491a6be30686766->leave($__internal_694dcfafe14f99550910db164d3c87afef7d6596a0effa692491a6be30686766_prof);

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
