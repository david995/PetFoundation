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
        $__internal_5fbb3dc65930e9df8c15fe8c19240da561e8f4c947964688b18bc8ba92a6e9fb = $this->env->getExtension("native_profiler");
        $__internal_5fbb3dc65930e9df8c15fe8c19240da561e8f4c947964688b18bc8ba92a6e9fb->enter($__internal_5fbb3dc65930e9df8c15fe8c19240da561e8f4c947964688b18bc8ba92a6e9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5fbb3dc65930e9df8c15fe8c19240da561e8f4c947964688b18bc8ba92a6e9fb->leave($__internal_5fbb3dc65930e9df8c15fe8c19240da561e8f4c947964688b18bc8ba92a6e9fb_prof);

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
