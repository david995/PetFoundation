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
        $__internal_94f4e01c7f337bf2335d4cc55a539b70cc3360741b20a47bdd35b8e56ef360ac = $this->env->getExtension("native_profiler");
        $__internal_94f4e01c7f337bf2335d4cc55a539b70cc3360741b20a47bdd35b8e56ef360ac->enter($__internal_94f4e01c7f337bf2335d4cc55a539b70cc3360741b20a47bdd35b8e56ef360ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_94f4e01c7f337bf2335d4cc55a539b70cc3360741b20a47bdd35b8e56ef360ac->leave($__internal_94f4e01c7f337bf2335d4cc55a539b70cc3360741b20a47bdd35b8e56ef360ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_229a33205df43dd3ca31cbb27ea29aada99b9aeb9fe85263b239edfa8e521073 = $this->env->getExtension("native_profiler");
        $__internal_229a33205df43dd3ca31cbb27ea29aada99b9aeb9fe85263b239edfa8e521073->enter($__internal_229a33205df43dd3ca31cbb27ea29aada99b9aeb9fe85263b239edfa8e521073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_229a33205df43dd3ca31cbb27ea29aada99b9aeb9fe85263b239edfa8e521073->leave($__internal_229a33205df43dd3ca31cbb27ea29aada99b9aeb9fe85263b239edfa8e521073_prof);

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
