<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f00d35714eef09dd7f2b2100f95d73a57b68c5f3590db3523342b65a1982850d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_182801957c87c06b4519ffb23cbf4d04c7acfe62a407280bf8aba70e9a0f3050 = $this->env->getExtension("native_profiler");
        $__internal_182801957c87c06b4519ffb23cbf4d04c7acfe62a407280bf8aba70e9a0f3050->enter($__internal_182801957c87c06b4519ffb23cbf4d04c7acfe62a407280bf8aba70e9a0f3050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182801957c87c06b4519ffb23cbf4d04c7acfe62a407280bf8aba70e9a0f3050->leave($__internal_182801957c87c06b4519ffb23cbf4d04c7acfe62a407280bf8aba70e9a0f3050_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5aa2d301febcda9bdc5e6f4437bd669776543ebc1618295878a840eb3da94065 = $this->env->getExtension("native_profiler");
        $__internal_5aa2d301febcda9bdc5e6f4437bd669776543ebc1618295878a840eb3da94065->enter($__internal_5aa2d301febcda9bdc5e6f4437bd669776543ebc1618295878a840eb3da94065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5aa2d301febcda9bdc5e6f4437bd669776543ebc1618295878a840eb3da94065->leave($__internal_5aa2d301febcda9bdc5e6f4437bd669776543ebc1618295878a840eb3da94065_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08c2577b77510279a771f4343b5c961440f6874ab112a0728075db828cc647b3 = $this->env->getExtension("native_profiler");
        $__internal_08c2577b77510279a771f4343b5c961440f6874ab112a0728075db828cc647b3->enter($__internal_08c2577b77510279a771f4343b5c961440f6874ab112a0728075db828cc647b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08c2577b77510279a771f4343b5c961440f6874ab112a0728075db828cc647b3->leave($__internal_08c2577b77510279a771f4343b5c961440f6874ab112a0728075db828cc647b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c41295a76b73f2f32607bbb6d692f7015985df12a8384021940d6e620862542 = $this->env->getExtension("native_profiler");
        $__internal_7c41295a76b73f2f32607bbb6d692f7015985df12a8384021940d6e620862542->enter($__internal_7c41295a76b73f2f32607bbb6d692f7015985df12a8384021940d6e620862542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c41295a76b73f2f32607bbb6d692f7015985df12a8384021940d6e620862542->leave($__internal_7c41295a76b73f2f32607bbb6d692f7015985df12a8384021940d6e620862542_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
