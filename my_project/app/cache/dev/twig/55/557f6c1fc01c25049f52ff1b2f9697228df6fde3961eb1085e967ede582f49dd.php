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
        $__internal_3a2e9c600717e518c5932533f0bd323d1e64b577100c27e1dc9365c2de97e9c0 = $this->env->getExtension("native_profiler");
        $__internal_3a2e9c600717e518c5932533f0bd323d1e64b577100c27e1dc9365c2de97e9c0->enter($__internal_3a2e9c600717e518c5932533f0bd323d1e64b577100c27e1dc9365c2de97e9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2e9c600717e518c5932533f0bd323d1e64b577100c27e1dc9365c2de97e9c0->leave($__internal_3a2e9c600717e518c5932533f0bd323d1e64b577100c27e1dc9365c2de97e9c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0725b928698c0bb21fe90f588e661c04dcc9ea09faac480b7503c5f575b3119e = $this->env->getExtension("native_profiler");
        $__internal_0725b928698c0bb21fe90f588e661c04dcc9ea09faac480b7503c5f575b3119e->enter($__internal_0725b928698c0bb21fe90f588e661c04dcc9ea09faac480b7503c5f575b3119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0725b928698c0bb21fe90f588e661c04dcc9ea09faac480b7503c5f575b3119e->leave($__internal_0725b928698c0bb21fe90f588e661c04dcc9ea09faac480b7503c5f575b3119e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9c628bef34cc96410689586bafe07c45981f58ac0326c5570be44868ebf6ecb = $this->env->getExtension("native_profiler");
        $__internal_e9c628bef34cc96410689586bafe07c45981f58ac0326c5570be44868ebf6ecb->enter($__internal_e9c628bef34cc96410689586bafe07c45981f58ac0326c5570be44868ebf6ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e9c628bef34cc96410689586bafe07c45981f58ac0326c5570be44868ebf6ecb->leave($__internal_e9c628bef34cc96410689586bafe07c45981f58ac0326c5570be44868ebf6ecb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_687d006cc6f03c379e3c4760f22c3e97d3c42aed1427d0fc843d5feff7cee4ed = $this->env->getExtension("native_profiler");
        $__internal_687d006cc6f03c379e3c4760f22c3e97d3c42aed1427d0fc843d5feff7cee4ed->enter($__internal_687d006cc6f03c379e3c4760f22c3e97d3c42aed1427d0fc843d5feff7cee4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_687d006cc6f03c379e3c4760f22c3e97d3c42aed1427d0fc843d5feff7cee4ed->leave($__internal_687d006cc6f03c379e3c4760f22c3e97d3c42aed1427d0fc843d5feff7cee4ed_prof);

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
