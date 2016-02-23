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
        $__internal_6afc3547c51aa0f2993c81f99d54e099742069c6c2f41ea817ef4670678642b7 = $this->env->getExtension("native_profiler");
        $__internal_6afc3547c51aa0f2993c81f99d54e099742069c6c2f41ea817ef4670678642b7->enter($__internal_6afc3547c51aa0f2993c81f99d54e099742069c6c2f41ea817ef4670678642b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afc3547c51aa0f2993c81f99d54e099742069c6c2f41ea817ef4670678642b7->leave($__internal_6afc3547c51aa0f2993c81f99d54e099742069c6c2f41ea817ef4670678642b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ece77d74f0529b17d5bfb8c5bdf4350b7ced7d19e34842c1bd6eaf31f790564 = $this->env->getExtension("native_profiler");
        $__internal_5ece77d74f0529b17d5bfb8c5bdf4350b7ced7d19e34842c1bd6eaf31f790564->enter($__internal_5ece77d74f0529b17d5bfb8c5bdf4350b7ced7d19e34842c1bd6eaf31f790564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5ece77d74f0529b17d5bfb8c5bdf4350b7ced7d19e34842c1bd6eaf31f790564->leave($__internal_5ece77d74f0529b17d5bfb8c5bdf4350b7ced7d19e34842c1bd6eaf31f790564_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
