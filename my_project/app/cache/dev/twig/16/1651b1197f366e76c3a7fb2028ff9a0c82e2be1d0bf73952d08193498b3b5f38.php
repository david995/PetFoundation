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
        $__internal_5acdd110c1980663badccc8931dc8c4259def1391564767d50049619118b3294 = $this->env->getExtension("native_profiler");
        $__internal_5acdd110c1980663badccc8931dc8c4259def1391564767d50049619118b3294->enter($__internal_5acdd110c1980663badccc8931dc8c4259def1391564767d50049619118b3294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5acdd110c1980663badccc8931dc8c4259def1391564767d50049619118b3294->leave($__internal_5acdd110c1980663badccc8931dc8c4259def1391564767d50049619118b3294_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98877d9480f2045c122103e6fb45599025ecab8391a98e3440bdc1276791f183 = $this->env->getExtension("native_profiler");
        $__internal_98877d9480f2045c122103e6fb45599025ecab8391a98e3440bdc1276791f183->enter($__internal_98877d9480f2045c122103e6fb45599025ecab8391a98e3440bdc1276791f183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_98877d9480f2045c122103e6fb45599025ecab8391a98e3440bdc1276791f183->leave($__internal_98877d9480f2045c122103e6fb45599025ecab8391a98e3440bdc1276791f183_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa4fd738f0da69a0eb7ec12d4a0ce7cdfbb9ed9a543fb1f334710e839e8ed24 = $this->env->getExtension("native_profiler");
        $__internal_4aa4fd738f0da69a0eb7ec12d4a0ce7cdfbb9ed9a543fb1f334710e839e8ed24->enter($__internal_4aa4fd738f0da69a0eb7ec12d4a0ce7cdfbb9ed9a543fb1f334710e839e8ed24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4aa4fd738f0da69a0eb7ec12d4a0ce7cdfbb9ed9a543fb1f334710e839e8ed24->leave($__internal_4aa4fd738f0da69a0eb7ec12d4a0ce7cdfbb9ed9a543fb1f334710e839e8ed24_prof);

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
