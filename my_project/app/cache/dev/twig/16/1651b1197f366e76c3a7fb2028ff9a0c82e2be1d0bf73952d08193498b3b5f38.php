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
        $__internal_f94d981a6622b3f2d9704db5bb1dd6da483730458b7d40b34f5d67a71fd0159c = $this->env->getExtension("native_profiler");
        $__internal_f94d981a6622b3f2d9704db5bb1dd6da483730458b7d40b34f5d67a71fd0159c->enter($__internal_f94d981a6622b3f2d9704db5bb1dd6da483730458b7d40b34f5d67a71fd0159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f94d981a6622b3f2d9704db5bb1dd6da483730458b7d40b34f5d67a71fd0159c->leave($__internal_f94d981a6622b3f2d9704db5bb1dd6da483730458b7d40b34f5d67a71fd0159c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_177d5fad39c2b7d40f6a5834cca5e1a6c6bcb46dd634df2150ac9910645e5172 = $this->env->getExtension("native_profiler");
        $__internal_177d5fad39c2b7d40f6a5834cca5e1a6c6bcb46dd634df2150ac9910645e5172->enter($__internal_177d5fad39c2b7d40f6a5834cca5e1a6c6bcb46dd634df2150ac9910645e5172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_177d5fad39c2b7d40f6a5834cca5e1a6c6bcb46dd634df2150ac9910645e5172->leave($__internal_177d5fad39c2b7d40f6a5834cca5e1a6c6bcb46dd634df2150ac9910645e5172_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f25d5c17e2912cc732670137b1a67ca527200b9da6308d32da00e37dba925ac2 = $this->env->getExtension("native_profiler");
        $__internal_f25d5c17e2912cc732670137b1a67ca527200b9da6308d32da00e37dba925ac2->enter($__internal_f25d5c17e2912cc732670137b1a67ca527200b9da6308d32da00e37dba925ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f25d5c17e2912cc732670137b1a67ca527200b9da6308d32da00e37dba925ac2->leave($__internal_f25d5c17e2912cc732670137b1a67ca527200b9da6308d32da00e37dba925ac2_prof);

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
