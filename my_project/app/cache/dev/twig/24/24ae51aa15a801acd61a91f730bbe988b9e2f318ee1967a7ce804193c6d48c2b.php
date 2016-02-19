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
        $__internal_ebc05c95a46226426a29cd78e5461a9efb2007b1144eff0b9928dc97c3dc4097 = $this->env->getExtension("native_profiler");
        $__internal_ebc05c95a46226426a29cd78e5461a9efb2007b1144eff0b9928dc97c3dc4097->enter($__internal_ebc05c95a46226426a29cd78e5461a9efb2007b1144eff0b9928dc97c3dc4097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc05c95a46226426a29cd78e5461a9efb2007b1144eff0b9928dc97c3dc4097->leave($__internal_ebc05c95a46226426a29cd78e5461a9efb2007b1144eff0b9928dc97c3dc4097_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1718934247716fdfff033bfe809969e852c84e13441224ca282b6fd18431db44 = $this->env->getExtension("native_profiler");
        $__internal_1718934247716fdfff033bfe809969e852c84e13441224ca282b6fd18431db44->enter($__internal_1718934247716fdfff033bfe809969e852c84e13441224ca282b6fd18431db44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1718934247716fdfff033bfe809969e852c84e13441224ca282b6fd18431db44->leave($__internal_1718934247716fdfff033bfe809969e852c84e13441224ca282b6fd18431db44_prof);

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
