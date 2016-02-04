<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5a816a520250b85d03943ef1cd8a0fd9e4b38de177ab9d7b959ef55b09de1ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2740ed9415416ba866d18fe887534f82e4f1a45d2d04516fadb9af7484e2c565 = $this->env->getExtension("native_profiler");
        $__internal_2740ed9415416ba866d18fe887534f82e4f1a45d2d04516fadb9af7484e2c565->enter($__internal_2740ed9415416ba866d18fe887534f82e4f1a45d2d04516fadb9af7484e2c565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2740ed9415416ba866d18fe887534f82e4f1a45d2d04516fadb9af7484e2c565->leave($__internal_2740ed9415416ba866d18fe887534f82e4f1a45d2d04516fadb9af7484e2c565_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_62a1b055dd54adce96e60172976a3f643de8af0393843f2116459f9dc2c91a70 = $this->env->getExtension("native_profiler");
        $__internal_62a1b055dd54adce96e60172976a3f643de8af0393843f2116459f9dc2c91a70->enter($__internal_62a1b055dd54adce96e60172976a3f643de8af0393843f2116459f9dc2c91a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_62a1b055dd54adce96e60172976a3f643de8af0393843f2116459f9dc2c91a70->leave($__internal_62a1b055dd54adce96e60172976a3f643de8af0393843f2116459f9dc2c91a70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
