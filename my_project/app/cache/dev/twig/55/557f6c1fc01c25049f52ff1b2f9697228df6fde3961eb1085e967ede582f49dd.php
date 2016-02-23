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
        $__internal_2fb18e127d10d1d153fb55a57153d202dbd4a937ff477d112a8083785ffd9769 = $this->env->getExtension("native_profiler");
        $__internal_2fb18e127d10d1d153fb55a57153d202dbd4a937ff477d112a8083785ffd9769->enter($__internal_2fb18e127d10d1d153fb55a57153d202dbd4a937ff477d112a8083785ffd9769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fb18e127d10d1d153fb55a57153d202dbd4a937ff477d112a8083785ffd9769->leave($__internal_2fb18e127d10d1d153fb55a57153d202dbd4a937ff477d112a8083785ffd9769_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76dfeb678be8b6dd847ad1d3c05c46b805c8869a0cd9f4d8840d87bf3e63dd9b = $this->env->getExtension("native_profiler");
        $__internal_76dfeb678be8b6dd847ad1d3c05c46b805c8869a0cd9f4d8840d87bf3e63dd9b->enter($__internal_76dfeb678be8b6dd847ad1d3c05c46b805c8869a0cd9f4d8840d87bf3e63dd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_76dfeb678be8b6dd847ad1d3c05c46b805c8869a0cd9f4d8840d87bf3e63dd9b->leave($__internal_76dfeb678be8b6dd847ad1d3c05c46b805c8869a0cd9f4d8840d87bf3e63dd9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_30944d8c6e9c59763e5794d414b76992a45aa89101a8f878873370c743a21888 = $this->env->getExtension("native_profiler");
        $__internal_30944d8c6e9c59763e5794d414b76992a45aa89101a8f878873370c743a21888->enter($__internal_30944d8c6e9c59763e5794d414b76992a45aa89101a8f878873370c743a21888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_30944d8c6e9c59763e5794d414b76992a45aa89101a8f878873370c743a21888->leave($__internal_30944d8c6e9c59763e5794d414b76992a45aa89101a8f878873370c743a21888_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_765fab3704b7896ec9ea7ba64eafbd3a0c55f427117bbe48072d79ce62485bf0 = $this->env->getExtension("native_profiler");
        $__internal_765fab3704b7896ec9ea7ba64eafbd3a0c55f427117bbe48072d79ce62485bf0->enter($__internal_765fab3704b7896ec9ea7ba64eafbd3a0c55f427117bbe48072d79ce62485bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_765fab3704b7896ec9ea7ba64eafbd3a0c55f427117bbe48072d79ce62485bf0->leave($__internal_765fab3704b7896ec9ea7ba64eafbd3a0c55f427117bbe48072d79ce62485bf0_prof);

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
