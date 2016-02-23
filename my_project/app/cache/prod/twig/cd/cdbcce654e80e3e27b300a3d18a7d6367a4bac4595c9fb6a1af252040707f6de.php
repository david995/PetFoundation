<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_537bb29faa6c9f7c42eb16e289eb7bc969c8529483f5b7b0c2df03dacde83636 extends Twig_Template
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
        $__internal_b175860be16afe1e85bc9f317e393b1ed22b2c16a90a0eec4e479a034706ce92 = $this->env->getExtension("native_profiler");
        $__internal_b175860be16afe1e85bc9f317e393b1ed22b2c16a90a0eec4e479a034706ce92->enter($__internal_b175860be16afe1e85bc9f317e393b1ed22b2c16a90a0eec4e479a034706ce92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b175860be16afe1e85bc9f317e393b1ed22b2c16a90a0eec4e479a034706ce92->leave($__internal_b175860be16afe1e85bc9f317e393b1ed22b2c16a90a0eec4e479a034706ce92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54d51a22b2adc7bec8b1a11c1ca6c1f22870b23f9836aa841ff9484a9513ae62 = $this->env->getExtension("native_profiler");
        $__internal_54d51a22b2adc7bec8b1a11c1ca6c1f22870b23f9836aa841ff9484a9513ae62->enter($__internal_54d51a22b2adc7bec8b1a11c1ca6c1f22870b23f9836aa841ff9484a9513ae62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_54d51a22b2adc7bec8b1a11c1ca6c1f22870b23f9836aa841ff9484a9513ae62->leave($__internal_54d51a22b2adc7bec8b1a11c1ca6c1f22870b23f9836aa841ff9484a9513ae62_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_059e97edd7fe0a17225722901d09b2bce28ba3a5a0ec0c9d0dd9dc7a88f6da64 = $this->env->getExtension("native_profiler");
        $__internal_059e97edd7fe0a17225722901d09b2bce28ba3a5a0ec0c9d0dd9dc7a88f6da64->enter($__internal_059e97edd7fe0a17225722901d09b2bce28ba3a5a0ec0c9d0dd9dc7a88f6da64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_059e97edd7fe0a17225722901d09b2bce28ba3a5a0ec0c9d0dd9dc7a88f6da64->leave($__internal_059e97edd7fe0a17225722901d09b2bce28ba3a5a0ec0c9d0dd9dc7a88f6da64_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d22ec80b4f10d0c34bcd2af11ceaa313b53582c3667080020f0d05fcc6fad179 = $this->env->getExtension("native_profiler");
        $__internal_d22ec80b4f10d0c34bcd2af11ceaa313b53582c3667080020f0d05fcc6fad179->enter($__internal_d22ec80b4f10d0c34bcd2af11ceaa313b53582c3667080020f0d05fcc6fad179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d22ec80b4f10d0c34bcd2af11ceaa313b53582c3667080020f0d05fcc6fad179->leave($__internal_d22ec80b4f10d0c34bcd2af11ceaa313b53582c3667080020f0d05fcc6fad179_prof);

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
