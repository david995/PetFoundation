<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f00d35714eef09dd7f2b2100f95d73a57b68c5f3590db3523342b65a1982850d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_36b2fb69aba4883fef41b620d4264050b597016dce9c973fba6636d2823c407c = $this->env->getExtension("native_profiler");
        $__internal_36b2fb69aba4883fef41b620d4264050b597016dce9c973fba6636d2823c407c->enter($__internal_36b2fb69aba4883fef41b620d4264050b597016dce9c973fba6636d2823c407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b2fb69aba4883fef41b620d4264050b597016dce9c973fba6636d2823c407c->leave($__internal_36b2fb69aba4883fef41b620d4264050b597016dce9c973fba6636d2823c407c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba98f8f3773aa784c4d2076d2518f18cab6950ced4ef59bd074628536b344447 = $this->env->getExtension("native_profiler");
        $__internal_ba98f8f3773aa784c4d2076d2518f18cab6950ced4ef59bd074628536b344447->enter($__internal_ba98f8f3773aa784c4d2076d2518f18cab6950ced4ef59bd074628536b344447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba98f8f3773aa784c4d2076d2518f18cab6950ced4ef59bd074628536b344447->leave($__internal_ba98f8f3773aa784c4d2076d2518f18cab6950ced4ef59bd074628536b344447_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e2e10f829dab952219f629efc253250890fc519900bd2dbf3539827dfe962e4 = $this->env->getExtension("native_profiler");
        $__internal_6e2e10f829dab952219f629efc253250890fc519900bd2dbf3539827dfe962e4->enter($__internal_6e2e10f829dab952219f629efc253250890fc519900bd2dbf3539827dfe962e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e2e10f829dab952219f629efc253250890fc519900bd2dbf3539827dfe962e4->leave($__internal_6e2e10f829dab952219f629efc253250890fc519900bd2dbf3539827dfe962e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_209353d2c36a866cd8642c8dc8ebcfc2a774bf29772279bbd9cf75f8b1182bbc = $this->env->getExtension("native_profiler");
        $__internal_209353d2c36a866cd8642c8dc8ebcfc2a774bf29772279bbd9cf75f8b1182bbc->enter($__internal_209353d2c36a866cd8642c8dc8ebcfc2a774bf29772279bbd9cf75f8b1182bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_209353d2c36a866cd8642c8dc8ebcfc2a774bf29772279bbd9cf75f8b1182bbc->leave($__internal_209353d2c36a866cd8642c8dc8ebcfc2a774bf29772279bbd9cf75f8b1182bbc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
