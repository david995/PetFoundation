<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fc07c8e24ce72e76df2c64bee3588a5aa55cf9a794f5c7ff84f71f53f37190c2 extends Twig_Template
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
        $__internal_114edf644d1dfd76973b6cd0fd6d4dcd134ac8801547f9cbe225b6973bc822b1 = $this->env->getExtension("native_profiler");
        $__internal_114edf644d1dfd76973b6cd0fd6d4dcd134ac8801547f9cbe225b6973bc822b1->enter($__internal_114edf644d1dfd76973b6cd0fd6d4dcd134ac8801547f9cbe225b6973bc822b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_114edf644d1dfd76973b6cd0fd6d4dcd134ac8801547f9cbe225b6973bc822b1->leave($__internal_114edf644d1dfd76973b6cd0fd6d4dcd134ac8801547f9cbe225b6973bc822b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
