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
        $__internal_3303a0c064363628a0bf6def95c4bed6b2aa0b5a7ae370156d466af9772b42eb = $this->env->getExtension("native_profiler");
        $__internal_3303a0c064363628a0bf6def95c4bed6b2aa0b5a7ae370156d466af9772b42eb->enter($__internal_3303a0c064363628a0bf6def95c4bed6b2aa0b5a7ae370156d466af9772b42eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3303a0c064363628a0bf6def95c4bed6b2aa0b5a7ae370156d466af9772b42eb->leave($__internal_3303a0c064363628a0bf6def95c4bed6b2aa0b5a7ae370156d466af9772b42eb_prof);

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
