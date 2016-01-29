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
        $__internal_fffef43e25089c3eb3ce23bc7cb898ef1617c7c6ddc22fea9642aa389d633605 = $this->env->getExtension("native_profiler");
        $__internal_fffef43e25089c3eb3ce23bc7cb898ef1617c7c6ddc22fea9642aa389d633605->enter($__internal_fffef43e25089c3eb3ce23bc7cb898ef1617c7c6ddc22fea9642aa389d633605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffef43e25089c3eb3ce23bc7cb898ef1617c7c6ddc22fea9642aa389d633605->leave($__internal_fffef43e25089c3eb3ce23bc7cb898ef1617c7c6ddc22fea9642aa389d633605_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a8f531385f551fb73bef3834cf67d3b2226dec14011979be1e0f781d0271e3e = $this->env->getExtension("native_profiler");
        $__internal_1a8f531385f551fb73bef3834cf67d3b2226dec14011979be1e0f781d0271e3e->enter($__internal_1a8f531385f551fb73bef3834cf67d3b2226dec14011979be1e0f781d0271e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1a8f531385f551fb73bef3834cf67d3b2226dec14011979be1e0f781d0271e3e->leave($__internal_1a8f531385f551fb73bef3834cf67d3b2226dec14011979be1e0f781d0271e3e_prof);

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
