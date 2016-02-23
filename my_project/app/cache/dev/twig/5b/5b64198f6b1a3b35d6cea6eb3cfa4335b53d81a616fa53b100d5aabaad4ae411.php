<?php

/* ContactameBundle:Default:contenido_index.html.twig */
class __TwigTemplate_1d43377325decb3f0d636b0c6aa1e4770f1fe2963799faa9648708e67b313494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ContactameBundle:Default:index.html.twig", "ContactameBundle:Default:contenido_index.html.twig", 1);
        $this->blocks = array(
            'guide' => array($this, 'block_guide'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ContactameBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f30f0f4b2f71c0aba0aeb3e2a87c4ed69688ba6239f8a512c4b33194a30c68c = $this->env->getExtension("native_profiler");
        $__internal_7f30f0f4b2f71c0aba0aeb3e2a87c4ed69688ba6239f8a512c4b33194a30c68c->enter($__internal_7f30f0f4b2f71c0aba0aeb3e2a87c4ed69688ba6239f8a512c4b33194a30c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactameBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f30f0f4b2f71c0aba0aeb3e2a87c4ed69688ba6239f8a512c4b33194a30c68c->leave($__internal_7f30f0f4b2f71c0aba0aeb3e2a87c4ed69688ba6239f8a512c4b33194a30c68c_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_6232bdf0298824c8abf04c7f64dc2ca442c14c87b4f1da282602b7bb62e0571b = $this->env->getExtension("native_profiler");
        $__internal_6232bdf0298824c8abf04c7f64dc2ca442c14c87b4f1da282602b7bb62e0571b->enter($__internal_6232bdf0298824c8abf04c7f64dc2ca442c14c87b4f1da282602b7bb62e0571b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Contáctame</a>
";
        
        $__internal_6232bdf0298824c8abf04c7f64dc2ca442c14c87b4f1da282602b7bb62e0571b->leave($__internal_6232bdf0298824c8abf04c7f64dc2ca442c14c87b4f1da282602b7bb62e0571b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6510ba52772eb72a7dee9770d2345bbc440e6eea0352d605acb39afa59333f12 = $this->env->getExtension("native_profiler");
        $__internal_6510ba52772eb72a7dee9770d2345bbc440e6eea0352d605acb39afa59333f12->enter($__internal_6510ba52772eb72a7dee9770d2345bbc440e6eea0352d605acb39afa59333f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Contacto</font>
 <script type=\"text/javascript\" src=\"https://form.jotformeu.com/jsform/60525076893361\"></script>

";
        
        $__internal_6510ba52772eb72a7dee9770d2345bbc440e6eea0352d605acb39afa59333f12->leave($__internal_6510ba52772eb72a7dee9770d2345bbc440e6eea0352d605acb39afa59333f12_prof);

    }

    public function getTemplateName()
    {
        return "ContactameBundle:Default:contenido_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "ContactameBundle:Default:index.html.twig" %}*/
/* */
/* {% block guide %}*/
/*   <a href="{{ path("index_homepage") }}">Inicio</a> > <a href="#">Contáctame</a>*/
/* {% endblock guide %}*/
/* */
/* */
/* {% block body %}*/
/* <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Contacto</font>*/
/*  <script type="text/javascript" src="https://form.jotformeu.com/jsform/60525076893361"></script>*/
/* */
/* {% endblock body %}*/
/*       */
