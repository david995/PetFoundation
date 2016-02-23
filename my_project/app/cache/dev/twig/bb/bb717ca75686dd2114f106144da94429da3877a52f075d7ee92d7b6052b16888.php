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
        $__internal_33bb3fa1a088b62e5a9e8ba75b2162802d734f0121161a6df6879ab5f5159fbc = $this->env->getExtension("native_profiler");
        $__internal_33bb3fa1a088b62e5a9e8ba75b2162802d734f0121161a6df6879ab5f5159fbc->enter($__internal_33bb3fa1a088b62e5a9e8ba75b2162802d734f0121161a6df6879ab5f5159fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33bb3fa1a088b62e5a9e8ba75b2162802d734f0121161a6df6879ab5f5159fbc->leave($__internal_33bb3fa1a088b62e5a9e8ba75b2162802d734f0121161a6df6879ab5f5159fbc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f0401e10ac5133a0402c47b12ea2708d9e9f87e36eeb912a2d93267a6d34cf7 = $this->env->getExtension("native_profiler");
        $__internal_1f0401e10ac5133a0402c47b12ea2708d9e9f87e36eeb912a2d93267a6d34cf7->enter($__internal_1f0401e10ac5133a0402c47b12ea2708d9e9f87e36eeb912a2d93267a6d34cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1f0401e10ac5133a0402c47b12ea2708d9e9f87e36eeb912a2d93267a6d34cf7->leave($__internal_1f0401e10ac5133a0402c47b12ea2708d9e9f87e36eeb912a2d93267a6d34cf7_prof);

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
