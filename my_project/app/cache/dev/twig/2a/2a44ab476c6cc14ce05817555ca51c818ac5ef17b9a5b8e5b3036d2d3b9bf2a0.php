<?php

/* :anuncios:show.html.twig */
class __TwigTemplate_970155b43205dfead4ef97fe9bf449ba8cc17740436b9746ebc4b87b6695db34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":anuncios:show.html.twig", 1);
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
        $__internal_fb22a5c7f5d0a6110cd6b57905d7126be9cd46e66d8e07c03c1fbb2ae364f939 = $this->env->getExtension("native_profiler");
        $__internal_fb22a5c7f5d0a6110cd6b57905d7126be9cd46e66d8e07c03c1fbb2ae364f939->enter($__internal_fb22a5c7f5d0a6110cd6b57905d7126be9cd46e66d8e07c03c1fbb2ae364f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anuncios:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb22a5c7f5d0a6110cd6b57905d7126be9cd46e66d8e07c03c1fbb2ae364f939->leave($__internal_fb22a5c7f5d0a6110cd6b57905d7126be9cd46e66d8e07c03c1fbb2ae364f939_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6001bfa3f18c14bbef4841dc4a14a7d7fa1b0ef42d7df40b31ab8192348458a1 = $this->env->getExtension("native_profiler");
        $__internal_6001bfa3f18c14bbef4841dc4a14a7d7fa1b0ef42d7df40b31ab8192348458a1->enter($__internal_6001bfa3f18c14bbef4841dc4a14a7d7fa1b0ef42d7df40b31ab8192348458a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Anuncios</h1>

    <table class=\"table\">
        <tbody>
            
            <tr>
                <th>Titulo</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "titulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "categoria", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <ul>
       
        <li>
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"BORRAR ANUNCIO\">
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6001bfa3f18c14bbef4841dc4a14a7d7fa1b0ef42d7df40b31ab8192348458a1->leave($__internal_6001bfa3f18c14bbef4841dc4a14a7d7fa1b0ef42d7df40b31ab8192348458a1_prof);

    }

    public function getTemplateName()
    {
        return ":anuncios:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  68 => 24,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Anuncios</h1>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             */
/*             <tr>*/
/*                 <th>Titulo</th>*/
/*                 <td>{{ anuncio.titulo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Categoria</th>*/
/*                 <td>{{ anuncio.categoria }}</td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*        */
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="BORRAR ANUNCIO">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
