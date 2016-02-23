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
        $__internal_3269f9cb1670ae8f9b873b772e9d54bfb2730ed6931230d2e5a4aa0baf4e1483 = $this->env->getExtension("native_profiler");
        $__internal_3269f9cb1670ae8f9b873b772e9d54bfb2730ed6931230d2e5a4aa0baf4e1483->enter($__internal_3269f9cb1670ae8f9b873b772e9d54bfb2730ed6931230d2e5a4aa0baf4e1483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3269f9cb1670ae8f9b873b772e9d54bfb2730ed6931230d2e5a4aa0baf4e1483->leave($__internal_3269f9cb1670ae8f9b873b772e9d54bfb2730ed6931230d2e5a4aa0baf4e1483_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a9c5383ba578cd3a07fe6f39c79011967d53b3df81334329a17d345eb599b652 = $this->env->getExtension("native_profiler");
        $__internal_a9c5383ba578cd3a07fe6f39c79011967d53b3df81334329a17d345eb599b652->enter($__internal_a9c5383ba578cd3a07fe6f39c79011967d53b3df81334329a17d345eb599b652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a9c5383ba578cd3a07fe6f39c79011967d53b3df81334329a17d345eb599b652->leave($__internal_a9c5383ba578cd3a07fe6f39c79011967d53b3df81334329a17d345eb599b652_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1cf483c5e3056e40741f1a6e338843cb51cca97b22081f254051af298255271b = $this->env->getExtension("native_profiler");
        $__internal_1cf483c5e3056e40741f1a6e338843cb51cca97b22081f254051af298255271b->enter($__internal_1cf483c5e3056e40741f1a6e338843cb51cca97b22081f254051af298255271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1cf483c5e3056e40741f1a6e338843cb51cca97b22081f254051af298255271b->leave($__internal_1cf483c5e3056e40741f1a6e338843cb51cca97b22081f254051af298255271b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ddcfbd561393c0b201bfa6e98634e7497689b2c4358853b10c7c5fa77de965e6 = $this->env->getExtension("native_profiler");
        $__internal_ddcfbd561393c0b201bfa6e98634e7497689b2c4358853b10c7c5fa77de965e6->enter($__internal_ddcfbd561393c0b201bfa6e98634e7497689b2c4358853b10c7c5fa77de965e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ddcfbd561393c0b201bfa6e98634e7497689b2c4358853b10c7c5fa77de965e6->leave($__internal_ddcfbd561393c0b201bfa6e98634e7497689b2c4358853b10c7c5fa77de965e6_prof);

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
