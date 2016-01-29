<?php

/* default/new.html.twig */
class __TwigTemplate_321e3d5fb214e40e5ee2b0e9fd1369d1b07311fd4d886693d8279941ff6f9e90 extends Twig_Template
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
        $__internal_65d959c0c0e1c027e990fab442ba3a92207b2d4df1a007241f19df57fd329965 = $this->env->getExtension("native_profiler");
        $__internal_65d959c0c0e1c027e990fab442ba3a92207b2d4df1a007241f19df57fd329965->enter($__internal_65d959c0c0e1c027e990fab442ba3a92207b2d4df1a007241f19df57fd329965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("formulario");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div style=\"background-color:red; color:blue;\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "task", array()), 'label', array("label" => "Task Description"));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "task", array()), 'row');
        echo "
    </div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dueDate", array()), 'row');
        echo "

    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" />
</form>";
        
        $__internal_65d959c0c0e1c027e990fab442ba3a92207b2d4df1a007241f19df57fd329965->leave($__internal_65d959c0c0e1c027e990fab442ba3a92207b2d4df1a007241f19df57fd329965_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  44 => 8,  39 => 6,  35 => 5,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('formulario') }}" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div style="background-color:red; color:blue;">*/
/*     {{ form_label(form.task, 'Task Description') }}*/
/*     {{ form_row(form.task) }}*/
/*     </div>*/
/*     {{ form_row(form.dueDate) }}*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/*     <input type="submit" />*/
/* </form>*/
