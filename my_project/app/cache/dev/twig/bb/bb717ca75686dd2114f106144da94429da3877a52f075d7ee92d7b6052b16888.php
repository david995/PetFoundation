<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_28b1f491037cc9d3da9c950884970c70c0cf12198add28a0521eb8b24308e868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_6f9b9b0fd8083276af953bd4c9aa70b31bc8ca5c64d3e6a91f67896ae264e2d6 = $this->env->getExtension("native_profiler");
        $__internal_6f9b9b0fd8083276af953bd4c9aa70b31bc8ca5c64d3e6a91f67896ae264e2d6->enter($__internal_6f9b9b0fd8083276af953bd4c9aa70b31bc8ca5c64d3e6a91f67896ae264e2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f9b9b0fd8083276af953bd4c9aa70b31bc8ca5c64d3e6a91f67896ae264e2d6->leave($__internal_6f9b9b0fd8083276af953bd4c9aa70b31bc8ca5c64d3e6a91f67896ae264e2d6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4239d4f569248e00b7938f291c34882661e9f8d7bd3f2cd0dd9c0d42663e30b7 = $this->env->getExtension("native_profiler");
        $__internal_4239d4f569248e00b7938f291c34882661e9f8d7bd3f2cd0dd9c0d42663e30b7->enter($__internal_4239d4f569248e00b7938f291c34882661e9f8d7bd3f2cd0dd9c0d42663e30b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4239d4f569248e00b7938f291c34882661e9f8d7bd3f2cd0dd9c0d42663e30b7->leave($__internal_4239d4f569248e00b7938f291c34882661e9f8d7bd3f2cd0dd9c0d42663e30b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
