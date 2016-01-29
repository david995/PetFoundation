<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d601c99909884efbea44365dd27f9ff82cab9584f12896807ccad253ad96ef1f extends Twig_Template
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
        $__internal_923dcd2eaae85ea7abd2ef27715334c3f9eb7891ecee42db17a2a8ea2e584ecb = $this->env->getExtension("native_profiler");
        $__internal_923dcd2eaae85ea7abd2ef27715334c3f9eb7891ecee42db17a2a8ea2e584ecb->enter($__internal_923dcd2eaae85ea7abd2ef27715334c3f9eb7891ecee42db17a2a8ea2e584ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_923dcd2eaae85ea7abd2ef27715334c3f9eb7891ecee42db17a2a8ea2e584ecb->leave($__internal_923dcd2eaae85ea7abd2ef27715334c3f9eb7891ecee42db17a2a8ea2e584ecb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
