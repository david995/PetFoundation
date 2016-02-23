<?php

/* :anuncios:edit.html.twig */
class __TwigTemplate_833cf3abc5d584f95ce1a73adde869c11d0a32779059a7e2f213f340057be852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":anuncios:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe1d02fc00c99e89b0681e5521cc750a7d6bc359b607eb61457c73620521df9b = $this->env->getExtension("native_profiler");
        $__internal_fe1d02fc00c99e89b0681e5521cc750a7d6bc359b607eb61457c73620521df9b->enter($__internal_fe1d02fc00c99e89b0681e5521cc750a7d6bc359b607eb61457c73620521df9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anuncios:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe1d02fc00c99e89b0681e5521cc750a7d6bc359b607eb61457c73620521df9b->leave($__internal_fe1d02fc00c99e89b0681e5521cc750a7d6bc359b607eb61457c73620521df9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb31471cdf9d3007e975fcceea0b4e627de7476208fd56b2cccd8cad3a45238 = $this->env->getExtension("native_profiler");
        $__internal_7fb31471cdf9d3007e975fcceea0b4e627de7476208fd56b2cccd8cad3a45238->enter($__internal_7fb31471cdf9d3007e975fcceea0b4e627de7476208fd56b2cccd8cad3a45238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Anuncios edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("anuncios_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7fb31471cdf9d3007e975fcceea0b4e627de7476208fd56b2cccd8cad3a45238->leave($__internal_7fb31471cdf9d3007e975fcceea0b4e627de7476208fd56b2cccd8cad3a45238_prof);

    }

    public function getTemplateName()
    {
        return ":anuncios:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Anuncios edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('anuncios_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
