<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4b4df0d3908b3e5f9e17a2bbc77ca05693fe11e7a033fa357a6d8f70eb995f35 extends Twig_Template
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
        $__internal_8cdd9ae7f6d77c35a51d6f7985be1a981a6b7a44c80d211649b84f570e28f53b = $this->env->getExtension("native_profiler");
        $__internal_8cdd9ae7f6d77c35a51d6f7985be1a981a6b7a44c80d211649b84f570e28f53b->enter($__internal_8cdd9ae7f6d77c35a51d6f7985be1a981a6b7a44c80d211649b84f570e28f53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8cdd9ae7f6d77c35a51d6f7985be1a981a6b7a44c80d211649b84f570e28f53b->leave($__internal_8cdd9ae7f6d77c35a51d6f7985be1a981a6b7a44c80d211649b84f570e28f53b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
