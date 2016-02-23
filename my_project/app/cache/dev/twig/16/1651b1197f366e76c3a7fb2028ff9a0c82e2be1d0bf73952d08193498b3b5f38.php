<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f88972d0b034f50798cd1799acb9a489a4b8c0f799f1ea82edc8beacbd2df416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6ffdd248ae76a4044423c6aad77cb4d9db27a8b90a0bc3c155e1969ccfbbc6ab = $this->env->getExtension("native_profiler");
        $__internal_6ffdd248ae76a4044423c6aad77cb4d9db27a8b90a0bc3c155e1969ccfbbc6ab->enter($__internal_6ffdd248ae76a4044423c6aad77cb4d9db27a8b90a0bc3c155e1969ccfbbc6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ffdd248ae76a4044423c6aad77cb4d9db27a8b90a0bc3c155e1969ccfbbc6ab->leave($__internal_6ffdd248ae76a4044423c6aad77cb4d9db27a8b90a0bc3c155e1969ccfbbc6ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0970197585f0e18360bcee09ce26769b7c16321ca6b524a82e8b0a4bd30c360 = $this->env->getExtension("native_profiler");
        $__internal_e0970197585f0e18360bcee09ce26769b7c16321ca6b524a82e8b0a4bd30c360->enter($__internal_e0970197585f0e18360bcee09ce26769b7c16321ca6b524a82e8b0a4bd30c360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e0970197585f0e18360bcee09ce26769b7c16321ca6b524a82e8b0a4bd30c360->leave($__internal_e0970197585f0e18360bcee09ce26769b7c16321ca6b524a82e8b0a4bd30c360_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a3d344c469ff7a9f6fb9232cd25cb8a1f59e63f938d2d2c5234909d948299f4 = $this->env->getExtension("native_profiler");
        $__internal_7a3d344c469ff7a9f6fb9232cd25cb8a1f59e63f938d2d2c5234909d948299f4->enter($__internal_7a3d344c469ff7a9f6fb9232cd25cb8a1f59e63f938d2d2c5234909d948299f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7a3d344c469ff7a9f6fb9232cd25cb8a1f59e63f938d2d2c5234909d948299f4->leave($__internal_7a3d344c469ff7a9f6fb9232cd25cb8a1f59e63f938d2d2c5234909d948299f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
