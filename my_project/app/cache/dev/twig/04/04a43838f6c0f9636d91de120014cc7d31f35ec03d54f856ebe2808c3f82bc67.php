<?php

/* anuncios/new.html.twig */
class __TwigTemplate_1532fcff03238be61b43028854b13630c5f163789d6b895f12a7db058ce10853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anuncios/new.html.twig", 1);
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
        $__internal_eec28ddb6dd27e1377f16cee9e8047d44e572e6c70d9f9175f281ae262278a7c = $this->env->getExtension("native_profiler");
        $__internal_eec28ddb6dd27e1377f16cee9e8047d44e572e6c70d9f9175f281ae262278a7c->enter($__internal_eec28ddb6dd27e1377f16cee9e8047d44e572e6c70d9f9175f281ae262278a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anuncios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec28ddb6dd27e1377f16cee9e8047d44e572e6c70d9f9175f281ae262278a7c->leave($__internal_eec28ddb6dd27e1377f16cee9e8047d44e572e6c70d9f9175f281ae262278a7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1952eca700441b54970800d0fa7559354a6159a8f160cf02188bb1e63d9a2d94 = $this->env->getExtension("native_profiler");
        $__internal_1952eca700441b54970800d0fa7559354a6159a8f160cf02188bb1e63d9a2d94->enter($__internal_1952eca700441b54970800d0fa7559354a6159a8f160cf02188bb1e63d9a2d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Anuncios creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("anuncios_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1952eca700441b54970800d0fa7559354a6159a8f160cf02188bb1e63d9a2d94->leave($__internal_1952eca700441b54970800d0fa7559354a6159a8f160cf02188bb1e63d9a2d94_prof);

    }

    public function getTemplateName()
    {
        return "anuncios/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Anuncios creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('anuncios_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
