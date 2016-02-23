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
        $__internal_9089f58a58ffb2a05a023c9a7e9afef30c8ae4c0f733b568907ea7282089e9d3 = $this->env->getExtension("native_profiler");
        $__internal_9089f58a58ffb2a05a023c9a7e9afef30c8ae4c0f733b568907ea7282089e9d3->enter($__internal_9089f58a58ffb2a05a023c9a7e9afef30c8ae4c0f733b568907ea7282089e9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactameBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9089f58a58ffb2a05a023c9a7e9afef30c8ae4c0f733b568907ea7282089e9d3->leave($__internal_9089f58a58ffb2a05a023c9a7e9afef30c8ae4c0f733b568907ea7282089e9d3_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_2f9be8942d77d4906c3d0f07cfa99ebff5f4ba6da80d509646636e9b1e5c5085 = $this->env->getExtension("native_profiler");
        $__internal_2f9be8942d77d4906c3d0f07cfa99ebff5f4ba6da80d509646636e9b1e5c5085->enter($__internal_2f9be8942d77d4906c3d0f07cfa99ebff5f4ba6da80d509646636e9b1e5c5085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Contáctame</a>
";
        
        $__internal_2f9be8942d77d4906c3d0f07cfa99ebff5f4ba6da80d509646636e9b1e5c5085->leave($__internal_2f9be8942d77d4906c3d0f07cfa99ebff5f4ba6da80d509646636e9b1e5c5085_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a22e132469756d69adb143f3ed5e1852fbbe5711dd556c6012783cbd1d41863 = $this->env->getExtension("native_profiler");
        $__internal_1a22e132469756d69adb143f3ed5e1852fbbe5711dd556c6012783cbd1d41863->enter($__internal_1a22e132469756d69adb143f3ed5e1852fbbe5711dd556c6012783cbd1d41863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Contacto</font>
 <script type=\"text/javascript\" src=\"https://form.jotformeu.com/jsform/60525076893361\"></script>

";
        
        $__internal_1a22e132469756d69adb143f3ed5e1852fbbe5711dd556c6012783cbd1d41863->leave($__internal_1a22e132469756d69adb143f3ed5e1852fbbe5711dd556c6012783cbd1d41863_prof);

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
