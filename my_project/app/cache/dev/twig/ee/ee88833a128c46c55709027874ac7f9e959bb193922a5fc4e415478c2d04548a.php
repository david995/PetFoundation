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
        $__internal_f976a207b7e93b5e770ad0af7324442e96f7ddad67d6c8860cb63155df2ceef7 = $this->env->getExtension("native_profiler");
        $__internal_f976a207b7e93b5e770ad0af7324442e96f7ddad67d6c8860cb63155df2ceef7->enter($__internal_f976a207b7e93b5e770ad0af7324442e96f7ddad67d6c8860cb63155df2ceef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f976a207b7e93b5e770ad0af7324442e96f7ddad67d6c8860cb63155df2ceef7->leave($__internal_f976a207b7e93b5e770ad0af7324442e96f7ddad67d6c8860cb63155df2ceef7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9a0e5fbb00e5cb1d5e119acbbace95da6756560ba8a636e48bd38db4e9f7448 = $this->env->getExtension("native_profiler");
        $__internal_c9a0e5fbb00e5cb1d5e119acbbace95da6756560ba8a636e48bd38db4e9f7448->enter($__internal_c9a0e5fbb00e5cb1d5e119acbbace95da6756560ba8a636e48bd38db4e9f7448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9a0e5fbb00e5cb1d5e119acbbace95da6756560ba8a636e48bd38db4e9f7448->leave($__internal_c9a0e5fbb00e5cb1d5e119acbbace95da6756560ba8a636e48bd38db4e9f7448_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1db8367277881a9cc8a1f5e50a4f98235a018a437fc8053bc110e91744b96e48 = $this->env->getExtension("native_profiler");
        $__internal_1db8367277881a9cc8a1f5e50a4f98235a018a437fc8053bc110e91744b96e48->enter($__internal_1db8367277881a9cc8a1f5e50a4f98235a018a437fc8053bc110e91744b96e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1db8367277881a9cc8a1f5e50a4f98235a018a437fc8053bc110e91744b96e48->leave($__internal_1db8367277881a9cc8a1f5e50a4f98235a018a437fc8053bc110e91744b96e48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31e5bc4e409003b63389707fb1bcddc89b56f4d6e3ae0c2970cc939668aabd8e = $this->env->getExtension("native_profiler");
        $__internal_31e5bc4e409003b63389707fb1bcddc89b56f4d6e3ae0c2970cc939668aabd8e->enter($__internal_31e5bc4e409003b63389707fb1bcddc89b56f4d6e3ae0c2970cc939668aabd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_31e5bc4e409003b63389707fb1bcddc89b56f4d6e3ae0c2970cc939668aabd8e->leave($__internal_31e5bc4e409003b63389707fb1bcddc89b56f4d6e3ae0c2970cc939668aabd8e_prof);

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
