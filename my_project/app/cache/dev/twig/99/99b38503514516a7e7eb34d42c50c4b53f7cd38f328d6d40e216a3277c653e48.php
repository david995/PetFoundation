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
        $__internal_6af7f9c0f127b0fea3e660aec141655b7d492735e2beed8305266dd10210d55c = $this->env->getExtension("native_profiler");
        $__internal_6af7f9c0f127b0fea3e660aec141655b7d492735e2beed8305266dd10210d55c->enter($__internal_6af7f9c0f127b0fea3e660aec141655b7d492735e2beed8305266dd10210d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6af7f9c0f127b0fea3e660aec141655b7d492735e2beed8305266dd10210d55c->leave($__internal_6af7f9c0f127b0fea3e660aec141655b7d492735e2beed8305266dd10210d55c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6abcb73ab3b47c7da21e09781dee7aa4b5772c669c0cb3f7d29b59a889adf3e1 = $this->env->getExtension("native_profiler");
        $__internal_6abcb73ab3b47c7da21e09781dee7aa4b5772c669c0cb3f7d29b59a889adf3e1->enter($__internal_6abcb73ab3b47c7da21e09781dee7aa4b5772c669c0cb3f7d29b59a889adf3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6abcb73ab3b47c7da21e09781dee7aa4b5772c669c0cb3f7d29b59a889adf3e1->leave($__internal_6abcb73ab3b47c7da21e09781dee7aa4b5772c669c0cb3f7d29b59a889adf3e1_prof);

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
