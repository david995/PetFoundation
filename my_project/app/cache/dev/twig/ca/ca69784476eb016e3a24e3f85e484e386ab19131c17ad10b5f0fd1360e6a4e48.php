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
        $__internal_b7472aec6b46d6965b68c9d3059a24e20dfaf69ef812959c8260697ee4fa783c = $this->env->getExtension("native_profiler");
        $__internal_b7472aec6b46d6965b68c9d3059a24e20dfaf69ef812959c8260697ee4fa783c->enter($__internal_b7472aec6b46d6965b68c9d3059a24e20dfaf69ef812959c8260697ee4fa783c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b7472aec6b46d6965b68c9d3059a24e20dfaf69ef812959c8260697ee4fa783c->leave($__internal_b7472aec6b46d6965b68c9d3059a24e20dfaf69ef812959c8260697ee4fa783c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_11f77619fd22bd9264696c47dfa7aedbcd2de66b060807c67109ba64c9292d95 = $this->env->getExtension("native_profiler");
        $__internal_11f77619fd22bd9264696c47dfa7aedbcd2de66b060807c67109ba64c9292d95->enter($__internal_11f77619fd22bd9264696c47dfa7aedbcd2de66b060807c67109ba64c9292d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_11f77619fd22bd9264696c47dfa7aedbcd2de66b060807c67109ba64c9292d95->leave($__internal_11f77619fd22bd9264696c47dfa7aedbcd2de66b060807c67109ba64c9292d95_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_682573fd63eec53520e32dfcb3147e06a92d39a12042dc0a449de9df0e2224b2 = $this->env->getExtension("native_profiler");
        $__internal_682573fd63eec53520e32dfcb3147e06a92d39a12042dc0a449de9df0e2224b2->enter($__internal_682573fd63eec53520e32dfcb3147e06a92d39a12042dc0a449de9df0e2224b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_682573fd63eec53520e32dfcb3147e06a92d39a12042dc0a449de9df0e2224b2->leave($__internal_682573fd63eec53520e32dfcb3147e06a92d39a12042dc0a449de9df0e2224b2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4ea3ad3d562a1de8826a38c05dc8d3c51a92b18a849bd2207812073ab1b4e708 = $this->env->getExtension("native_profiler");
        $__internal_4ea3ad3d562a1de8826a38c05dc8d3c51a92b18a849bd2207812073ab1b4e708->enter($__internal_4ea3ad3d562a1de8826a38c05dc8d3c51a92b18a849bd2207812073ab1b4e708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4ea3ad3d562a1de8826a38c05dc8d3c51a92b18a849bd2207812073ab1b4e708->leave($__internal_4ea3ad3d562a1de8826a38c05dc8d3c51a92b18a849bd2207812073ab1b4e708_prof);

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
