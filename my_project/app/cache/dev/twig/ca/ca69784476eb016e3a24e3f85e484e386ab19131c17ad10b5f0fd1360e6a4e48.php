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
        $__internal_145ba8d1bed3fa295f7d866f03ebf395c9638bba0676ab6956552896a65a66d5 = $this->env->getExtension("native_profiler");
        $__internal_145ba8d1bed3fa295f7d866f03ebf395c9638bba0676ab6956552896a65a66d5->enter($__internal_145ba8d1bed3fa295f7d866f03ebf395c9638bba0676ab6956552896a65a66d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_145ba8d1bed3fa295f7d866f03ebf395c9638bba0676ab6956552896a65a66d5->leave($__internal_145ba8d1bed3fa295f7d866f03ebf395c9638bba0676ab6956552896a65a66d5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1be0bf2a794b54c7e2016a9e7b8edd578312cf0344fdf9ea81ab17fcfb9ed10b = $this->env->getExtension("native_profiler");
        $__internal_1be0bf2a794b54c7e2016a9e7b8edd578312cf0344fdf9ea81ab17fcfb9ed10b->enter($__internal_1be0bf2a794b54c7e2016a9e7b8edd578312cf0344fdf9ea81ab17fcfb9ed10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1be0bf2a794b54c7e2016a9e7b8edd578312cf0344fdf9ea81ab17fcfb9ed10b->leave($__internal_1be0bf2a794b54c7e2016a9e7b8edd578312cf0344fdf9ea81ab17fcfb9ed10b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_673c445f1625905d3704c0e18140662678aaf42f8f4868e705259d2f0d2d52e2 = $this->env->getExtension("native_profiler");
        $__internal_673c445f1625905d3704c0e18140662678aaf42f8f4868e705259d2f0d2d52e2->enter($__internal_673c445f1625905d3704c0e18140662678aaf42f8f4868e705259d2f0d2d52e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_673c445f1625905d3704c0e18140662678aaf42f8f4868e705259d2f0d2d52e2->leave($__internal_673c445f1625905d3704c0e18140662678aaf42f8f4868e705259d2f0d2d52e2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_983faf52ff323861062479646a9e46149f7b050875ede2d14aba026f94accf7b = $this->env->getExtension("native_profiler");
        $__internal_983faf52ff323861062479646a9e46149f7b050875ede2d14aba026f94accf7b->enter($__internal_983faf52ff323861062479646a9e46149f7b050875ede2d14aba026f94accf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_983faf52ff323861062479646a9e46149f7b050875ede2d14aba026f94accf7b->leave($__internal_983faf52ff323861062479646a9e46149f7b050875ede2d14aba026f94accf7b_prof);

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
