<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5b16ecf7b6b21aca7d82c01c745c4bab7adfaf5c1498f64e058425a313b4061a extends Twig_Template
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
        $__internal_5969bbac8a2f52d6639e4af788a9e062a059c2f972d008eef62536ce09700467 = $this->env->getExtension("native_profiler");
        $__internal_5969bbac8a2f52d6639e4af788a9e062a059c2f972d008eef62536ce09700467->enter($__internal_5969bbac8a2f52d6639e4af788a9e062a059c2f972d008eef62536ce09700467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5969bbac8a2f52d6639e4af788a9e062a059c2f972d008eef62536ce09700467->leave($__internal_5969bbac8a2f52d6639e4af788a9e062a059c2f972d008eef62536ce09700467_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
