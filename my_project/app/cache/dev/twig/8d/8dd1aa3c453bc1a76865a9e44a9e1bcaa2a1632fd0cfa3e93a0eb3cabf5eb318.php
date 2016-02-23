<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3a84626cbbe343d3fecce3707e5ad9f3491aedb81df39ea2efeaf9c1a8069280 extends Twig_Template
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
        $__internal_6954d4ae4b46a5bd165b6270f16e54a29d6269c3b7bff8e8332260c506fbfece = $this->env->getExtension("native_profiler");
        $__internal_6954d4ae4b46a5bd165b6270f16e54a29d6269c3b7bff8e8332260c506fbfece->enter($__internal_6954d4ae4b46a5bd165b6270f16e54a29d6269c3b7bff8e8332260c506fbfece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6954d4ae4b46a5bd165b6270f16e54a29d6269c3b7bff8e8332260c506fbfece->leave($__internal_6954d4ae4b46a5bd165b6270f16e54a29d6269c3b7bff8e8332260c506fbfece_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
