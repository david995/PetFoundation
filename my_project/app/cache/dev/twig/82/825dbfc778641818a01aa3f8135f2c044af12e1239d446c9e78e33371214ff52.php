<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_263c46df61493283b001898cfc4a707bf87ef5270e9b4c82aceb8c9dd56d8569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_560d3defda1cc492f7b512b0ee590746dd2e526e8af5a4cf4ca08bfb5be8377b = $this->env->getExtension("native_profiler");
        $__internal_560d3defda1cc492f7b512b0ee590746dd2e526e8af5a4cf4ca08bfb5be8377b->enter($__internal_560d3defda1cc492f7b512b0ee590746dd2e526e8af5a4cf4ca08bfb5be8377b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_560d3defda1cc492f7b512b0ee590746dd2e526e8af5a4cf4ca08bfb5be8377b->leave($__internal_560d3defda1cc492f7b512b0ee590746dd2e526e8af5a4cf4ca08bfb5be8377b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79b32d27c73cf957fadac652b68df09312b81ac39606eadf2a772f87d9860b6b = $this->env->getExtension("native_profiler");
        $__internal_79b32d27c73cf957fadac652b68df09312b81ac39606eadf2a772f87d9860b6b->enter($__internal_79b32d27c73cf957fadac652b68df09312b81ac39606eadf2a772f87d9860b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_79b32d27c73cf957fadac652b68df09312b81ac39606eadf2a772f87d9860b6b->leave($__internal_79b32d27c73cf957fadac652b68df09312b81ac39606eadf2a772f87d9860b6b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7b1172aa37f460f4d956e4743df747860ca4d4660d06670d1966d2d45fbe4a6 = $this->env->getExtension("native_profiler");
        $__internal_c7b1172aa37f460f4d956e4743df747860ca4d4660d06670d1966d2d45fbe4a6->enter($__internal_c7b1172aa37f460f4d956e4743df747860ca4d4660d06670d1966d2d45fbe4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c7b1172aa37f460f4d956e4743df747860ca4d4660d06670d1966d2d45fbe4a6->leave($__internal_c7b1172aa37f460f4d956e4743df747860ca4d4660d06670d1966d2d45fbe4a6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a9cc1006eb20f9da844cb5a587976288d2c5c88e556e535256f155880bfbbc4 = $this->env->getExtension("native_profiler");
        $__internal_8a9cc1006eb20f9da844cb5a587976288d2c5c88e556e535256f155880bfbbc4->enter($__internal_8a9cc1006eb20f9da844cb5a587976288d2c5c88e556e535256f155880bfbbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8a9cc1006eb20f9da844cb5a587976288d2c5c88e556e535256f155880bfbbc4->leave($__internal_8a9cc1006eb20f9da844cb5a587976288d2c5c88e556e535256f155880bfbbc4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
