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
        $__internal_e8ddfebb93c7c641a82b51ab76e33cb0da0daace5f3247a712966be434d88ecd = $this->env->getExtension("native_profiler");
        $__internal_e8ddfebb93c7c641a82b51ab76e33cb0da0daace5f3247a712966be434d88ecd->enter($__internal_e8ddfebb93c7c641a82b51ab76e33cb0da0daace5f3247a712966be434d88ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e8ddfebb93c7c641a82b51ab76e33cb0da0daace5f3247a712966be434d88ecd->leave($__internal_e8ddfebb93c7c641a82b51ab76e33cb0da0daace5f3247a712966be434d88ecd_prof);

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
