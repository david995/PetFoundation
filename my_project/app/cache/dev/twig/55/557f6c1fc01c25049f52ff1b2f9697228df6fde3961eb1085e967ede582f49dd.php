<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dfc71f926f5a040ec3d1f11251af93effad550739a6ce1e1f0213a4554238c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_0db6be1a08fcb62c008490bc7829f51568d3b8e391c166d62e4f16e6fb74635d = $this->env->getExtension("native_profiler");
        $__internal_0db6be1a08fcb62c008490bc7829f51568d3b8e391c166d62e4f16e6fb74635d->enter($__internal_0db6be1a08fcb62c008490bc7829f51568d3b8e391c166d62e4f16e6fb74635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db6be1a08fcb62c008490bc7829f51568d3b8e391c166d62e4f16e6fb74635d->leave($__internal_0db6be1a08fcb62c008490bc7829f51568d3b8e391c166d62e4f16e6fb74635d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ee1d14dad26d690cf7a4ab025789e42acdde18b6fe80a26281702db29d20523 = $this->env->getExtension("native_profiler");
        $__internal_8ee1d14dad26d690cf7a4ab025789e42acdde18b6fe80a26281702db29d20523->enter($__internal_8ee1d14dad26d690cf7a4ab025789e42acdde18b6fe80a26281702db29d20523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ee1d14dad26d690cf7a4ab025789e42acdde18b6fe80a26281702db29d20523->leave($__internal_8ee1d14dad26d690cf7a4ab025789e42acdde18b6fe80a26281702db29d20523_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_589fa7ae019fcaa8c9277668c7b75e0c8151542a73d7351371a09d1994cd3d56 = $this->env->getExtension("native_profiler");
        $__internal_589fa7ae019fcaa8c9277668c7b75e0c8151542a73d7351371a09d1994cd3d56->enter($__internal_589fa7ae019fcaa8c9277668c7b75e0c8151542a73d7351371a09d1994cd3d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_589fa7ae019fcaa8c9277668c7b75e0c8151542a73d7351371a09d1994cd3d56->leave($__internal_589fa7ae019fcaa8c9277668c7b75e0c8151542a73d7351371a09d1994cd3d56_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb5c36531aaf3ce279331b940acf4642524f2525985b34f9038bd21b1e398607 = $this->env->getExtension("native_profiler");
        $__internal_cb5c36531aaf3ce279331b940acf4642524f2525985b34f9038bd21b1e398607->enter($__internal_cb5c36531aaf3ce279331b940acf4642524f2525985b34f9038bd21b1e398607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cb5c36531aaf3ce279331b940acf4642524f2525985b34f9038bd21b1e398607->leave($__internal_cb5c36531aaf3ce279331b940acf4642524f2525985b34f9038bd21b1e398607_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
