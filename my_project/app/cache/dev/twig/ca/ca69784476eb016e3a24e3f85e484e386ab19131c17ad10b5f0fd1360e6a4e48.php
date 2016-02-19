<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_536853065e44a3d152d8e88c722e43abb06a062b9a7cd9cea5d680ca680a58a4 extends Twig_Template
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
        $__internal_0cf3ba2a208796402b4a6b168de92e946f68f0a6f57305f57fbabe9eefcfdfca = $this->env->getExtension("native_profiler");
        $__internal_0cf3ba2a208796402b4a6b168de92e946f68f0a6f57305f57fbabe9eefcfdfca->enter($__internal_0cf3ba2a208796402b4a6b168de92e946f68f0a6f57305f57fbabe9eefcfdfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0cf3ba2a208796402b4a6b168de92e946f68f0a6f57305f57fbabe9eefcfdfca->leave($__internal_0cf3ba2a208796402b4a6b168de92e946f68f0a6f57305f57fbabe9eefcfdfca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9a047da04d3026abc749dd2f242895ca45c7263cb8125a4a914b09fca8d23c58 = $this->env->getExtension("native_profiler");
        $__internal_9a047da04d3026abc749dd2f242895ca45c7263cb8125a4a914b09fca8d23c58->enter($__internal_9a047da04d3026abc749dd2f242895ca45c7263cb8125a4a914b09fca8d23c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9a047da04d3026abc749dd2f242895ca45c7263cb8125a4a914b09fca8d23c58->leave($__internal_9a047da04d3026abc749dd2f242895ca45c7263cb8125a4a914b09fca8d23c58_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d38ebd7b6d148e7313c6055c005764248ecc25de3916645a9a351dd9df4ef152 = $this->env->getExtension("native_profiler");
        $__internal_d38ebd7b6d148e7313c6055c005764248ecc25de3916645a9a351dd9df4ef152->enter($__internal_d38ebd7b6d148e7313c6055c005764248ecc25de3916645a9a351dd9df4ef152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d38ebd7b6d148e7313c6055c005764248ecc25de3916645a9a351dd9df4ef152->leave($__internal_d38ebd7b6d148e7313c6055c005764248ecc25de3916645a9a351dd9df4ef152_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3eaa348712d94c05ca08758ffea040a6914c1f7a066da574231710d67b3e4b17 = $this->env->getExtension("native_profiler");
        $__internal_3eaa348712d94c05ca08758ffea040a6914c1f7a066da574231710d67b3e4b17->enter($__internal_3eaa348712d94c05ca08758ffea040a6914c1f7a066da574231710d67b3e4b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3eaa348712d94c05ca08758ffea040a6914c1f7a066da574231710d67b3e4b17->leave($__internal_3eaa348712d94c05ca08758ffea040a6914c1f7a066da574231710d67b3e4b17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
