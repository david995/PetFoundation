<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7a18ca79f725614a035a3addfac51453084712ccee9095cd33fdf478429b5807 extends Twig_Template
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
        $__internal_0d323aa57be3c0fe52f5039ba3e2df4469e63e9754d99218112866cd657593b8 = $this->env->getExtension("native_profiler");
        $__internal_0d323aa57be3c0fe52f5039ba3e2df4469e63e9754d99218112866cd657593b8->enter($__internal_0d323aa57be3c0fe52f5039ba3e2df4469e63e9754d99218112866cd657593b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0d323aa57be3c0fe52f5039ba3e2df4469e63e9754d99218112866cd657593b8->leave($__internal_0d323aa57be3c0fe52f5039ba3e2df4469e63e9754d99218112866cd657593b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
