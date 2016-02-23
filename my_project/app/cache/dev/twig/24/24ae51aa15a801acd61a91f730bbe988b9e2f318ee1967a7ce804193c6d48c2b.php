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
        $__internal_fcd0bb4e1264b1832175ffe636d7a231d24733dabab658a5d87028d0177e3d59 = $this->env->getExtension("native_profiler");
        $__internal_fcd0bb4e1264b1832175ffe636d7a231d24733dabab658a5d87028d0177e3d59->enter($__internal_fcd0bb4e1264b1832175ffe636d7a231d24733dabab658a5d87028d0177e3d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd0bb4e1264b1832175ffe636d7a231d24733dabab658a5d87028d0177e3d59->leave($__internal_fcd0bb4e1264b1832175ffe636d7a231d24733dabab658a5d87028d0177e3d59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37d36eef36389ce807fa6e2087b2196ed6779b28e88c89d7af784b0450596888 = $this->env->getExtension("native_profiler");
        $__internal_37d36eef36389ce807fa6e2087b2196ed6779b28e88c89d7af784b0450596888->enter($__internal_37d36eef36389ce807fa6e2087b2196ed6779b28e88c89d7af784b0450596888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_37d36eef36389ce807fa6e2087b2196ed6779b28e88c89d7af784b0450596888->leave($__internal_37d36eef36389ce807fa6e2087b2196ed6779b28e88c89d7af784b0450596888_prof);

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
