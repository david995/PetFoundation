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
        $__internal_07d1ce79665fd682ab59d02be8456203a10873543107387e2683759cc6b9ac71 = $this->env->getExtension("native_profiler");
        $__internal_07d1ce79665fd682ab59d02be8456203a10873543107387e2683759cc6b9ac71->enter($__internal_07d1ce79665fd682ab59d02be8456203a10873543107387e2683759cc6b9ac71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_07d1ce79665fd682ab59d02be8456203a10873543107387e2683759cc6b9ac71->leave($__internal_07d1ce79665fd682ab59d02be8456203a10873543107387e2683759cc6b9ac71_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6dcc0b0048597b2fd5b0f2218a1c74940ea8d4f8ce32879d199efc21b2f96902 = $this->env->getExtension("native_profiler");
        $__internal_6dcc0b0048597b2fd5b0f2218a1c74940ea8d4f8ce32879d199efc21b2f96902->enter($__internal_6dcc0b0048597b2fd5b0f2218a1c74940ea8d4f8ce32879d199efc21b2f96902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6dcc0b0048597b2fd5b0f2218a1c74940ea8d4f8ce32879d199efc21b2f96902->leave($__internal_6dcc0b0048597b2fd5b0f2218a1c74940ea8d4f8ce32879d199efc21b2f96902_prof);

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
