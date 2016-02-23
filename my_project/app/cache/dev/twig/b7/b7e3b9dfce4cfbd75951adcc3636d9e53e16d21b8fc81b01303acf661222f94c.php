<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a7d903703dd7c22223549da30b76bd12645e9a2a891e198f4ef7f52e771c64b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_076d33e6264c2c95f90f1096255bd5b6034c885714b34e4e4d691b1084ae7336 = $this->env->getExtension("native_profiler");
        $__internal_076d33e6264c2c95f90f1096255bd5b6034c885714b34e4e4d691b1084ae7336->enter($__internal_076d33e6264c2c95f90f1096255bd5b6034c885714b34e4e4d691b1084ae7336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_076d33e6264c2c95f90f1096255bd5b6034c885714b34e4e4d691b1084ae7336->leave($__internal_076d33e6264c2c95f90f1096255bd5b6034c885714b34e4e4d691b1084ae7336_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63b078e418f96e35e9fd7b789f8cd8dc72725430bbe6a61a940d759ab5a181dd = $this->env->getExtension("native_profiler");
        $__internal_63b078e418f96e35e9fd7b789f8cd8dc72725430bbe6a61a940d759ab5a181dd->enter($__internal_63b078e418f96e35e9fd7b789f8cd8dc72725430bbe6a61a940d759ab5a181dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_63b078e418f96e35e9fd7b789f8cd8dc72725430bbe6a61a940d759ab5a181dd->leave($__internal_63b078e418f96e35e9fd7b789f8cd8dc72725430bbe6a61a940d759ab5a181dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
