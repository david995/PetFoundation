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
        $__internal_68794eab8bca4f7dbfb0652cd066e3d6625d03eec980defcac5ad67e4e548527 = $this->env->getExtension("native_profiler");
        $__internal_68794eab8bca4f7dbfb0652cd066e3d6625d03eec980defcac5ad67e4e548527->enter($__internal_68794eab8bca4f7dbfb0652cd066e3d6625d03eec980defcac5ad67e4e548527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactameBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68794eab8bca4f7dbfb0652cd066e3d6625d03eec980defcac5ad67e4e548527->leave($__internal_68794eab8bca4f7dbfb0652cd066e3d6625d03eec980defcac5ad67e4e548527_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_dd46a21ae387c4f3a1d024f66da93312bf672de09d15cb9a0fe5935c66c53a8c = $this->env->getExtension("native_profiler");
        $__internal_dd46a21ae387c4f3a1d024f66da93312bf672de09d15cb9a0fe5935c66c53a8c->enter($__internal_dd46a21ae387c4f3a1d024f66da93312bf672de09d15cb9a0fe5935c66c53a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Contáctame</a>
";
        
        $__internal_dd46a21ae387c4f3a1d024f66da93312bf672de09d15cb9a0fe5935c66c53a8c->leave($__internal_dd46a21ae387c4f3a1d024f66da93312bf672de09d15cb9a0fe5935c66c53a8c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d16be5789315a84e07b5399a68254a2cb9ddbaec7b607bcdac2d668db7868c40 = $this->env->getExtension("native_profiler");
        $__internal_d16be5789315a84e07b5399a68254a2cb9ddbaec7b607bcdac2d668db7868c40->enter($__internal_d16be5789315a84e07b5399a68254a2cb9ddbaec7b607bcdac2d668db7868c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Contacto</font>
 <script type=\"text/javascript\" src=\"https://form.jotformeu.com/jsform/60525076893361\"></script>

";
        
        $__internal_d16be5789315a84e07b5399a68254a2cb9ddbaec7b607bcdac2d668db7868c40->leave($__internal_d16be5789315a84e07b5399a68254a2cb9ddbaec7b607bcdac2d668db7868c40_prof);

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
