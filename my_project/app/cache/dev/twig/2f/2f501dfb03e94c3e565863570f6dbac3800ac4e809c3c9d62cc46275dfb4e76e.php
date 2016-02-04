<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b07e6fb530232a9febc3307c527f678bbfc769d63ccf48db1de677024b0e56a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_843e8346dfe4f4bb5d1dfd1605898ea9a28379f84f5b89b6c7d0f872dee2f6fc = $this->env->getExtension("native_profiler");
        $__internal_843e8346dfe4f4bb5d1dfd1605898ea9a28379f84f5b89b6c7d0f872dee2f6fc->enter($__internal_843e8346dfe4f4bb5d1dfd1605898ea9a28379f84f5b89b6c7d0f872dee2f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nombre ", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email ", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_843e8346dfe4f4bb5d1dfd1605898ea9a28379f84f5b89b6c7d0f872dee2f6fc->leave($__internal_843e8346dfe4f4bb5d1dfd1605898ea9a28379f84f5b89b6c7d0f872dee2f6fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'Nombre '|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'Email '|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
