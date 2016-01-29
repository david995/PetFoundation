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
        $__internal_9b6395f169d956cdd94906f8b888847ccc56370a00c219dd11ae115105f8a8e5 = $this->env->getExtension("native_profiler");
        $__internal_9b6395f169d956cdd94906f8b888847ccc56370a00c219dd11ae115105f8a8e5->enter($__internal_9b6395f169d956cdd94906f8b888847ccc56370a00c219dd11ae115105f8a8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6395f169d956cdd94906f8b888847ccc56370a00c219dd11ae115105f8a8e5->leave($__internal_9b6395f169d956cdd94906f8b888847ccc56370a00c219dd11ae115105f8a8e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ddd8b4ee00c2ea8bd50dc4b4fbd4fe3fca2036baa5bb450e6a96ce1b2d0f057 = $this->env->getExtension("native_profiler");
        $__internal_1ddd8b4ee00c2ea8bd50dc4b4fbd4fe3fca2036baa5bb450e6a96ce1b2d0f057->enter($__internal_1ddd8b4ee00c2ea8bd50dc4b4fbd4fe3fca2036baa5bb450e6a96ce1b2d0f057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1ddd8b4ee00c2ea8bd50dc4b4fbd4fe3fca2036baa5bb450e6a96ce1b2d0f057->leave($__internal_1ddd8b4ee00c2ea8bd50dc4b4fbd4fe3fca2036baa5bb450e6a96ce1b2d0f057_prof);

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
