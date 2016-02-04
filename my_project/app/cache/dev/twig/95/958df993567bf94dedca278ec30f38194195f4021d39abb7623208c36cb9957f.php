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
        $__internal_324297e83f25d4536643d1b9b73e257c12b1c20588619d04b0270223163094b4 = $this->env->getExtension("native_profiler");
        $__internal_324297e83f25d4536643d1b9b73e257c12b1c20588619d04b0270223163094b4->enter($__internal_324297e83f25d4536643d1b9b73e257c12b1c20588619d04b0270223163094b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_324297e83f25d4536643d1b9b73e257c12b1c20588619d04b0270223163094b4->leave($__internal_324297e83f25d4536643d1b9b73e257c12b1c20588619d04b0270223163094b4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_941a74a9eb202765f210e0e40efecd0cd832532db6d957ba17a442221bda0b2f = $this->env->getExtension("native_profiler");
        $__internal_941a74a9eb202765f210e0e40efecd0cd832532db6d957ba17a442221bda0b2f->enter($__internal_941a74a9eb202765f210e0e40efecd0cd832532db6d957ba17a442221bda0b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_941a74a9eb202765f210e0e40efecd0cd832532db6d957ba17a442221bda0b2f->leave($__internal_941a74a9eb202765f210e0e40efecd0cd832532db6d957ba17a442221bda0b2f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_195f64397893f635962ab77cbdcf697d91d1ac9f60be386fe1f3bcbde1b39c39 = $this->env->getExtension("native_profiler");
        $__internal_195f64397893f635962ab77cbdcf697d91d1ac9f60be386fe1f3bcbde1b39c39->enter($__internal_195f64397893f635962ab77cbdcf697d91d1ac9f60be386fe1f3bcbde1b39c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_195f64397893f635962ab77cbdcf697d91d1ac9f60be386fe1f3bcbde1b39c39->leave($__internal_195f64397893f635962ab77cbdcf697d91d1ac9f60be386fe1f3bcbde1b39c39_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cbfa42f89f5b4582610a6c27ae4459ab3aa00200052ab28830a8a26124e756f0 = $this->env->getExtension("native_profiler");
        $__internal_cbfa42f89f5b4582610a6c27ae4459ab3aa00200052ab28830a8a26124e756f0->enter($__internal_cbfa42f89f5b4582610a6c27ae4459ab3aa00200052ab28830a8a26124e756f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cbfa42f89f5b4582610a6c27ae4459ab3aa00200052ab28830a8a26124e756f0->leave($__internal_cbfa42f89f5b4582610a6c27ae4459ab3aa00200052ab28830a8a26124e756f0_prof);

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
