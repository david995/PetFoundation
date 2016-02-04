<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fcfd1e91d14c67f22e5ff0261c30d1395fb306ade9b7e28c7cc61395cd080c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f563b7dded4a50929999e6cec2cbd894a970294a261b2b689c14b6011505804a = $this->env->getExtension("native_profiler");
        $__internal_f563b7dded4a50929999e6cec2cbd894a970294a261b2b689c14b6011505804a->enter($__internal_f563b7dded4a50929999e6cec2cbd894a970294a261b2b689c14b6011505804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f563b7dded4a50929999e6cec2cbd894a970294a261b2b689c14b6011505804a->leave($__internal_f563b7dded4a50929999e6cec2cbd894a970294a261b2b689c14b6011505804a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4e99797a927757b61a9765b299b1eb06b02016498452c0ab3c026ece19db3dd = $this->env->getExtension("native_profiler");
        $__internal_d4e99797a927757b61a9765b299b1eb06b02016498452c0ab3c026ece19db3dd->enter($__internal_d4e99797a927757b61a9765b299b1eb06b02016498452c0ab3c026ece19db3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d4e99797a927757b61a9765b299b1eb06b02016498452c0ab3c026ece19db3dd->leave($__internal_d4e99797a927757b61a9765b299b1eb06b02016498452c0ab3c026ece19db3dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
