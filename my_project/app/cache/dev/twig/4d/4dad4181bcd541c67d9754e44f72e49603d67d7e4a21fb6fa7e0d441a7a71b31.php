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
        $__internal_6b773846dcf6cc257ffb28558586dfebb11da318ab8ba5e12098d123dc46ca8d = $this->env->getExtension("native_profiler");
        $__internal_6b773846dcf6cc257ffb28558586dfebb11da318ab8ba5e12098d123dc46ca8d->enter($__internal_6b773846dcf6cc257ffb28558586dfebb11da318ab8ba5e12098d123dc46ca8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6b773846dcf6cc257ffb28558586dfebb11da318ab8ba5e12098d123dc46ca8d->leave($__internal_6b773846dcf6cc257ffb28558586dfebb11da318ab8ba5e12098d123dc46ca8d_prof);

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
