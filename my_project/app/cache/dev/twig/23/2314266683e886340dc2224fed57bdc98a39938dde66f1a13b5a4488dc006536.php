<?php

/* SPruebasPRUEBASBundle:Default:contenidoindex.html.twig */
class __TwigTemplate_de1146ebb097c819364deeb5b632a82037eb8eb4ba576ddfd7568ccfbc90f790 extends Twig_Template
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
        $__internal_9412bc7b49adddf5a745276012db8d4cd5957a34477ab2c5c4715e7980de3cc9 = $this->env->getExtension("native_profiler");
        $__internal_9412bc7b49adddf5a745276012db8d4cd5957a34477ab2c5c4715e7980de3cc9->enter($__internal_9412bc7b49adddf5a745276012db8d4cd5957a34477ab2c5c4715e7980de3cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SPruebasPRUEBASBundle:Default:contenidoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9412bc7b49adddf5a745276012db8d4cd5957a34477ab2c5c4715e7980de3cc9->leave($__internal_9412bc7b49adddf5a745276012db8d4cd5957a34477ab2c5c4715e7980de3cc9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5b52e6e97b50ff06e7e0424ae26b033c3032c1e6d378fe30e8acdc9fbf3cb63 = $this->env->getExtension("native_profiler");
        $__internal_a5b52e6e97b50ff06e7e0424ae26b033c3032c1e6d378fe30e8acdc9fbf3cb63->enter($__internal_a5b52e6e97b50ff06e7e0424ae26b033c3032c1e6d378fe30e8acdc9fbf3cb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<button style=\"width:90%; height:45%;\" class=\"btn btn-info\">BOTONmnnnn</button>
";
        
        $__internal_a5b52e6e97b50ff06e7e0424ae26b033c3032c1e6d378fe30e8acdc9fbf3cb63->leave($__internal_a5b52e6e97b50ff06e7e0424ae26b033c3032c1e6d378fe30e8acdc9fbf3cb63_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SPruebasPRUEBASBundle:Default:index.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <button style="width:90%; height:45%;" class="btn btn-info">BOTONmnnnn</button>*/
/* {% endblock body %}*/
