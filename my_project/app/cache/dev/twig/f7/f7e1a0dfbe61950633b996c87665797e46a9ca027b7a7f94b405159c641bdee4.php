<?php

/* anuncios/index.html.twig */
class __TwigTemplate_e7e0f774e5be4090c7f47d37425fd6fa0e3dcd9f95f8a99eb81c0e8d28dfe187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anuncios/index.html.twig", 1);
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
        $__internal_53f8b2a8d1c15056d5d9b5d5d485bd35ce26f1a09b673caebb7252322f0f6c51 = $this->env->getExtension("native_profiler");
        $__internal_53f8b2a8d1c15056d5d9b5d5d485bd35ce26f1a09b673caebb7252322f0f6c51->enter($__internal_53f8b2a8d1c15056d5d9b5d5d485bd35ce26f1a09b673caebb7252322f0f6c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anuncios/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f8b2a8d1c15056d5d9b5d5d485bd35ce26f1a09b673caebb7252322f0f6c51->leave($__internal_53f8b2a8d1c15056d5d9b5d5d485bd35ce26f1a09b673caebb7252322f0f6c51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6975acc5a9f8af709b67ca6b044eb2e54961592943974f85dc895cc768a9afb = $this->env->getExtension("native_profiler");
        $__internal_b6975acc5a9f8af709b67ca6b044eb2e54961592943974f85dc895cc768a9afb->enter($__internal_b6975acc5a9f8af709b67ca6b044eb2e54961592943974f85dc895cc768a9afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Anuncios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Idanimal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anuncios"]) ? $context["anuncios"] : $this->getContext($context, "anuncios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_show", array("id" => $this->getAttribute($context["anuncio"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "categoria", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "idAnimal", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_show", array("id" => $this->getAttribute($context["anuncio"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    
";
        
        $__internal_b6975acc5a9f8af709b67ca6b044eb2e54961592943974f85dc895cc768a9afb->leave($__internal_b6975acc5a9f8af709b67ca6b044eb2e54961592943974f85dc895cc768a9afb_prof);

    }

    public function getTemplateName()
    {
        return "anuncios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Anuncios list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titulo</th>*/
/*                 <th>Categoria</th>*/
/*                 <th>Idanimal</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for anuncio in anuncios %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('anuncios_show', { 'id': anuncio.id }) }}">{{ anuncio.id }}</a></td>*/
/*                 <td>{{ anuncio.titulo }}</td>*/
/*                 <td>{{ anuncio.categoria }}</td>*/
/*                 <td>{{ anuncio.idAnimal }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('anuncios_show', { 'id': anuncio.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
