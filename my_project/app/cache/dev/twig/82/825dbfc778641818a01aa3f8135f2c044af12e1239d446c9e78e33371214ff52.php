<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_263c46df61493283b001898cfc4a707bf87ef5270e9b4c82aceb8c9dd56d8569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_336bca80c920d083765a97113bd1310ec837ebadc7a4e478bcc5bfe249da80d4 = $this->env->getExtension("native_profiler");
        $__internal_336bca80c920d083765a97113bd1310ec837ebadc7a4e478bcc5bfe249da80d4->enter($__internal_336bca80c920d083765a97113bd1310ec837ebadc7a4e478bcc5bfe249da80d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336bca80c920d083765a97113bd1310ec837ebadc7a4e478bcc5bfe249da80d4->leave($__internal_336bca80c920d083765a97113bd1310ec837ebadc7a4e478bcc5bfe249da80d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7baa95698a273c7c27dda9baef06282388df57da16937337d693482b140ab53 = $this->env->getExtension("native_profiler");
        $__internal_f7baa95698a273c7c27dda9baef06282388df57da16937337d693482b140ab53->enter($__internal_f7baa95698a273c7c27dda9baef06282388df57da16937337d693482b140ab53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f7baa95698a273c7c27dda9baef06282388df57da16937337d693482b140ab53->leave($__internal_f7baa95698a273c7c27dda9baef06282388df57da16937337d693482b140ab53_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad88e5d40d6d4d2ae35d81ee3bb0fec574ccaa96436ad991afefdca65b8e76b2 = $this->env->getExtension("native_profiler");
        $__internal_ad88e5d40d6d4d2ae35d81ee3bb0fec574ccaa96436ad991afefdca65b8e76b2->enter($__internal_ad88e5d40d6d4d2ae35d81ee3bb0fec574ccaa96436ad991afefdca65b8e76b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ad88e5d40d6d4d2ae35d81ee3bb0fec574ccaa96436ad991afefdca65b8e76b2->leave($__internal_ad88e5d40d6d4d2ae35d81ee3bb0fec574ccaa96436ad991afefdca65b8e76b2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76ff6abe8f2c545034e9c66c2484b403da21ecc400d2cbec78bd5f2071224b75 = $this->env->getExtension("native_profiler");
        $__internal_76ff6abe8f2c545034e9c66c2484b403da21ecc400d2cbec78bd5f2071224b75->enter($__internal_76ff6abe8f2c545034e9c66c2484b403da21ecc400d2cbec78bd5f2071224b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_76ff6abe8f2c545034e9c66c2484b403da21ecc400d2cbec78bd5f2071224b75->leave($__internal_76ff6abe8f2c545034e9c66c2484b403da21ecc400d2cbec78bd5f2071224b75_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
