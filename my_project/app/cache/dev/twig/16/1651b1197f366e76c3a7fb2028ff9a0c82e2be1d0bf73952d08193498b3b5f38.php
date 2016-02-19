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
        $__internal_52109825acde597e2a5244d5c472ce72a4b91c07a561ee3c65baca9ab0c560c4 = $this->env->getExtension("native_profiler");
        $__internal_52109825acde597e2a5244d5c472ce72a4b91c07a561ee3c65baca9ab0c560c4->enter($__internal_52109825acde597e2a5244d5c472ce72a4b91c07a561ee3c65baca9ab0c560c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52109825acde597e2a5244d5c472ce72a4b91c07a561ee3c65baca9ab0c560c4->leave($__internal_52109825acde597e2a5244d5c472ce72a4b91c07a561ee3c65baca9ab0c560c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0913b870fcddbb486cef67b75c1b7ef7a1d42c59f56a7bf41595286a47254bf9 = $this->env->getExtension("native_profiler");
        $__internal_0913b870fcddbb486cef67b75c1b7ef7a1d42c59f56a7bf41595286a47254bf9->enter($__internal_0913b870fcddbb486cef67b75c1b7ef7a1d42c59f56a7bf41595286a47254bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0913b870fcddbb486cef67b75c1b7ef7a1d42c59f56a7bf41595286a47254bf9->leave($__internal_0913b870fcddbb486cef67b75c1b7ef7a1d42c59f56a7bf41595286a47254bf9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_934a6ca48185830f1db95d9321696e57c415ce2f57aad9a8d4c6b5ac50ee837f = $this->env->getExtension("native_profiler");
        $__internal_934a6ca48185830f1db95d9321696e57c415ce2f57aad9a8d4c6b5ac50ee837f->enter($__internal_934a6ca48185830f1db95d9321696e57c415ce2f57aad9a8d4c6b5ac50ee837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_934a6ca48185830f1db95d9321696e57c415ce2f57aad9a8d4c6b5ac50ee837f->leave($__internal_934a6ca48185830f1db95d9321696e57c415ce2f57aad9a8d4c6b5ac50ee837f_prof);

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
