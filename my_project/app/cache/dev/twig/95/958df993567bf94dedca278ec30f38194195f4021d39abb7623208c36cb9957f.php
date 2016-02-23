<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9e9146c3248c94761f82bbf9fecd66bf04f3a55a3ecd137851bdca9f63d24c3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7deb5d9bb4ecc9631d41ac36b94c4e48d7207d70e73c11685e160c921cf687f = $this->env->getExtension("native_profiler");
        $__internal_c7deb5d9bb4ecc9631d41ac36b94c4e48d7207d70e73c11685e160c921cf687f->enter($__internal_c7deb5d9bb4ecc9631d41ac36b94c4e48d7207d70e73c11685e160c921cf687f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c7deb5d9bb4ecc9631d41ac36b94c4e48d7207d70e73c11685e160c921cf687f->leave($__internal_c7deb5d9bb4ecc9631d41ac36b94c4e48d7207d70e73c11685e160c921cf687f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b2b2a1d0054a415a14e7d62ad1753cfd044cfa89b4d77a9f897394e103261ff3 = $this->env->getExtension("native_profiler");
        $__internal_b2b2a1d0054a415a14e7d62ad1753cfd044cfa89b4d77a9f897394e103261ff3->enter($__internal_b2b2a1d0054a415a14e7d62ad1753cfd044cfa89b4d77a9f897394e103261ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b2b2a1d0054a415a14e7d62ad1753cfd044cfa89b4d77a9f897394e103261ff3->leave($__internal_b2b2a1d0054a415a14e7d62ad1753cfd044cfa89b4d77a9f897394e103261ff3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a0f0cedb4626f92760ba6e4fdf98ae30027afac5689d9156d3261c4c8b3a6106 = $this->env->getExtension("native_profiler");
        $__internal_a0f0cedb4626f92760ba6e4fdf98ae30027afac5689d9156d3261c4c8b3a6106->enter($__internal_a0f0cedb4626f92760ba6e4fdf98ae30027afac5689d9156d3261c4c8b3a6106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a0f0cedb4626f92760ba6e4fdf98ae30027afac5689d9156d3261c4c8b3a6106->leave($__internal_a0f0cedb4626f92760ba6e4fdf98ae30027afac5689d9156d3261c4c8b3a6106_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fdb43e91e5b251a1868b285bc053d04296f88b539b826ecc9aa95c5245fcd476 = $this->env->getExtension("native_profiler");
        $__internal_fdb43e91e5b251a1868b285bc053d04296f88b539b826ecc9aa95c5245fcd476->enter($__internal_fdb43e91e5b251a1868b285bc053d04296f88b539b826ecc9aa95c5245fcd476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fdb43e91e5b251a1868b285bc053d04296f88b539b826ecc9aa95c5245fcd476->leave($__internal_fdb43e91e5b251a1868b285bc053d04296f88b539b826ecc9aa95c5245fcd476_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
