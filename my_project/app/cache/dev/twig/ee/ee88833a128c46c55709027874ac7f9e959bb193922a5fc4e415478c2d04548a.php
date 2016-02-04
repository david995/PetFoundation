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
        $__internal_2a7f80b183f603efd568cbc788ef378c3176e8a7c5dee8d8afb059487750157d = $this->env->getExtension("native_profiler");
        $__internal_2a7f80b183f603efd568cbc788ef378c3176e8a7c5dee8d8afb059487750157d->enter($__internal_2a7f80b183f603efd568cbc788ef378c3176e8a7c5dee8d8afb059487750157d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7f80b183f603efd568cbc788ef378c3176e8a7c5dee8d8afb059487750157d->leave($__internal_2a7f80b183f603efd568cbc788ef378c3176e8a7c5dee8d8afb059487750157d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82e00f081cb7ca2053ddae094b7af4f859b65e5f39d9c418acc48fc216642cab = $this->env->getExtension("native_profiler");
        $__internal_82e00f081cb7ca2053ddae094b7af4f859b65e5f39d9c418acc48fc216642cab->enter($__internal_82e00f081cb7ca2053ddae094b7af4f859b65e5f39d9c418acc48fc216642cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_82e00f081cb7ca2053ddae094b7af4f859b65e5f39d9c418acc48fc216642cab->leave($__internal_82e00f081cb7ca2053ddae094b7af4f859b65e5f39d9c418acc48fc216642cab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cae4cab0024966b12eab21e68c45964ffe5055fc4b43883d64da57acdb7454f = $this->env->getExtension("native_profiler");
        $__internal_3cae4cab0024966b12eab21e68c45964ffe5055fc4b43883d64da57acdb7454f->enter($__internal_3cae4cab0024966b12eab21e68c45964ffe5055fc4b43883d64da57acdb7454f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3cae4cab0024966b12eab21e68c45964ffe5055fc4b43883d64da57acdb7454f->leave($__internal_3cae4cab0024966b12eab21e68c45964ffe5055fc4b43883d64da57acdb7454f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0c8572f20a50b6b9a87b30bc10adbeb779cd8a411ee0ba87a4ceb569ea5d162 = $this->env->getExtension("native_profiler");
        $__internal_f0c8572f20a50b6b9a87b30bc10adbeb779cd8a411ee0ba87a4ceb569ea5d162->enter($__internal_f0c8572f20a50b6b9a87b30bc10adbeb779cd8a411ee0ba87a4ceb569ea5d162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0c8572f20a50b6b9a87b30bc10adbeb779cd8a411ee0ba87a4ceb569ea5d162->leave($__internal_f0c8572f20a50b6b9a87b30bc10adbeb779cd8a411ee0ba87a4ceb569ea5d162_prof);

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
