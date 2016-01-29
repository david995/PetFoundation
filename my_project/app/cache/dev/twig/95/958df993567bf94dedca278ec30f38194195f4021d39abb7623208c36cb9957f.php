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
        $__internal_0f32cf5e12ad8eecd99156119f5ca01c447a861303eb3c3f91bb8a26b56ef136 = $this->env->getExtension("native_profiler");
        $__internal_0f32cf5e12ad8eecd99156119f5ca01c447a861303eb3c3f91bb8a26b56ef136->enter($__internal_0f32cf5e12ad8eecd99156119f5ca01c447a861303eb3c3f91bb8a26b56ef136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0f32cf5e12ad8eecd99156119f5ca01c447a861303eb3c3f91bb8a26b56ef136->leave($__internal_0f32cf5e12ad8eecd99156119f5ca01c447a861303eb3c3f91bb8a26b56ef136_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1f8a4fb83305ff1bdc818b08b7b9ec09b909d3c363a82754ffa62029404f627f = $this->env->getExtension("native_profiler");
        $__internal_1f8a4fb83305ff1bdc818b08b7b9ec09b909d3c363a82754ffa62029404f627f->enter($__internal_1f8a4fb83305ff1bdc818b08b7b9ec09b909d3c363a82754ffa62029404f627f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1f8a4fb83305ff1bdc818b08b7b9ec09b909d3c363a82754ffa62029404f627f->leave($__internal_1f8a4fb83305ff1bdc818b08b7b9ec09b909d3c363a82754ffa62029404f627f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_80ad1ef7b4865bbed643a4fded27b0241406062157a79531d7be515625a8f3b2 = $this->env->getExtension("native_profiler");
        $__internal_80ad1ef7b4865bbed643a4fded27b0241406062157a79531d7be515625a8f3b2->enter($__internal_80ad1ef7b4865bbed643a4fded27b0241406062157a79531d7be515625a8f3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_80ad1ef7b4865bbed643a4fded27b0241406062157a79531d7be515625a8f3b2->leave($__internal_80ad1ef7b4865bbed643a4fded27b0241406062157a79531d7be515625a8f3b2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_74a478a5a69745c57bbe476c5dc618cb119a0f6470d194e8dd52d20bff7b35bc = $this->env->getExtension("native_profiler");
        $__internal_74a478a5a69745c57bbe476c5dc618cb119a0f6470d194e8dd52d20bff7b35bc->enter($__internal_74a478a5a69745c57bbe476c5dc618cb119a0f6470d194e8dd52d20bff7b35bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_74a478a5a69745c57bbe476c5dc618cb119a0f6470d194e8dd52d20bff7b35bc->leave($__internal_74a478a5a69745c57bbe476c5dc618cb119a0f6470d194e8dd52d20bff7b35bc_prof);

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
