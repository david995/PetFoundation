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
        $__internal_e69c560e41b2b4786723a1ff52475952802168fc9f45c5babdb698750033dd18 = $this->env->getExtension("native_profiler");
        $__internal_e69c560e41b2b4786723a1ff52475952802168fc9f45c5babdb698750033dd18->enter($__internal_e69c560e41b2b4786723a1ff52475952802168fc9f45c5babdb698750033dd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e69c560e41b2b4786723a1ff52475952802168fc9f45c5babdb698750033dd18->leave($__internal_e69c560e41b2b4786723a1ff52475952802168fc9f45c5babdb698750033dd18_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a05bd0b398b87f780c7342a88db4f8c8ce20afb708e5877b09b022d8ec872a34 = $this->env->getExtension("native_profiler");
        $__internal_a05bd0b398b87f780c7342a88db4f8c8ce20afb708e5877b09b022d8ec872a34->enter($__internal_a05bd0b398b87f780c7342a88db4f8c8ce20afb708e5877b09b022d8ec872a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a05bd0b398b87f780c7342a88db4f8c8ce20afb708e5877b09b022d8ec872a34->leave($__internal_a05bd0b398b87f780c7342a88db4f8c8ce20afb708e5877b09b022d8ec872a34_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d5fbb61597ed6e6602e704220cdf5a39d246ce578d9c8647d6d02ae68f6b0576 = $this->env->getExtension("native_profiler");
        $__internal_d5fbb61597ed6e6602e704220cdf5a39d246ce578d9c8647d6d02ae68f6b0576->enter($__internal_d5fbb61597ed6e6602e704220cdf5a39d246ce578d9c8647d6d02ae68f6b0576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d5fbb61597ed6e6602e704220cdf5a39d246ce578d9c8647d6d02ae68f6b0576->leave($__internal_d5fbb61597ed6e6602e704220cdf5a39d246ce578d9c8647d6d02ae68f6b0576_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_02c075b754fcad8a15eddf7a8b9dd88a0a608a7f8e3e61effcee6d7034481d4c = $this->env->getExtension("native_profiler");
        $__internal_02c075b754fcad8a15eddf7a8b9dd88a0a608a7f8e3e61effcee6d7034481d4c->enter($__internal_02c075b754fcad8a15eddf7a8b9dd88a0a608a7f8e3e61effcee6d7034481d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_02c075b754fcad8a15eddf7a8b9dd88a0a608a7f8e3e61effcee6d7034481d4c->leave($__internal_02c075b754fcad8a15eddf7a8b9dd88a0a608a7f8e3e61effcee6d7034481d4c_prof);

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
