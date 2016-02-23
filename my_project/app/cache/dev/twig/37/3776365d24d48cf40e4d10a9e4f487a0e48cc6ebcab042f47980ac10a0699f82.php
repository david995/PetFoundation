<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9cb65cdc74b27869064bf4abb23e31b5f67a3f4052622ed7978f5177aaa6eeec extends Twig_Template
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
        $__internal_4e4b049b78691bee6366e69127c310bc2f86a5c3bfcb1c48070cdc5a5b728a62 = $this->env->getExtension("native_profiler");
        $__internal_4e4b049b78691bee6366e69127c310bc2f86a5c3bfcb1c48070cdc5a5b728a62->enter($__internal_4e4b049b78691bee6366e69127c310bc2f86a5c3bfcb1c48070cdc5a5b728a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4e4b049b78691bee6366e69127c310bc2f86a5c3bfcb1c48070cdc5a5b728a62->leave($__internal_4e4b049b78691bee6366e69127c310bc2f86a5c3bfcb1c48070cdc5a5b728a62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
