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
        $__internal_803bf0471ba8af71abf1fe9c7260d6ba269d360f06221c96ae63a6557a4ea2d9 = $this->env->getExtension("native_profiler");
        $__internal_803bf0471ba8af71abf1fe9c7260d6ba269d360f06221c96ae63a6557a4ea2d9->enter($__internal_803bf0471ba8af71abf1fe9c7260d6ba269d360f06221c96ae63a6557a4ea2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_803bf0471ba8af71abf1fe9c7260d6ba269d360f06221c96ae63a6557a4ea2d9->leave($__internal_803bf0471ba8af71abf1fe9c7260d6ba269d360f06221c96ae63a6557a4ea2d9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3d1876cd84da7b81416d66896607b4fbabf73145b73c56e15fdf4ffb62feef8 = $this->env->getExtension("native_profiler");
        $__internal_f3d1876cd84da7b81416d66896607b4fbabf73145b73c56e15fdf4ffb62feef8->enter($__internal_f3d1876cd84da7b81416d66896607b4fbabf73145b73c56e15fdf4ffb62feef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f3d1876cd84da7b81416d66896607b4fbabf73145b73c56e15fdf4ffb62feef8->leave($__internal_f3d1876cd84da7b81416d66896607b4fbabf73145b73c56e15fdf4ffb62feef8_prof);

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
