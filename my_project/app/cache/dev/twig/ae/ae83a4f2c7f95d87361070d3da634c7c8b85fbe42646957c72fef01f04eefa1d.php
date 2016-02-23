<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_41e5235dd947051c35b69810bd83fcc77f831fdde4042acf22e0f73719d40726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_fcc7b753a4fef5e35c6c5891c7685803251864f30397f759650f4cd1d8c0875e = $this->env->getExtension("native_profiler");
        $__internal_fcc7b753a4fef5e35c6c5891c7685803251864f30397f759650f4cd1d8c0875e->enter($__internal_fcc7b753a4fef5e35c6c5891c7685803251864f30397f759650f4cd1d8c0875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc7b753a4fef5e35c6c5891c7685803251864f30397f759650f4cd1d8c0875e->leave($__internal_fcc7b753a4fef5e35c6c5891c7685803251864f30397f759650f4cd1d8c0875e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4895618ee4fea28200a0fd0c3e578f02267d47f01668ace0f5dd1fc2686e73bd = $this->env->getExtension("native_profiler");
        $__internal_4895618ee4fea28200a0fd0c3e578f02267d47f01668ace0f5dd1fc2686e73bd->enter($__internal_4895618ee4fea28200a0fd0c3e578f02267d47f01668ace0f5dd1fc2686e73bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4895618ee4fea28200a0fd0c3e578f02267d47f01668ace0f5dd1fc2686e73bd->leave($__internal_4895618ee4fea28200a0fd0c3e578f02267d47f01668ace0f5dd1fc2686e73bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
