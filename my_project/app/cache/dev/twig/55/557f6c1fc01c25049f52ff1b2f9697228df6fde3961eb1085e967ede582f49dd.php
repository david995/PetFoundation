<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0dfc71f926f5a040ec3d1f11251af93effad550739a6ce1e1f0213a4554238c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7505813120495a7608af998b48b531213ca0adcb186f6b34ffdcc0df46d47856 = $this->env->getExtension("native_profiler");
        $__internal_7505813120495a7608af998b48b531213ca0adcb186f6b34ffdcc0df46d47856->enter($__internal_7505813120495a7608af998b48b531213ca0adcb186f6b34ffdcc0df46d47856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7505813120495a7608af998b48b531213ca0adcb186f6b34ffdcc0df46d47856->leave($__internal_7505813120495a7608af998b48b531213ca0adcb186f6b34ffdcc0df46d47856_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3cb09d13187c9401b6ce13f5cd0cb7b3c29f2a4600326440b9cd8f2fd773739 = $this->env->getExtension("native_profiler");
        $__internal_f3cb09d13187c9401b6ce13f5cd0cb7b3c29f2a4600326440b9cd8f2fd773739->enter($__internal_f3cb09d13187c9401b6ce13f5cd0cb7b3c29f2a4600326440b9cd8f2fd773739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f3cb09d13187c9401b6ce13f5cd0cb7b3c29f2a4600326440b9cd8f2fd773739->leave($__internal_f3cb09d13187c9401b6ce13f5cd0cb7b3c29f2a4600326440b9cd8f2fd773739_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fae6bb4aecb6f1c2f9174eda4520e3f1b968df8f46cee84cabb212804eacca6d = $this->env->getExtension("native_profiler");
        $__internal_fae6bb4aecb6f1c2f9174eda4520e3f1b968df8f46cee84cabb212804eacca6d->enter($__internal_fae6bb4aecb6f1c2f9174eda4520e3f1b968df8f46cee84cabb212804eacca6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fae6bb4aecb6f1c2f9174eda4520e3f1b968df8f46cee84cabb212804eacca6d->leave($__internal_fae6bb4aecb6f1c2f9174eda4520e3f1b968df8f46cee84cabb212804eacca6d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24ab23dcea4d2814a26b915b12063c51eee014794d499daede6c087ae95c385a = $this->env->getExtension("native_profiler");
        $__internal_24ab23dcea4d2814a26b915b12063c51eee014794d499daede6c087ae95c385a->enter($__internal_24ab23dcea4d2814a26b915b12063c51eee014794d499daede6c087ae95c385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_24ab23dcea4d2814a26b915b12063c51eee014794d499daede6c087ae95c385a->leave($__internal_24ab23dcea4d2814a26b915b12063c51eee014794d499daede6c087ae95c385a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
