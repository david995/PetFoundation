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
        $__internal_c494b69233e6f9baec63cb8c1b0d293f224b5385d060b89fada122bebcb32159 = $this->env->getExtension("native_profiler");
        $__internal_c494b69233e6f9baec63cb8c1b0d293f224b5385d060b89fada122bebcb32159->enter($__internal_c494b69233e6f9baec63cb8c1b0d293f224b5385d060b89fada122bebcb32159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactameBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c494b69233e6f9baec63cb8c1b0d293f224b5385d060b89fada122bebcb32159->leave($__internal_c494b69233e6f9baec63cb8c1b0d293f224b5385d060b89fada122bebcb32159_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_390420906ef2dc73f8e4fb3cc5202399dc57105a4d09e100dcb0596d6cb6574e = $this->env->getExtension("native_profiler");
        $__internal_390420906ef2dc73f8e4fb3cc5202399dc57105a4d09e100dcb0596d6cb6574e->enter($__internal_390420906ef2dc73f8e4fb3cc5202399dc57105a4d09e100dcb0596d6cb6574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Contáctame</a>
";
        
        $__internal_390420906ef2dc73f8e4fb3cc5202399dc57105a4d09e100dcb0596d6cb6574e->leave($__internal_390420906ef2dc73f8e4fb3cc5202399dc57105a4d09e100dcb0596d6cb6574e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_239588a61490a4099b9413e0cc9b4fa1ca9fef836076015cedfde6f9c0aef8e6 = $this->env->getExtension("native_profiler");
        $__internal_239588a61490a4099b9413e0cc9b4fa1ca9fef836076015cedfde6f9c0aef8e6->enter($__internal_239588a61490a4099b9413e0cc9b4fa1ca9fef836076015cedfde6f9c0aef8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Contacto</font>
 <script type=\"text/javascript\" src=\"https://form.jotformeu.com/jsform/60525076893361\"></script>

";
        
        $__internal_239588a61490a4099b9413e0cc9b4fa1ca9fef836076015cedfde6f9c0aef8e6->leave($__internal_239588a61490a4099b9413e0cc9b4fa1ca9fef836076015cedfde6f9c0aef8e6_prof);

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
