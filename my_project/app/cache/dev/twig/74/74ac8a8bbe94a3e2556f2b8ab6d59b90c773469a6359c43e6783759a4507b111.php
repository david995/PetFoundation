<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6d38508b1fb8cb9a43aee5d1177090e59f4bb4c61c4660e751d639da61a1e64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3e1d6b90398ef8269dc14e2be6fd0f2c33ba44c303d2245cdb851c6ef8ead273 = $this->env->getExtension("native_profiler");
        $__internal_3e1d6b90398ef8269dc14e2be6fd0f2c33ba44c303d2245cdb851c6ef8ead273->enter($__internal_3e1d6b90398ef8269dc14e2be6fd0f2c33ba44c303d2245cdb851c6ef8ead273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e1d6b90398ef8269dc14e2be6fd0f2c33ba44c303d2245cdb851c6ef8ead273->leave($__internal_3e1d6b90398ef8269dc14e2be6fd0f2c33ba44c303d2245cdb851c6ef8ead273_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef44019d94258ff607ffafc94cc2561a831c3490b8c7299a96c0b0c7be2afeb0 = $this->env->getExtension("native_profiler");
        $__internal_ef44019d94258ff607ffafc94cc2561a831c3490b8c7299a96c0b0c7be2afeb0->enter($__internal_ef44019d94258ff607ffafc94cc2561a831c3490b8c7299a96c0b0c7be2afeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        // line 6
        echo "
";
        
        $__internal_ef44019d94258ff607ffafc94cc2561a831c3490b8c7299a96c0b0c7be2afeb0->leave($__internal_ef44019d94258ff607ffafc94cc2561a831c3490b8c7299a96c0b0c7be2afeb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
