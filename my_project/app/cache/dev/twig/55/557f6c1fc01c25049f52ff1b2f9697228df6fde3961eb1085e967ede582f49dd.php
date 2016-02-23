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
        $__internal_846f85a10f2102b2a097003308c4678d261f700589504fa8b170959078ca24d9 = $this->env->getExtension("native_profiler");
        $__internal_846f85a10f2102b2a097003308c4678d261f700589504fa8b170959078ca24d9->enter($__internal_846f85a10f2102b2a097003308c4678d261f700589504fa8b170959078ca24d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_846f85a10f2102b2a097003308c4678d261f700589504fa8b170959078ca24d9->leave($__internal_846f85a10f2102b2a097003308c4678d261f700589504fa8b170959078ca24d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_902644791355b46a2ec158636718c3cf5e681decfc9aedea60038c605d02518c = $this->env->getExtension("native_profiler");
        $__internal_902644791355b46a2ec158636718c3cf5e681decfc9aedea60038c605d02518c->enter($__internal_902644791355b46a2ec158636718c3cf5e681decfc9aedea60038c605d02518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_902644791355b46a2ec158636718c3cf5e681decfc9aedea60038c605d02518c->leave($__internal_902644791355b46a2ec158636718c3cf5e681decfc9aedea60038c605d02518c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d11e1a6598c85cf87a21fddaf3131128f2eedd66965b27b33a1d5b3c0bd2e98 = $this->env->getExtension("native_profiler");
        $__internal_3d11e1a6598c85cf87a21fddaf3131128f2eedd66965b27b33a1d5b3c0bd2e98->enter($__internal_3d11e1a6598c85cf87a21fddaf3131128f2eedd66965b27b33a1d5b3c0bd2e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d11e1a6598c85cf87a21fddaf3131128f2eedd66965b27b33a1d5b3c0bd2e98->leave($__internal_3d11e1a6598c85cf87a21fddaf3131128f2eedd66965b27b33a1d5b3c0bd2e98_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de0c3c76386fc5c0a287fd5959cb41d9e319ac311b1a117c681bc570d5e82330 = $this->env->getExtension("native_profiler");
        $__internal_de0c3c76386fc5c0a287fd5959cb41d9e319ac311b1a117c681bc570d5e82330->enter($__internal_de0c3c76386fc5c0a287fd5959cb41d9e319ac311b1a117c681bc570d5e82330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de0c3c76386fc5c0a287fd5959cb41d9e319ac311b1a117c681bc570d5e82330->leave($__internal_de0c3c76386fc5c0a287fd5959cb41d9e319ac311b1a117c681bc570d5e82330_prof);

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
