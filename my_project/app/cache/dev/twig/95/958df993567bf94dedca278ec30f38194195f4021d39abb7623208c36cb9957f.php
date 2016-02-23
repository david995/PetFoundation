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
        $__internal_36e4aeb8534fac13df0402130f30a65f61f9b1e528419fb5abc0c55c1ce95dbc = $this->env->getExtension("native_profiler");
        $__internal_36e4aeb8534fac13df0402130f30a65f61f9b1e528419fb5abc0c55c1ce95dbc->enter($__internal_36e4aeb8534fac13df0402130f30a65f61f9b1e528419fb5abc0c55c1ce95dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_36e4aeb8534fac13df0402130f30a65f61f9b1e528419fb5abc0c55c1ce95dbc->leave($__internal_36e4aeb8534fac13df0402130f30a65f61f9b1e528419fb5abc0c55c1ce95dbc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_579a01ad86233b66b9adc7321519dfce7caf134fa5d10d559e8b476673d90e12 = $this->env->getExtension("native_profiler");
        $__internal_579a01ad86233b66b9adc7321519dfce7caf134fa5d10d559e8b476673d90e12->enter($__internal_579a01ad86233b66b9adc7321519dfce7caf134fa5d10d559e8b476673d90e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_579a01ad86233b66b9adc7321519dfce7caf134fa5d10d559e8b476673d90e12->leave($__internal_579a01ad86233b66b9adc7321519dfce7caf134fa5d10d559e8b476673d90e12_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_02ff1aecc794706354bab0d3745e6bfb237e36f238d9c4ec10676e7e9d50a900 = $this->env->getExtension("native_profiler");
        $__internal_02ff1aecc794706354bab0d3745e6bfb237e36f238d9c4ec10676e7e9d50a900->enter($__internal_02ff1aecc794706354bab0d3745e6bfb237e36f238d9c4ec10676e7e9d50a900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_02ff1aecc794706354bab0d3745e6bfb237e36f238d9c4ec10676e7e9d50a900->leave($__internal_02ff1aecc794706354bab0d3745e6bfb237e36f238d9c4ec10676e7e9d50a900_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d5f899ab0ac71092527c1db304002550eeaa26d023cb3971eda536c020ea251 = $this->env->getExtension("native_profiler");
        $__internal_0d5f899ab0ac71092527c1db304002550eeaa26d023cb3971eda536c020ea251->enter($__internal_0d5f899ab0ac71092527c1db304002550eeaa26d023cb3971eda536c020ea251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0d5f899ab0ac71092527c1db304002550eeaa26d023cb3971eda536c020ea251->leave($__internal_0d5f899ab0ac71092527c1db304002550eeaa26d023cb3971eda536c020ea251_prof);

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
