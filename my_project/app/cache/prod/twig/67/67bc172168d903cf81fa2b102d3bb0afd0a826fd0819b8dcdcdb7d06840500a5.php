<?php

/* SPruebasPRUEBASBundle:Default:contenidoindex.html.twig */
class __TwigTemplate_cc41adb766d131616fe69718d3577af3818a5a3815bf9cc0d7a83080bc16d773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SPruebasPRUEBASBundle:Default:index.html.twig", "SPruebasPRUEBASBundle:Default:contenidoindex.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SPruebasPRUEBASBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t<h2>Bienvenido a Pets!</h2>
\t\t\t\t<p>
\t\t\t\t\tPet’s, es un portal web online interactivo, donde los usuarios podrán encontrar cientos de ayuda a la hora de adoptar o dar en adopción un animal, encontrar gente con los que poder juntar sus animales, ayudas de profesionales y mucho más de una forma totalmente gratuita.
\t\t\t\t</p>
\t\t\t\t<p><center>
\t\t\t\t\t
\t\t\t\t</p></center>
\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "SPruebasPRUEBASBundle:Default:contenidoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "SPruebasPRUEBASBundle:Default:index.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h2>Bienvenido a Pets!</h2>*/
/* 				<p>*/
/* 					Pet’s, es un portal web online interactivo, donde los usuarios podrán encontrar cientos de ayuda a la hora de adoptar o dar en adopción un animal, encontrar gente con los que poder juntar sus animales, ayudas de profesionales y mucho más de una forma totalmente gratuita.*/
/* 				</p>*/
/* 				<p><center>*/
/* 					*/
/* 				</p></center>*/
/* 				*/
/* {% endblock body %}*/
