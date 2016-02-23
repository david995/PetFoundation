<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_119c4df99c4feca3fecdeec472bb7057b811670841610cc9c7c9c47c1fc3dabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_9f6d41f3b1c0133b420219302b7750772d442399ca2a32b334b462d1a7fb9575 = $this->env->getExtension("native_profiler");
        $__internal_9f6d41f3b1c0133b420219302b7750772d442399ca2a32b334b462d1a7fb9575->enter($__internal_9f6d41f3b1c0133b420219302b7750772d442399ca2a32b334b462d1a7fb9575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6d41f3b1c0133b420219302b7750772d442399ca2a32b334b462d1a7fb9575->leave($__internal_9f6d41f3b1c0133b420219302b7750772d442399ca2a32b334b462d1a7fb9575_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18239e7aa5c651b4ca064eff66f29cfd00baec267d3d99d951469fc9d2528f8a = $this->env->getExtension("native_profiler");
        $__internal_18239e7aa5c651b4ca064eff66f29cfd00baec267d3d99d951469fc9d2528f8a->enter($__internal_18239e7aa5c651b4ca064eff66f29cfd00baec267d3d99d951469fc9d2528f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_18239e7aa5c651b4ca064eff66f29cfd00baec267d3d99d951469fc9d2528f8a->leave($__internal_18239e7aa5c651b4ca064eff66f29cfd00baec267d3d99d951469fc9d2528f8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
