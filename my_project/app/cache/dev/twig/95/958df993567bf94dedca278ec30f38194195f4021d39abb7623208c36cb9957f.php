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
        $__internal_568ffa611774a4288525e7730885ceec06e06fdbead03686aa8b89aef38e1886 = $this->env->getExtension("native_profiler");
        $__internal_568ffa611774a4288525e7730885ceec06e06fdbead03686aa8b89aef38e1886->enter($__internal_568ffa611774a4288525e7730885ceec06e06fdbead03686aa8b89aef38e1886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_568ffa611774a4288525e7730885ceec06e06fdbead03686aa8b89aef38e1886->leave($__internal_568ffa611774a4288525e7730885ceec06e06fdbead03686aa8b89aef38e1886_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0128164227f55749f3fe991a4967a0072e5f62591d72579b4a59061b9f8b083f = $this->env->getExtension("native_profiler");
        $__internal_0128164227f55749f3fe991a4967a0072e5f62591d72579b4a59061b9f8b083f->enter($__internal_0128164227f55749f3fe991a4967a0072e5f62591d72579b4a59061b9f8b083f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0128164227f55749f3fe991a4967a0072e5f62591d72579b4a59061b9f8b083f->leave($__internal_0128164227f55749f3fe991a4967a0072e5f62591d72579b4a59061b9f8b083f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_89012476652407b90ad2fd2ccdf059aa5df8760c96491f577d670c991cfe1867 = $this->env->getExtension("native_profiler");
        $__internal_89012476652407b90ad2fd2ccdf059aa5df8760c96491f577d670c991cfe1867->enter($__internal_89012476652407b90ad2fd2ccdf059aa5df8760c96491f577d670c991cfe1867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_89012476652407b90ad2fd2ccdf059aa5df8760c96491f577d670c991cfe1867->leave($__internal_89012476652407b90ad2fd2ccdf059aa5df8760c96491f577d670c991cfe1867_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0e47f5c46f321613b6275cfb54ef4ea76d7064808f1e644205e208b5cdedf103 = $this->env->getExtension("native_profiler");
        $__internal_0e47f5c46f321613b6275cfb54ef4ea76d7064808f1e644205e208b5cdedf103->enter($__internal_0e47f5c46f321613b6275cfb54ef4ea76d7064808f1e644205e208b5cdedf103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0e47f5c46f321613b6275cfb54ef4ea76d7064808f1e644205e208b5cdedf103->leave($__internal_0e47f5c46f321613b6275cfb54ef4ea76d7064808f1e644205e208b5cdedf103_prof);

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
