<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9a34e2003cb380f62f33cbf5f15e9ca72c378a9a3488b636c32ab1cf32247715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7e0de8826e25739508128137d5f84a6673935cf96fb38dd23f2a67c2824f77cf = $this->env->getExtension("native_profiler");
        $__internal_7e0de8826e25739508128137d5f84a6673935cf96fb38dd23f2a67c2824f77cf->enter($__internal_7e0de8826e25739508128137d5f84a6673935cf96fb38dd23f2a67c2824f77cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0de8826e25739508128137d5f84a6673935cf96fb38dd23f2a67c2824f77cf->leave($__internal_7e0de8826e25739508128137d5f84a6673935cf96fb38dd23f2a67c2824f77cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37159728574204ad45c3f5b9b56ec12d5947ef455468a4597e95d24093e508f1 = $this->env->getExtension("native_profiler");
        $__internal_37159728574204ad45c3f5b9b56ec12d5947ef455468a4597e95d24093e508f1->enter($__internal_37159728574204ad45c3f5b9b56ec12d5947ef455468a4597e95d24093e508f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_37159728574204ad45c3f5b9b56ec12d5947ef455468a4597e95d24093e508f1->leave($__internal_37159728574204ad45c3f5b9b56ec12d5947ef455468a4597e95d24093e508f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
