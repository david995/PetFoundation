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
        $__internal_44cce4385f8afe81f555260c476c29016f52f292bb7327715ffa6c93c2f44c21 = $this->env->getExtension("native_profiler");
        $__internal_44cce4385f8afe81f555260c476c29016f52f292bb7327715ffa6c93c2f44c21->enter($__internal_44cce4385f8afe81f555260c476c29016f52f292bb7327715ffa6c93c2f44c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44cce4385f8afe81f555260c476c29016f52f292bb7327715ffa6c93c2f44c21->leave($__internal_44cce4385f8afe81f555260c476c29016f52f292bb7327715ffa6c93c2f44c21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98491ee5ecb2678ed7d4b1d63630d6f9cbc239d2a219c2652d31c4db41ff242a = $this->env->getExtension("native_profiler");
        $__internal_98491ee5ecb2678ed7d4b1d63630d6f9cbc239d2a219c2652d31c4db41ff242a->enter($__internal_98491ee5ecb2678ed7d4b1d63630d6f9cbc239d2a219c2652d31c4db41ff242a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98491ee5ecb2678ed7d4b1d63630d6f9cbc239d2a219c2652d31c4db41ff242a->leave($__internal_98491ee5ecb2678ed7d4b1d63630d6f9cbc239d2a219c2652d31c4db41ff242a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59193240578a24ca982b308a9d450af59e211ccdb8ce3187198e946fda22eb3c = $this->env->getExtension("native_profiler");
        $__internal_59193240578a24ca982b308a9d450af59e211ccdb8ce3187198e946fda22eb3c->enter($__internal_59193240578a24ca982b308a9d450af59e211ccdb8ce3187198e946fda22eb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59193240578a24ca982b308a9d450af59e211ccdb8ce3187198e946fda22eb3c->leave($__internal_59193240578a24ca982b308a9d450af59e211ccdb8ce3187198e946fda22eb3c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5651055901fd32862d37d05d58da847852f2a7162eb28eb9816215242a59e65 = $this->env->getExtension("native_profiler");
        $__internal_e5651055901fd32862d37d05d58da847852f2a7162eb28eb9816215242a59e65->enter($__internal_e5651055901fd32862d37d05d58da847852f2a7162eb28eb9816215242a59e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e5651055901fd32862d37d05d58da847852f2a7162eb28eb9816215242a59e65->leave($__internal_e5651055901fd32862d37d05d58da847852f2a7162eb28eb9816215242a59e65_prof);

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
