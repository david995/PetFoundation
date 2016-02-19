<?php

/* IndexBundle:Default:contenido_index.html.twig */
class __TwigTemplate_fc18f4d236e31f18c4dfbbf3635e3f5fe86cb4147a490af83090ff7b4d6e1845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:index.html.twig", "IndexBundle:Default:contenido_index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndexBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef9552d5a80b3ee3c3a873c4bb1cb187fb272f2d33d84ffe1060b9c6c5f2b252 = $this->env->getExtension("native_profiler");
        $__internal_ef9552d5a80b3ee3c3a873c4bb1cb187fb272f2d33d84ffe1060b9c6c5f2b252->enter($__internal_ef9552d5a80b3ee3c3a873c4bb1cb187fb272f2d33d84ffe1060b9c6c5f2b252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef9552d5a80b3ee3c3a873c4bb1cb187fb272f2d33d84ffe1060b9c6c5f2b252->leave($__internal_ef9552d5a80b3ee3c3a873c4bb1cb187fb272f2d33d84ffe1060b9c6c5f2b252_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea6b8c497732864faf441d4a3bd4ef555b80c0760ac63da4078bce33a3f648c1 = $this->env->getExtension("native_profiler");
        $__internal_ea6b8c497732864faf441d4a3bd4ef555b80c0760ac63da4078bce33a3f648c1->enter($__internal_ea6b8c497732864faf441d4a3bd4ef555b80c0760ac63da4078bce33a3f648c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<style>
#imagen {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}
#imagen:hover, #imagen:focus, #imagen:active {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
  -webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
  transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
}


#imagen {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}
#imagen:hover, #imagen:focus, .#imagen:active {
  -webkit-transform: scale(0.8);
  transform: scale(0.8);
  -webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
  transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
}


</style>

<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/buscaPerd.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 330px ;\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center;\" value=\"Se busca\" id=\"imagen\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/protectora.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 300px ;\" value=\"Protectoras\" id=\"imagen\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center;\" value=\"Camadas\" id=\"imagen\">
\t\t\t\t\t<br><br>
\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("paginas_index_homepage");
        echo "\"><input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/adopttt.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 310px ;\" value=\"Adopciones\" id=\"imagen\"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/donaciones.png);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 300px ;\" value=\"Donaciones\" id=\"imagen\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/foro.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 320px ;\" value=\"Foro\" id=\"imagen\">
";
        
        $__internal_ea6b8c497732864faf441d4a3bd4ef555b80c0760ac63da4078bce33a3f648c1->leave($__internal_ea6b8c497732864faf441d4a3bd4ef555b80c0760ac63da4078bce33a3f648c1_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:contenido_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 62,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "IndexBundle:Default:index.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <style>*/
/* #imagen {*/
/*   display: inline-block;*/
/*   vertical-align: middle;*/
/*   -webkit-transform: translateZ(0);*/
/*   transform: translateZ(0);*/
/*   box-shadow: 0 0 1px rgba(0, 0, 0, 0);*/
/*   -webkit-backface-visibility: hidden;*/
/*   backface-visibility: hidden;*/
/*   -moz-osx-font-smoothing: grayscale;*/
/*   -webkit-transition-duration: 0.5s;*/
/*   transition-duration: 0.5s;*/
/* }*/
/* #imagen:hover, #imagen:focus, #imagen:active {*/
/*   -webkit-transform: scale(1.1);*/
/*   transform: scale(1.1);*/
/*   -webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);*/
/*   transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);*/
/* }*/
/* */
/* */
/* #imagen {*/
/*   display: inline-block;*/
/*   vertical-align: middle;*/
/*   -webkit-transform: translateZ(0);*/
/*   transform: translateZ(0);*/
/*   box-shadow: 0 0 1px rgba(0, 0, 0, 0);*/
/*   -webkit-backface-visibility: hidden;*/
/*   backface-visibility: hidden;*/
/*   -moz-osx-font-smoothing: grayscale;*/
/*   -webkit-transition-duration: 0.5s;*/
/*   transition-duration: 0.5s;*/
/* }*/
/* #imagen:hover, #imagen:focus, .#imagen:active {*/
/*   -webkit-transform: scale(0.8);*/
/*   transform: scale(0.8);*/
/*   -webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);*/
/*   transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);*/
/* }*/
/* */
/* */
/* </style>*/
/* */
/* <input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/buscaPerd.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 330px ;" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center;" value="Se busca" id="imagen">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/* 					<div class="visible-xs"><br></div>*/
/* 					<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/protectora.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 300px ;" value="Protectoras" id="imagen">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/* 					<div class="visible-xs"><br></div>*/
/* 					<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center;" value="Camadas" id="imagen">*/
/* 					<br><br>*/
/* 					<a href="{{ path("paginas_index_homepage") }}"><input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/adopttt.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 310px ;" value="Adopciones" id="imagen"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/* 					<div class="visible-xs"><br></div>*/
/* 					<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/donaciones.png);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 300px ;" value="Donaciones" id="imagen">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/* 					<div class="visible-xs"><br></div>*/
/* 					<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/foro.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 320px ;" value="Foro" id="imagen">*/
/* {% endblock body %}*/
