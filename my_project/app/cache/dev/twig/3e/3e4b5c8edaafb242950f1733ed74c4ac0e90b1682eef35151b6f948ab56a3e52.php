<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_06c5f4d3e4f0971b4791d2f514d4f85f8b98e4d34481a5543ae83068e91b9918 extends Twig_Template
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
        $__internal_8ec1ed091ed71ba930a6eef7c8ef44a5fec9074668f64a228fc6221704e5d686 = $this->env->getExtension("native_profiler");
        $__internal_8ec1ed091ed71ba930a6eef7c8ef44a5fec9074668f64a228fc6221704e5d686->enter($__internal_8ec1ed091ed71ba930a6eef7c8ef44a5fec9074668f64a228fc6221704e5d686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8ec1ed091ed71ba930a6eef7c8ef44a5fec9074668f64a228fc6221704e5d686->leave($__internal_8ec1ed091ed71ba930a6eef7c8ef44a5fec9074668f64a228fc6221704e5d686_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
