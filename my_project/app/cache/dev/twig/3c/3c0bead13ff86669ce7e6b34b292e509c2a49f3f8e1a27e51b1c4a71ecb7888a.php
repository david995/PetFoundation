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
        $__internal_40a6f18893af6c17d4fd0fd707a328e1e9bee915359690a20b4d0bef46e930c9 = $this->env->getExtension("native_profiler");
        $__internal_40a6f18893af6c17d4fd0fd707a328e1e9bee915359690a20b4d0bef46e930c9->enter($__internal_40a6f18893af6c17d4fd0fd707a328e1e9bee915359690a20b4d0bef46e930c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_40a6f18893af6c17d4fd0fd707a328e1e9bee915359690a20b4d0bef46e930c9->leave($__internal_40a6f18893af6c17d4fd0fd707a328e1e9bee915359690a20b4d0bef46e930c9_prof);

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
