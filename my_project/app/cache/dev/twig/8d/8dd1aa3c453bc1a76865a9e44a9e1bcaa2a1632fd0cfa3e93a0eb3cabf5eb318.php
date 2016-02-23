<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3a84626cbbe343d3fecce3707e5ad9f3491aedb81df39ea2efeaf9c1a8069280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f90c74352513782145ad2b23aec009a8a5f4b1d7c3b7afca83c6975cb376140 = $this->env->getExtension("native_profiler");
        $__internal_5f90c74352513782145ad2b23aec009a8a5f4b1d7c3b7afca83c6975cb376140->enter($__internal_5f90c74352513782145ad2b23aec009a8a5f4b1d7c3b7afca83c6975cb376140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5f90c74352513782145ad2b23aec009a8a5f4b1d7c3b7afca83c6975cb376140->leave($__internal_5f90c74352513782145ad2b23aec009a8a5f4b1d7c3b7afca83c6975cb376140_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
