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
        $__internal_a4901b04610c4238188fc137604bb6851ae7b5c9b6da5799bc6a68af1bfc05ef = $this->env->getExtension("native_profiler");
        $__internal_a4901b04610c4238188fc137604bb6851ae7b5c9b6da5799bc6a68af1bfc05ef->enter($__internal_a4901b04610c4238188fc137604bb6851ae7b5c9b6da5799bc6a68af1bfc05ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4901b04610c4238188fc137604bb6851ae7b5c9b6da5799bc6a68af1bfc05ef->leave($__internal_a4901b04610c4238188fc137604bb6851ae7b5c9b6da5799bc6a68af1bfc05ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a01003dae9a6b944801e6f5dd8525ab78834ce63c91b3841fa31f58f962c3f9f = $this->env->getExtension("native_profiler");
        $__internal_a01003dae9a6b944801e6f5dd8525ab78834ce63c91b3841fa31f58f962c3f9f->enter($__internal_a01003dae9a6b944801e6f5dd8525ab78834ce63c91b3841fa31f58f962c3f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a01003dae9a6b944801e6f5dd8525ab78834ce63c91b3841fa31f58f962c3f9f->leave($__internal_a01003dae9a6b944801e6f5dd8525ab78834ce63c91b3841fa31f58f962c3f9f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1272d26e6891eb2f6a0fa8bc2c250cc5f98425fce6de0ab446c5631c9b408cd5 = $this->env->getExtension("native_profiler");
        $__internal_1272d26e6891eb2f6a0fa8bc2c250cc5f98425fce6de0ab446c5631c9b408cd5->enter($__internal_1272d26e6891eb2f6a0fa8bc2c250cc5f98425fce6de0ab446c5631c9b408cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1272d26e6891eb2f6a0fa8bc2c250cc5f98425fce6de0ab446c5631c9b408cd5->leave($__internal_1272d26e6891eb2f6a0fa8bc2c250cc5f98425fce6de0ab446c5631c9b408cd5_prof);

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
