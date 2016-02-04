<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3a33ddd25c02482e15e53e2d608d58016a0cb1037da0f024dab223885560e28c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c2d673c38917f3c22e4ed1aec4fb8d0309a37f801c4273cb161297cc987730d3 = $this->env->getExtension("native_profiler");
        $__internal_c2d673c38917f3c22e4ed1aec4fb8d0309a37f801c4273cb161297cc987730d3->enter($__internal_c2d673c38917f3c22e4ed1aec4fb8d0309a37f801c4273cb161297cc987730d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d673c38917f3c22e4ed1aec4fb8d0309a37f801c4273cb161297cc987730d3->leave($__internal_c2d673c38917f3c22e4ed1aec4fb8d0309a37f801c4273cb161297cc987730d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45445d699f3860f4b701c20170a63c05c5244acbbf1c20e42582124fb4196633 = $this->env->getExtension("native_profiler");
        $__internal_45445d699f3860f4b701c20170a63c05c5244acbbf1c20e42582124fb4196633->enter($__internal_45445d699f3860f4b701c20170a63c05c5244acbbf1c20e42582124fb4196633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_45445d699f3860f4b701c20170a63c05c5244acbbf1c20e42582124fb4196633->leave($__internal_45445d699f3860f4b701c20170a63c05c5244acbbf1c20e42582124fb4196633_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
