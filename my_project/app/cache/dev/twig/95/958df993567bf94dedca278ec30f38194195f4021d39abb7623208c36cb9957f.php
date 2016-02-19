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
        $__internal_bfc2cffb18b7cf5f4c745c8586805dadad7d013335a11500605d713e3c4ed8ef = $this->env->getExtension("native_profiler");
        $__internal_bfc2cffb18b7cf5f4c745c8586805dadad7d013335a11500605d713e3c4ed8ef->enter($__internal_bfc2cffb18b7cf5f4c745c8586805dadad7d013335a11500605d713e3c4ed8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bfc2cffb18b7cf5f4c745c8586805dadad7d013335a11500605d713e3c4ed8ef->leave($__internal_bfc2cffb18b7cf5f4c745c8586805dadad7d013335a11500605d713e3c4ed8ef_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_072b4f229b930a616fc38ec519c657294bb36ddb0ff6b557181f83318cff03b6 = $this->env->getExtension("native_profiler");
        $__internal_072b4f229b930a616fc38ec519c657294bb36ddb0ff6b557181f83318cff03b6->enter($__internal_072b4f229b930a616fc38ec519c657294bb36ddb0ff6b557181f83318cff03b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_072b4f229b930a616fc38ec519c657294bb36ddb0ff6b557181f83318cff03b6->leave($__internal_072b4f229b930a616fc38ec519c657294bb36ddb0ff6b557181f83318cff03b6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_572dc91104e66a25bfd1820193c01fd3bc27115090fff5cca7e53410b25761ee = $this->env->getExtension("native_profiler");
        $__internal_572dc91104e66a25bfd1820193c01fd3bc27115090fff5cca7e53410b25761ee->enter($__internal_572dc91104e66a25bfd1820193c01fd3bc27115090fff5cca7e53410b25761ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_572dc91104e66a25bfd1820193c01fd3bc27115090fff5cca7e53410b25761ee->leave($__internal_572dc91104e66a25bfd1820193c01fd3bc27115090fff5cca7e53410b25761ee_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1cf78264a2f2a14578a98ad6a93b28f8c30ee41ecde1a3f5ae886e7ba3fff558 = $this->env->getExtension("native_profiler");
        $__internal_1cf78264a2f2a14578a98ad6a93b28f8c30ee41ecde1a3f5ae886e7ba3fff558->enter($__internal_1cf78264a2f2a14578a98ad6a93b28f8c30ee41ecde1a3f5ae886e7ba3fff558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1cf78264a2f2a14578a98ad6a93b28f8c30ee41ecde1a3f5ae886e7ba3fff558->leave($__internal_1cf78264a2f2a14578a98ad6a93b28f8c30ee41ecde1a3f5ae886e7ba3fff558_prof);

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
