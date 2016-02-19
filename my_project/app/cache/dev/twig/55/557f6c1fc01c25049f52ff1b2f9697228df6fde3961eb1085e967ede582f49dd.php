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
        $__internal_7a4ccdf7cf230b46fb03208e591962076625c5da87a05687ee6282798f30c83c = $this->env->getExtension("native_profiler");
        $__internal_7a4ccdf7cf230b46fb03208e591962076625c5da87a05687ee6282798f30c83c->enter($__internal_7a4ccdf7cf230b46fb03208e591962076625c5da87a05687ee6282798f30c83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4ccdf7cf230b46fb03208e591962076625c5da87a05687ee6282798f30c83c->leave($__internal_7a4ccdf7cf230b46fb03208e591962076625c5da87a05687ee6282798f30c83c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da10ae7340ed76c8dd503b13a7a705b6abb9f524a3410f7b8f57cb27c80c14f4 = $this->env->getExtension("native_profiler");
        $__internal_da10ae7340ed76c8dd503b13a7a705b6abb9f524a3410f7b8f57cb27c80c14f4->enter($__internal_da10ae7340ed76c8dd503b13a7a705b6abb9f524a3410f7b8f57cb27c80c14f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da10ae7340ed76c8dd503b13a7a705b6abb9f524a3410f7b8f57cb27c80c14f4->leave($__internal_da10ae7340ed76c8dd503b13a7a705b6abb9f524a3410f7b8f57cb27c80c14f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1351f798a56532379645050b133eacb7505db98878404ce2f1225e985bb97175 = $this->env->getExtension("native_profiler");
        $__internal_1351f798a56532379645050b133eacb7505db98878404ce2f1225e985bb97175->enter($__internal_1351f798a56532379645050b133eacb7505db98878404ce2f1225e985bb97175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1351f798a56532379645050b133eacb7505db98878404ce2f1225e985bb97175->leave($__internal_1351f798a56532379645050b133eacb7505db98878404ce2f1225e985bb97175_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b0e902e30c9f7ecd284e5bf63c8c8d2de2c0573eac0008fd04f0345187d8ba5 = $this->env->getExtension("native_profiler");
        $__internal_1b0e902e30c9f7ecd284e5bf63c8c8d2de2c0573eac0008fd04f0345187d8ba5->enter($__internal_1b0e902e30c9f7ecd284e5bf63c8c8d2de2c0573eac0008fd04f0345187d8ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1b0e902e30c9f7ecd284e5bf63c8c8d2de2c0573eac0008fd04f0345187d8ba5->leave($__internal_1b0e902e30c9f7ecd284e5bf63c8c8d2de2c0573eac0008fd04f0345187d8ba5_prof);

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
