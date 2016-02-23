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
        $__internal_bfca852e93dc4e3d5fec79675823d25fe21333ef4b60d8e82ccc10d6c208667f = $this->env->getExtension("native_profiler");
        $__internal_bfca852e93dc4e3d5fec79675823d25fe21333ef4b60d8e82ccc10d6c208667f->enter($__internal_bfca852e93dc4e3d5fec79675823d25fe21333ef4b60d8e82ccc10d6c208667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_bfca852e93dc4e3d5fec79675823d25fe21333ef4b60d8e82ccc10d6c208667f->leave($__internal_bfca852e93dc4e3d5fec79675823d25fe21333ef4b60d8e82ccc10d6c208667f_prof);

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
