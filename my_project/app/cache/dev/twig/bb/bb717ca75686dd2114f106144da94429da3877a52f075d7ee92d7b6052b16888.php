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
        $__internal_03c81a6591de7db5444ce3096d668fe461d2c0ed45df3165b9e07f9a56f40119 = $this->env->getExtension("native_profiler");
        $__internal_03c81a6591de7db5444ce3096d668fe461d2c0ed45df3165b9e07f9a56f40119->enter($__internal_03c81a6591de7db5444ce3096d668fe461d2c0ed45df3165b9e07f9a56f40119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c81a6591de7db5444ce3096d668fe461d2c0ed45df3165b9e07f9a56f40119->leave($__internal_03c81a6591de7db5444ce3096d668fe461d2c0ed45df3165b9e07f9a56f40119_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ac214fb042084c42edbaac639ba731711934be4364be56e36e59a46c95f0f31 = $this->env->getExtension("native_profiler");
        $__internal_1ac214fb042084c42edbaac639ba731711934be4364be56e36e59a46c95f0f31->enter($__internal_1ac214fb042084c42edbaac639ba731711934be4364be56e36e59a46c95f0f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1ac214fb042084c42edbaac639ba731711934be4364be56e36e59a46c95f0f31->leave($__internal_1ac214fb042084c42edbaac639ba731711934be4364be56e36e59a46c95f0f31_prof);

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
