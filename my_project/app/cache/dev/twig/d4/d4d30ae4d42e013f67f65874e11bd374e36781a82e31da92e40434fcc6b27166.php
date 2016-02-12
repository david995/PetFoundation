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
        $__internal_62f1922ad78bb6c716aa8c622f8977d7d25340d2c66ac1ae6c9db89669746cf3 = $this->env->getExtension("native_profiler");
        $__internal_62f1922ad78bb6c716aa8c622f8977d7d25340d2c66ac1ae6c9db89669746cf3->enter($__internal_62f1922ad78bb6c716aa8c622f8977d7d25340d2c66ac1ae6c9db89669746cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f1922ad78bb6c716aa8c622f8977d7d25340d2c66ac1ae6c9db89669746cf3->leave($__internal_62f1922ad78bb6c716aa8c622f8977d7d25340d2c66ac1ae6c9db89669746cf3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e6ea71c33e24dd365cfb44ed8a7a2ec561a2a59165b567a2f45aa6e354d0999 = $this->env->getExtension("native_profiler");
        $__internal_1e6ea71c33e24dd365cfb44ed8a7a2ec561a2a59165b567a2f45aa6e354d0999->enter($__internal_1e6ea71c33e24dd365cfb44ed8a7a2ec561a2a59165b567a2f45aa6e354d0999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1e6ea71c33e24dd365cfb44ed8a7a2ec561a2a59165b567a2f45aa6e354d0999->leave($__internal_1e6ea71c33e24dd365cfb44ed8a7a2ec561a2a59165b567a2f45aa6e354d0999_prof);

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
