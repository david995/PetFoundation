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
        $__internal_5c3f5a37a7c8e4af657f8eab4ce12e2b4318dc5136f0988a6e04f97ee5eeffbb = $this->env->getExtension("native_profiler");
        $__internal_5c3f5a37a7c8e4af657f8eab4ce12e2b4318dc5136f0988a6e04f97ee5eeffbb->enter($__internal_5c3f5a37a7c8e4af657f8eab4ce12e2b4318dc5136f0988a6e04f97ee5eeffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactameBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c3f5a37a7c8e4af657f8eab4ce12e2b4318dc5136f0988a6e04f97ee5eeffbb->leave($__internal_5c3f5a37a7c8e4af657f8eab4ce12e2b4318dc5136f0988a6e04f97ee5eeffbb_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_a68ec0a1718d396f588bdfffce96eb7fff390a1f902de0981013872f110cf865 = $this->env->getExtension("native_profiler");
        $__internal_a68ec0a1718d396f588bdfffce96eb7fff390a1f902de0981013872f110cf865->enter($__internal_a68ec0a1718d396f588bdfffce96eb7fff390a1f902de0981013872f110cf865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Contáctame</a>
";
        
        $__internal_a68ec0a1718d396f588bdfffce96eb7fff390a1f902de0981013872f110cf865->leave($__internal_a68ec0a1718d396f588bdfffce96eb7fff390a1f902de0981013872f110cf865_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fecdd768dc7ce90383d6215338db42f0319726520a15921827451af7dc972b07 = $this->env->getExtension("native_profiler");
        $__internal_fecdd768dc7ce90383d6215338db42f0319726520a15921827451af7dc972b07->enter($__internal_fecdd768dc7ce90383d6215338db42f0319726520a15921827451af7dc972b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Contacto</font>
 <script type=\"text/javascript\" src=\"https://form.jotformeu.com/jsform/60525076893361\"></script>

";
        
        $__internal_fecdd768dc7ce90383d6215338db42f0319726520a15921827451af7dc972b07->leave($__internal_fecdd768dc7ce90383d6215338db42f0319726520a15921827451af7dc972b07_prof);

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
