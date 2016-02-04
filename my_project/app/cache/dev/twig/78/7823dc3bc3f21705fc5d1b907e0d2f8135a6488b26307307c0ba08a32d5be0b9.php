<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_3c5384e206ede9db745c3cee99b9dbe494ff9c75d101613c3b1ea9e64e592d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_949ea096a213a987ce62992c69a45952f5e33351326d9bd8b67690040c9d8ac9 = $this->env->getExtension("native_profiler");
        $__internal_949ea096a213a987ce62992c69a45952f5e33351326d9bd8b67690040c9d8ac9->enter($__internal_949ea096a213a987ce62992c69a45952f5e33351326d9bd8b67690040c9d8ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_949ea096a213a987ce62992c69a45952f5e33351326d9bd8b67690040c9d8ac9->leave($__internal_949ea096a213a987ce62992c69a45952f5e33351326d9bd8b67690040c9d8ac9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecb77711ff6b70ed57b83deeb3917ae163381f2d13ce897cb9a0a3ee4105f395 = $this->env->getExtension("native_profiler");
        $__internal_ecb77711ff6b70ed57b83deeb3917ae163381f2d13ce897cb9a0a3ee4105f395->enter($__internal_ecb77711ff6b70ed57b83deeb3917ae163381f2d13ce897cb9a0a3ee4105f395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ecb77711ff6b70ed57b83deeb3917ae163381f2d13ce897cb9a0a3ee4105f395->leave($__internal_ecb77711ff6b70ed57b83deeb3917ae163381f2d13ce897cb9a0a3ee4105f395_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
