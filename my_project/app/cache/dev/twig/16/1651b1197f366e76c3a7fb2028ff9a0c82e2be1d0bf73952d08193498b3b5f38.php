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
        $__internal_a5a4a17b3d19963f2e6bc38c725faaaceebbf13beec948d10b58da7f422bf346 = $this->env->getExtension("native_profiler");
        $__internal_a5a4a17b3d19963f2e6bc38c725faaaceebbf13beec948d10b58da7f422bf346->enter($__internal_a5a4a17b3d19963f2e6bc38c725faaaceebbf13beec948d10b58da7f422bf346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5a4a17b3d19963f2e6bc38c725faaaceebbf13beec948d10b58da7f422bf346->leave($__internal_a5a4a17b3d19963f2e6bc38c725faaaceebbf13beec948d10b58da7f422bf346_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba1b84e865cca15598f7f4dfd9d12f7d31e0112bf3935c3118f36df255d443d2 = $this->env->getExtension("native_profiler");
        $__internal_ba1b84e865cca15598f7f4dfd9d12f7d31e0112bf3935c3118f36df255d443d2->enter($__internal_ba1b84e865cca15598f7f4dfd9d12f7d31e0112bf3935c3118f36df255d443d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ba1b84e865cca15598f7f4dfd9d12f7d31e0112bf3935c3118f36df255d443d2->leave($__internal_ba1b84e865cca15598f7f4dfd9d12f7d31e0112bf3935c3118f36df255d443d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a0183a064b463e748272ec45b0b6dcdc3310b25e0855de3e512ebcfb0d45221 = $this->env->getExtension("native_profiler");
        $__internal_0a0183a064b463e748272ec45b0b6dcdc3310b25e0855de3e512ebcfb0d45221->enter($__internal_0a0183a064b463e748272ec45b0b6dcdc3310b25e0855de3e512ebcfb0d45221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a0183a064b463e748272ec45b0b6dcdc3310b25e0855de3e512ebcfb0d45221->leave($__internal_0a0183a064b463e748272ec45b0b6dcdc3310b25e0855de3e512ebcfb0d45221_prof);

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
