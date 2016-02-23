<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_51baee14f6ff17cb2c1ff5627966b2f828adf578966b0965f263961181e8750e extends Twig_Template
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
        $__internal_a8ef2182ad2afbcd77371bbdb4df55988830522fe611cba6c7d99e572491116c = $this->env->getExtension("native_profiler");
        $__internal_a8ef2182ad2afbcd77371bbdb4df55988830522fe611cba6c7d99e572491116c->enter($__internal_a8ef2182ad2afbcd77371bbdb4df55988830522fe611cba6c7d99e572491116c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a8ef2182ad2afbcd77371bbdb4df55988830522fe611cba6c7d99e572491116c->leave($__internal_a8ef2182ad2afbcd77371bbdb4df55988830522fe611cba6c7d99e572491116c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
