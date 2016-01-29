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
        $__internal_a160357fb1c8b16e492440a8a0bd0e55bee2afa72076fb8630758fb76c00d897 = $this->env->getExtension("native_profiler");
        $__internal_a160357fb1c8b16e492440a8a0bd0e55bee2afa72076fb8630758fb76c00d897->enter($__internal_a160357fb1c8b16e492440a8a0bd0e55bee2afa72076fb8630758fb76c00d897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a160357fb1c8b16e492440a8a0bd0e55bee2afa72076fb8630758fb76c00d897->leave($__internal_a160357fb1c8b16e492440a8a0bd0e55bee2afa72076fb8630758fb76c00d897_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34a0c4cfd6aaec2ebca963c5170ce624d25f09d447df8c5184683b06582efe8b = $this->env->getExtension("native_profiler");
        $__internal_34a0c4cfd6aaec2ebca963c5170ce624d25f09d447df8c5184683b06582efe8b->enter($__internal_34a0c4cfd6aaec2ebca963c5170ce624d25f09d447df8c5184683b06582efe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_34a0c4cfd6aaec2ebca963c5170ce624d25f09d447df8c5184683b06582efe8b->leave($__internal_34a0c4cfd6aaec2ebca963c5170ce624d25f09d447df8c5184683b06582efe8b_prof);

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
