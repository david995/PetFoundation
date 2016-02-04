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
        $__internal_27a89cdfbd8e99507652d5806ecdb5e54d38b5cbbd30b51de547664e1be7fd19 = $this->env->getExtension("native_profiler");
        $__internal_27a89cdfbd8e99507652d5806ecdb5e54d38b5cbbd30b51de547664e1be7fd19->enter($__internal_27a89cdfbd8e99507652d5806ecdb5e54d38b5cbbd30b51de547664e1be7fd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a89cdfbd8e99507652d5806ecdb5e54d38b5cbbd30b51de547664e1be7fd19->leave($__internal_27a89cdfbd8e99507652d5806ecdb5e54d38b5cbbd30b51de547664e1be7fd19_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4383ea162397858d10e429c22e07603ad524d1ce998d9a55b58cdfa0e53e3591 = $this->env->getExtension("native_profiler");
        $__internal_4383ea162397858d10e429c22e07603ad524d1ce998d9a55b58cdfa0e53e3591->enter($__internal_4383ea162397858d10e429c22e07603ad524d1ce998d9a55b58cdfa0e53e3591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4383ea162397858d10e429c22e07603ad524d1ce998d9a55b58cdfa0e53e3591->leave($__internal_4383ea162397858d10e429c22e07603ad524d1ce998d9a55b58cdfa0e53e3591_prof);

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
