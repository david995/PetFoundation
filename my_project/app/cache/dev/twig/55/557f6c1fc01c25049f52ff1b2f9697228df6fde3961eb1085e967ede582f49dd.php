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
        $__internal_4a32b7bf8fb674d4f3903aaf9a547e04b04effdb8f136e2535421e9ff014f922 = $this->env->getExtension("native_profiler");
        $__internal_4a32b7bf8fb674d4f3903aaf9a547e04b04effdb8f136e2535421e9ff014f922->enter($__internal_4a32b7bf8fb674d4f3903aaf9a547e04b04effdb8f136e2535421e9ff014f922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a32b7bf8fb674d4f3903aaf9a547e04b04effdb8f136e2535421e9ff014f922->leave($__internal_4a32b7bf8fb674d4f3903aaf9a547e04b04effdb8f136e2535421e9ff014f922_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19bad867ff624f3b3064954c2dda9f3db5709828491f131623144faed9ac38bd = $this->env->getExtension("native_profiler");
        $__internal_19bad867ff624f3b3064954c2dda9f3db5709828491f131623144faed9ac38bd->enter($__internal_19bad867ff624f3b3064954c2dda9f3db5709828491f131623144faed9ac38bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19bad867ff624f3b3064954c2dda9f3db5709828491f131623144faed9ac38bd->leave($__internal_19bad867ff624f3b3064954c2dda9f3db5709828491f131623144faed9ac38bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_774a245237bac4cca9fc9c8b87317e0767bff36c6e92953a0383aaa348ab11dd = $this->env->getExtension("native_profiler");
        $__internal_774a245237bac4cca9fc9c8b87317e0767bff36c6e92953a0383aaa348ab11dd->enter($__internal_774a245237bac4cca9fc9c8b87317e0767bff36c6e92953a0383aaa348ab11dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_774a245237bac4cca9fc9c8b87317e0767bff36c6e92953a0383aaa348ab11dd->leave($__internal_774a245237bac4cca9fc9c8b87317e0767bff36c6e92953a0383aaa348ab11dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_28a5e5913936d706fe960c23cfda43aec6b47e2362fcb9c36935bc404d5957c2 = $this->env->getExtension("native_profiler");
        $__internal_28a5e5913936d706fe960c23cfda43aec6b47e2362fcb9c36935bc404d5957c2->enter($__internal_28a5e5913936d706fe960c23cfda43aec6b47e2362fcb9c36935bc404d5957c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_28a5e5913936d706fe960c23cfda43aec6b47e2362fcb9c36935bc404d5957c2->leave($__internal_28a5e5913936d706fe960c23cfda43aec6b47e2362fcb9c36935bc404d5957c2_prof);

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
