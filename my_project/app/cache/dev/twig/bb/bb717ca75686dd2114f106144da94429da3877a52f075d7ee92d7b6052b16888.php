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
        $__internal_93720e6747cc353f9eef7f030d5b35775518efa19700c33c984f924027b66930 = $this->env->getExtension("native_profiler");
        $__internal_93720e6747cc353f9eef7f030d5b35775518efa19700c33c984f924027b66930->enter($__internal_93720e6747cc353f9eef7f030d5b35775518efa19700c33c984f924027b66930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93720e6747cc353f9eef7f030d5b35775518efa19700c33c984f924027b66930->leave($__internal_93720e6747cc353f9eef7f030d5b35775518efa19700c33c984f924027b66930_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abd94b0d60e7019b25b81b5ac1c515de17a5ee2cb22ef700fe0b160da959c307 = $this->env->getExtension("native_profiler");
        $__internal_abd94b0d60e7019b25b81b5ac1c515de17a5ee2cb22ef700fe0b160da959c307->enter($__internal_abd94b0d60e7019b25b81b5ac1c515de17a5ee2cb22ef700fe0b160da959c307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_abd94b0d60e7019b25b81b5ac1c515de17a5ee2cb22ef700fe0b160da959c307->leave($__internal_abd94b0d60e7019b25b81b5ac1c515de17a5ee2cb22ef700fe0b160da959c307_prof);

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
