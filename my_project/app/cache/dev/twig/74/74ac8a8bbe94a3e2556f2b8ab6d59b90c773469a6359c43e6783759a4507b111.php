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
        $__internal_3290e39cf9e091aa6d29ccc77f3e8b480a722c2551496c7d2ab0086ba5ea338b = $this->env->getExtension("native_profiler");
        $__internal_3290e39cf9e091aa6d29ccc77f3e8b480a722c2551496c7d2ab0086ba5ea338b->enter($__internal_3290e39cf9e091aa6d29ccc77f3e8b480a722c2551496c7d2ab0086ba5ea338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3290e39cf9e091aa6d29ccc77f3e8b480a722c2551496c7d2ab0086ba5ea338b->leave($__internal_3290e39cf9e091aa6d29ccc77f3e8b480a722c2551496c7d2ab0086ba5ea338b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eeeba45e308369473aad7866efb5bc134d485f9e6e15d7d82bc4b4ab41892ae2 = $this->env->getExtension("native_profiler");
        $__internal_eeeba45e308369473aad7866efb5bc134d485f9e6e15d7d82bc4b4ab41892ae2->enter($__internal_eeeba45e308369473aad7866efb5bc134d485f9e6e15d7d82bc4b4ab41892ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        // line 6
        echo "
";
        
        $__internal_eeeba45e308369473aad7866efb5bc134d485f9e6e15d7d82bc4b4ab41892ae2->leave($__internal_eeeba45e308369473aad7866efb5bc134d485f9e6e15d7d82bc4b4ab41892ae2_prof);

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
