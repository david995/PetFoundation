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
        $__internal_b7fad959e210d60b1114d314db5e78fa32be5bcbce74bd47880f0b4811b30174 = $this->env->getExtension("native_profiler");
        $__internal_b7fad959e210d60b1114d314db5e78fa32be5bcbce74bd47880f0b4811b30174->enter($__internal_b7fad959e210d60b1114d314db5e78fa32be5bcbce74bd47880f0b4811b30174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b7fad959e210d60b1114d314db5e78fa32be5bcbce74bd47880f0b4811b30174->leave($__internal_b7fad959e210d60b1114d314db5e78fa32be5bcbce74bd47880f0b4811b30174_prof);

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
