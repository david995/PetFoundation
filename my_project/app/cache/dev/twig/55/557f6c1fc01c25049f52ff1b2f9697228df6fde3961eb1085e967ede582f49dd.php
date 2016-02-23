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
        $__internal_239f608ccefcf801b85a72661f2671357d65eeaf596c2596fb585dcbba7adaf8 = $this->env->getExtension("native_profiler");
        $__internal_239f608ccefcf801b85a72661f2671357d65eeaf596c2596fb585dcbba7adaf8->enter($__internal_239f608ccefcf801b85a72661f2671357d65eeaf596c2596fb585dcbba7adaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239f608ccefcf801b85a72661f2671357d65eeaf596c2596fb585dcbba7adaf8->leave($__internal_239f608ccefcf801b85a72661f2671357d65eeaf596c2596fb585dcbba7adaf8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9af93569d15c3a9b9e48cd8ac0de87792fa7fd35a2a7fef2cb734ae559391e7 = $this->env->getExtension("native_profiler");
        $__internal_e9af93569d15c3a9b9e48cd8ac0de87792fa7fd35a2a7fef2cb734ae559391e7->enter($__internal_e9af93569d15c3a9b9e48cd8ac0de87792fa7fd35a2a7fef2cb734ae559391e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9af93569d15c3a9b9e48cd8ac0de87792fa7fd35a2a7fef2cb734ae559391e7->leave($__internal_e9af93569d15c3a9b9e48cd8ac0de87792fa7fd35a2a7fef2cb734ae559391e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0280a5888d2124cdea1d4df53e7405c6b4203e4e185fe704df62776fae80870f = $this->env->getExtension("native_profiler");
        $__internal_0280a5888d2124cdea1d4df53e7405c6b4203e4e185fe704df62776fae80870f->enter($__internal_0280a5888d2124cdea1d4df53e7405c6b4203e4e185fe704df62776fae80870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0280a5888d2124cdea1d4df53e7405c6b4203e4e185fe704df62776fae80870f->leave($__internal_0280a5888d2124cdea1d4df53e7405c6b4203e4e185fe704df62776fae80870f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_37cea9b11620428bf1af2218c410393eb53b35e62998ba1944d054defdf60b1a = $this->env->getExtension("native_profiler");
        $__internal_37cea9b11620428bf1af2218c410393eb53b35e62998ba1944d054defdf60b1a->enter($__internal_37cea9b11620428bf1af2218c410393eb53b35e62998ba1944d054defdf60b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_37cea9b11620428bf1af2218c410393eb53b35e62998ba1944d054defdf60b1a->leave($__internal_37cea9b11620428bf1af2218c410393eb53b35e62998ba1944d054defdf60b1a_prof);

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
