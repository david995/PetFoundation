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
        $__internal_813be3d3f102e3e3219edc6700a8a5eee2c716acb121dfb66fe4b4a9e70b8039 = $this->env->getExtension("native_profiler");
        $__internal_813be3d3f102e3e3219edc6700a8a5eee2c716acb121dfb66fe4b4a9e70b8039->enter($__internal_813be3d3f102e3e3219edc6700a8a5eee2c716acb121dfb66fe4b4a9e70b8039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_813be3d3f102e3e3219edc6700a8a5eee2c716acb121dfb66fe4b4a9e70b8039->leave($__internal_813be3d3f102e3e3219edc6700a8a5eee2c716acb121dfb66fe4b4a9e70b8039_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccb9db857f627e27f565f2c59ee0fc8e1624909eb5981cf0dccdb7b22ad469f7 = $this->env->getExtension("native_profiler");
        $__internal_ccb9db857f627e27f565f2c59ee0fc8e1624909eb5981cf0dccdb7b22ad469f7->enter($__internal_ccb9db857f627e27f565f2c59ee0fc8e1624909eb5981cf0dccdb7b22ad469f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ccb9db857f627e27f565f2c59ee0fc8e1624909eb5981cf0dccdb7b22ad469f7->leave($__internal_ccb9db857f627e27f565f2c59ee0fc8e1624909eb5981cf0dccdb7b22ad469f7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_51c6e711c8ebe093a5fca2909838c8df77611aca6ccd2fea3d73ba46b6a662b7 = $this->env->getExtension("native_profiler");
        $__internal_51c6e711c8ebe093a5fca2909838c8df77611aca6ccd2fea3d73ba46b6a662b7->enter($__internal_51c6e711c8ebe093a5fca2909838c8df77611aca6ccd2fea3d73ba46b6a662b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51c6e711c8ebe093a5fca2909838c8df77611aca6ccd2fea3d73ba46b6a662b7->leave($__internal_51c6e711c8ebe093a5fca2909838c8df77611aca6ccd2fea3d73ba46b6a662b7_prof);

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
