<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_119c4df99c4feca3fecdeec472bb7057b811670841610cc9c7c9c47c1fc3dabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_35930b93a8f0ab4f461bad096abcbbf00a25d515b5c25ffa0d207dc7e528ae25 = $this->env->getExtension("native_profiler");
        $__internal_35930b93a8f0ab4f461bad096abcbbf00a25d515b5c25ffa0d207dc7e528ae25->enter($__internal_35930b93a8f0ab4f461bad096abcbbf00a25d515b5c25ffa0d207dc7e528ae25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35930b93a8f0ab4f461bad096abcbbf00a25d515b5c25ffa0d207dc7e528ae25->leave($__internal_35930b93a8f0ab4f461bad096abcbbf00a25d515b5c25ffa0d207dc7e528ae25_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b535b153b2003fa0a2479d8d2466203d1ac2dcede4cf086fc773e974154e3d89 = $this->env->getExtension("native_profiler");
        $__internal_b535b153b2003fa0a2479d8d2466203d1ac2dcede4cf086fc773e974154e3d89->enter($__internal_b535b153b2003fa0a2479d8d2466203d1ac2dcede4cf086fc773e974154e3d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b535b153b2003fa0a2479d8d2466203d1ac2dcede4cf086fc773e974154e3d89->leave($__internal_b535b153b2003fa0a2479d8d2466203d1ac2dcede4cf086fc773e974154e3d89_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
