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
        $__internal_53b53d6886417b81c6fe4df8b06b1176b095e6abff7388ece068aeb16c45f1f6 = $this->env->getExtension("native_profiler");
        $__internal_53b53d6886417b81c6fe4df8b06b1176b095e6abff7388ece068aeb16c45f1f6->enter($__internal_53b53d6886417b81c6fe4df8b06b1176b095e6abff7388ece068aeb16c45f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_53b53d6886417b81c6fe4df8b06b1176b095e6abff7388ece068aeb16c45f1f6->leave($__internal_53b53d6886417b81c6fe4df8b06b1176b095e6abff7388ece068aeb16c45f1f6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a1da780c7d8be4120a690c35c2e91707771e57570acfc65d9263fa48d5e0221f = $this->env->getExtension("native_profiler");
        $__internal_a1da780c7d8be4120a690c35c2e91707771e57570acfc65d9263fa48d5e0221f->enter($__internal_a1da780c7d8be4120a690c35c2e91707771e57570acfc65d9263fa48d5e0221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a1da780c7d8be4120a690c35c2e91707771e57570acfc65d9263fa48d5e0221f->leave($__internal_a1da780c7d8be4120a690c35c2e91707771e57570acfc65d9263fa48d5e0221f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_923a71675ce1141954401c747ef9763b91c05b9a32807a43c81e2e4a35f676bd = $this->env->getExtension("native_profiler");
        $__internal_923a71675ce1141954401c747ef9763b91c05b9a32807a43c81e2e4a35f676bd->enter($__internal_923a71675ce1141954401c747ef9763b91c05b9a32807a43c81e2e4a35f676bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_923a71675ce1141954401c747ef9763b91c05b9a32807a43c81e2e4a35f676bd->leave($__internal_923a71675ce1141954401c747ef9763b91c05b9a32807a43c81e2e4a35f676bd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d9b63f58f1b5bf13ec6bbbbfc1419fcdc4b1a272566c40df110ce960b198ef2a = $this->env->getExtension("native_profiler");
        $__internal_d9b63f58f1b5bf13ec6bbbbfc1419fcdc4b1a272566c40df110ce960b198ef2a->enter($__internal_d9b63f58f1b5bf13ec6bbbbfc1419fcdc4b1a272566c40df110ce960b198ef2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d9b63f58f1b5bf13ec6bbbbfc1419fcdc4b1a272566c40df110ce960b198ef2a->leave($__internal_d9b63f58f1b5bf13ec6bbbbfc1419fcdc4b1a272566c40df110ce960b198ef2a_prof);

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
