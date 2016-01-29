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
        $__internal_4c34fd3850cb243330eedb5467345dc144f6c9a51107c76bbc09377788e22b8c = $this->env->getExtension("native_profiler");
        $__internal_4c34fd3850cb243330eedb5467345dc144f6c9a51107c76bbc09377788e22b8c->enter($__internal_4c34fd3850cb243330eedb5467345dc144f6c9a51107c76bbc09377788e22b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4c34fd3850cb243330eedb5467345dc144f6c9a51107c76bbc09377788e22b8c->leave($__internal_4c34fd3850cb243330eedb5467345dc144f6c9a51107c76bbc09377788e22b8c_prof);

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
