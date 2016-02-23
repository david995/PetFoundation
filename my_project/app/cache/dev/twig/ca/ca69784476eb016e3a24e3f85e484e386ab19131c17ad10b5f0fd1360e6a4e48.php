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
        $__internal_191607b85721019186ae187dcd79852b83b7446c2277346bad0fb42c8a83cbae = $this->env->getExtension("native_profiler");
        $__internal_191607b85721019186ae187dcd79852b83b7446c2277346bad0fb42c8a83cbae->enter($__internal_191607b85721019186ae187dcd79852b83b7446c2277346bad0fb42c8a83cbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_191607b85721019186ae187dcd79852b83b7446c2277346bad0fb42c8a83cbae->leave($__internal_191607b85721019186ae187dcd79852b83b7446c2277346bad0fb42c8a83cbae_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4f6e324b4d7249efc1a8236b9038ab6f66ea9fce65aceff039af6ad64fe9d072 = $this->env->getExtension("native_profiler");
        $__internal_4f6e324b4d7249efc1a8236b9038ab6f66ea9fce65aceff039af6ad64fe9d072->enter($__internal_4f6e324b4d7249efc1a8236b9038ab6f66ea9fce65aceff039af6ad64fe9d072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f6e324b4d7249efc1a8236b9038ab6f66ea9fce65aceff039af6ad64fe9d072->leave($__internal_4f6e324b4d7249efc1a8236b9038ab6f66ea9fce65aceff039af6ad64fe9d072_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b7a51acb48265416fe9e63d7db44b6493c27385b6d260febe0d762242f294328 = $this->env->getExtension("native_profiler");
        $__internal_b7a51acb48265416fe9e63d7db44b6493c27385b6d260febe0d762242f294328->enter($__internal_b7a51acb48265416fe9e63d7db44b6493c27385b6d260febe0d762242f294328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b7a51acb48265416fe9e63d7db44b6493c27385b6d260febe0d762242f294328->leave($__internal_b7a51acb48265416fe9e63d7db44b6493c27385b6d260febe0d762242f294328_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4c1483ef735d33df8d9e041e1a5ef6279e3a282c210183ef45b30ed1ebc4c1ad = $this->env->getExtension("native_profiler");
        $__internal_4c1483ef735d33df8d9e041e1a5ef6279e3a282c210183ef45b30ed1ebc4c1ad->enter($__internal_4c1483ef735d33df8d9e041e1a5ef6279e3a282c210183ef45b30ed1ebc4c1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4c1483ef735d33df8d9e041e1a5ef6279e3a282c210183ef45b30ed1ebc4c1ad->leave($__internal_4c1483ef735d33df8d9e041e1a5ef6279e3a282c210183ef45b30ed1ebc4c1ad_prof);

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
