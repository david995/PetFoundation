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
        $__internal_fe885b5b3bd6fba444e6dc052f37f3a1854b770f9ee56c07c8669a51140a5ab6 = $this->env->getExtension("native_profiler");
        $__internal_fe885b5b3bd6fba444e6dc052f37f3a1854b770f9ee56c07c8669a51140a5ab6->enter($__internal_fe885b5b3bd6fba444e6dc052f37f3a1854b770f9ee56c07c8669a51140a5ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe885b5b3bd6fba444e6dc052f37f3a1854b770f9ee56c07c8669a51140a5ab6->leave($__internal_fe885b5b3bd6fba444e6dc052f37f3a1854b770f9ee56c07c8669a51140a5ab6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bab64875cea42cb6ea60584d2f8de1140ba516bcee0426ffbe6f3eefef5bb32c = $this->env->getExtension("native_profiler");
        $__internal_bab64875cea42cb6ea60584d2f8de1140ba516bcee0426ffbe6f3eefef5bb32c->enter($__internal_bab64875cea42cb6ea60584d2f8de1140ba516bcee0426ffbe6f3eefef5bb32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_bab64875cea42cb6ea60584d2f8de1140ba516bcee0426ffbe6f3eefef5bb32c->leave($__internal_bab64875cea42cb6ea60584d2f8de1140ba516bcee0426ffbe6f3eefef5bb32c_prof);

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
