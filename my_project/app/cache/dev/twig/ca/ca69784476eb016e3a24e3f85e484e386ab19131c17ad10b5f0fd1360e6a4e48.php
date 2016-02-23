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
        $__internal_8897c413e88fe73bf06a14f6c29fb34df95fe98db07651af442ac02bc841a8ff = $this->env->getExtension("native_profiler");
        $__internal_8897c413e88fe73bf06a14f6c29fb34df95fe98db07651af442ac02bc841a8ff->enter($__internal_8897c413e88fe73bf06a14f6c29fb34df95fe98db07651af442ac02bc841a8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8897c413e88fe73bf06a14f6c29fb34df95fe98db07651af442ac02bc841a8ff->leave($__internal_8897c413e88fe73bf06a14f6c29fb34df95fe98db07651af442ac02bc841a8ff_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_31250842e992873e7ec04587ae3cf63122dd0f519ef57c60f28b025f602287ad = $this->env->getExtension("native_profiler");
        $__internal_31250842e992873e7ec04587ae3cf63122dd0f519ef57c60f28b025f602287ad->enter($__internal_31250842e992873e7ec04587ae3cf63122dd0f519ef57c60f28b025f602287ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_31250842e992873e7ec04587ae3cf63122dd0f519ef57c60f28b025f602287ad->leave($__internal_31250842e992873e7ec04587ae3cf63122dd0f519ef57c60f28b025f602287ad_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3c8d598a5b5f09b04ff405cd9bbcc4e7205aebfce2efbc120dd8a58e07283f54 = $this->env->getExtension("native_profiler");
        $__internal_3c8d598a5b5f09b04ff405cd9bbcc4e7205aebfce2efbc120dd8a58e07283f54->enter($__internal_3c8d598a5b5f09b04ff405cd9bbcc4e7205aebfce2efbc120dd8a58e07283f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3c8d598a5b5f09b04ff405cd9bbcc4e7205aebfce2efbc120dd8a58e07283f54->leave($__internal_3c8d598a5b5f09b04ff405cd9bbcc4e7205aebfce2efbc120dd8a58e07283f54_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_398e6c02336f0f0f149764913bc85d4db5b96a1ff45b839700726bc8e35b3c3a = $this->env->getExtension("native_profiler");
        $__internal_398e6c02336f0f0f149764913bc85d4db5b96a1ff45b839700726bc8e35b3c3a->enter($__internal_398e6c02336f0f0f149764913bc85d4db5b96a1ff45b839700726bc8e35b3c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_398e6c02336f0f0f149764913bc85d4db5b96a1ff45b839700726bc8e35b3c3a->leave($__internal_398e6c02336f0f0f149764913bc85d4db5b96a1ff45b839700726bc8e35b3c3a_prof);

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
