<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_10daeeb669209a00c66b1264782a225b8305f886ef58b7ca135b349a0c87dbfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0e33d01058c140bbca8bd85d77bdebdf71877d864030e0d76d95678589916c4 = $this->env->getExtension("native_profiler");
        $__internal_f0e33d01058c140bbca8bd85d77bdebdf71877d864030e0d76d95678589916c4->enter($__internal_f0e33d01058c140bbca8bd85d77bdebdf71877d864030e0d76d95678589916c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f0e33d01058c140bbca8bd85d77bdebdf71877d864030e0d76d95678589916c4->leave($__internal_f0e33d01058c140bbca8bd85d77bdebdf71877d864030e0d76d95678589916c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */