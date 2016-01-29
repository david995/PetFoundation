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
        $__internal_44748b5425fd56c5c045eda4075ca630ca3fc55f50bdd9888f93fb06096fabc8 = $this->env->getExtension("native_profiler");
        $__internal_44748b5425fd56c5c045eda4075ca630ca3fc55f50bdd9888f93fb06096fabc8->enter($__internal_44748b5425fd56c5c045eda4075ca630ca3fc55f50bdd9888f93fb06096fabc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44748b5425fd56c5c045eda4075ca630ca3fc55f50bdd9888f93fb06096fabc8->leave($__internal_44748b5425fd56c5c045eda4075ca630ca3fc55f50bdd9888f93fb06096fabc8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd0446b1dfdbf95eb1f1c01de7cee8ec9ec665ddd17a8928de86f5a4c7dbeb98 = $this->env->getExtension("native_profiler");
        $__internal_bd0446b1dfdbf95eb1f1c01de7cee8ec9ec665ddd17a8928de86f5a4c7dbeb98->enter($__internal_bd0446b1dfdbf95eb1f1c01de7cee8ec9ec665ddd17a8928de86f5a4c7dbeb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bd0446b1dfdbf95eb1f1c01de7cee8ec9ec665ddd17a8928de86f5a4c7dbeb98->leave($__internal_bd0446b1dfdbf95eb1f1c01de7cee8ec9ec665ddd17a8928de86f5a4c7dbeb98_prof);

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
