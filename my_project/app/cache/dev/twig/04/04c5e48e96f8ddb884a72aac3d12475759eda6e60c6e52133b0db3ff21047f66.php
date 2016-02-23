<?php

/* :propietario:edit.html.twig */
class __TwigTemplate_f91cd33fac3889498db2c795314a74c9435865ea373ffa6aba13ee18b75cc243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":propietario:edit.html.twig", 1);
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
        $__internal_31850f56d712fbee0b34165bd5e3821e90ccdfd3f6b8fbe3052808bf96c330fe = $this->env->getExtension("native_profiler");
        $__internal_31850f56d712fbee0b34165bd5e3821e90ccdfd3f6b8fbe3052808bf96c330fe->enter($__internal_31850f56d712fbee0b34165bd5e3821e90ccdfd3f6b8fbe3052808bf96c330fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":propietario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31850f56d712fbee0b34165bd5e3821e90ccdfd3f6b8fbe3052808bf96c330fe->leave($__internal_31850f56d712fbee0b34165bd5e3821e90ccdfd3f6b8fbe3052808bf96c330fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a650be99a87bb2ca20d18027956be050d9c5d28a7760734b9d974bbccaa8ad0 = $this->env->getExtension("native_profiler");
        $__internal_0a650be99a87bb2ca20d18027956be050d9c5d28a7760734b9d974bbccaa8ad0->enter($__internal_0a650be99a87bb2ca20d18027956be050d9c5d28a7760734b9d974bbccaa8ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Propietario edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("propietario_index");
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
        
        $__internal_0a650be99a87bb2ca20d18027956be050d9c5d28a7760734b9d974bbccaa8ad0->leave($__internal_0a650be99a87bb2ca20d18027956be050d9c5d28a7760734b9d974bbccaa8ad0_prof);

    }

    public function getTemplateName()
    {
        return ":propietario:edit.html.twig";
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
/*     <h1>Propietario edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('propietario_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
