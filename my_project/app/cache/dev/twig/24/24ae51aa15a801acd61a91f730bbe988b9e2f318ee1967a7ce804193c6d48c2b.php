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
        $__internal_22e095b40a80fb1d51fca21cba9357cebee6504236d636c07b17785ac9730221 = $this->env->getExtension("native_profiler");
        $__internal_22e095b40a80fb1d51fca21cba9357cebee6504236d636c07b17785ac9730221->enter($__internal_22e095b40a80fb1d51fca21cba9357cebee6504236d636c07b17785ac9730221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e095b40a80fb1d51fca21cba9357cebee6504236d636c07b17785ac9730221->leave($__internal_22e095b40a80fb1d51fca21cba9357cebee6504236d636c07b17785ac9730221_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1cb94daf0fea2820b82d3c6a7075df5aadd66f513f641a27ce86f42051fa253 = $this->env->getExtension("native_profiler");
        $__internal_a1cb94daf0fea2820b82d3c6a7075df5aadd66f513f641a27ce86f42051fa253->enter($__internal_a1cb94daf0fea2820b82d3c6a7075df5aadd66f513f641a27ce86f42051fa253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a1cb94daf0fea2820b82d3c6a7075df5aadd66f513f641a27ce86f42051fa253->leave($__internal_a1cb94daf0fea2820b82d3c6a7075df5aadd66f513f641a27ce86f42051fa253_prof);

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
