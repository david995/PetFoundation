<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_25f90ad1f9b0da87e772e1017ba6dac5ba0be82eb003315ef260814d4d12e5a4 extends Twig_Template
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
        $__internal_0b9e50c2a355fb4385d195cc28deda87991ee6d19cace3a06b43b3c2a75c78d1 = $this->env->getExtension("native_profiler");
        $__internal_0b9e50c2a355fb4385d195cc28deda87991ee6d19cace3a06b43b3c2a75c78d1->enter($__internal_0b9e50c2a355fb4385d195cc28deda87991ee6d19cace3a06b43b3c2a75c78d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0b9e50c2a355fb4385d195cc28deda87991ee6d19cace3a06b43b3c2a75c78d1->leave($__internal_0b9e50c2a355fb4385d195cc28deda87991ee6d19cace3a06b43b3c2a75c78d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
