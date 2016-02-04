<?php

/* SPruebasPRUEBASBundle:Default:index.html.twig */
class __TwigTemplate_5542b409c355318f6bafc7b9cfc8e96e23221ce66a98a1ed680c389a5f346a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'javascripts1' => array($this, 'block_javascripts1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be6236fc5ebf6dff3807c6038fb84aff5ee4519a1a57973b23159bd565586040 = $this->env->getExtension("native_profiler");
        $__internal_be6236fc5ebf6dff3807c6038fb84aff5ee4519a1a57973b23159bd565586040->enter($__internal_be6236fc5ebf6dff3807c6038fb84aff5ee4519a1a57973b23159bd565586040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SPruebasPRUEBASBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- 
.hidden-xs
Si aplicamos esta clase CSS a un DIV no aparecerá en la versión móvil pero si desde un ordenador o tablet.

.visible-xs
Si aplicamos esta clase CSS a un DIV sí aparecerá en la versión móvil pero no desde una dispositivo con la pantalla mayor.
-->
  <head>
  <style>
\t\t  .btnJ{
\t\t   -webkit-border-radius: 35;
\t\t  -moz-border-radius: 35;
\t\t  border-radius: 35px;
\t\t  color: #ffffff;
\t\t  font-size: 20px;
\t\t  background: #00BCD4;
\t\t  padding: 10px 20px 10px 20px;
\t\t  border: solid #1f628d 0px;
\t\t  text-decoration: none;
\t\t}


\t\t.btnJ:hover {
\t\t  text-decoration: none;
\t\t}

\t\t.navbar-nav.nav-justified > li{
    float:none;
}


  </style>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- menu redondo-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 39
        $this->displayBlock('estilos', $context, $blocks);
        // line 46
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "\t\t
\t<!-- fin menu redondo -->
    <title>Pet’s, adoptalo y no compres</title>

    <meta name=\"description\" content=\"Pets page\">
    <meta name=\"author\" content=\"Pets\">


    

  </head>
  <body>
  \t<!-- menu redondo-->
  \t<div class=\"component\">
\t\t\t\t<!-- Start Nav Structure -->
\t\t\t\t<button class=\"cn-button\" id=\"cn-button\">+</button>
\t\t\t\t<div class=\"cn-wrapper\" id=\"cn-wrapper\" style=\"margin-bottom: 10px\"> <!-- mover posicion de los botones del menu -->
\t\t\t\t    <ul>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/camada.png\" width=\"45px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/adoptar.png\" width=\"45px\"></span></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/home.png\" width=\"40px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/buscar.png\" width=\"30px\"></a></li>
\t\t\t\t       <li><a href=\"#\"><img src=\"/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/donar.png\" width=\"45px\"></a></li>



\t\t\t\t     </ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"cn-overlay\" class=\"cn-overlay\"></div>
\t\t\t\t<!-- End Nav Structure -->
\t</div>
\t<!-- fin menu redondo-->
    <div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"height:95px;\">
\t\t\t\t<div class=\"navbar-header\" >
\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("publicaranuncio");
        echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t<img src=\"/my_project/web/bundles/spruebaspruebas/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"navbar-brand container-fluid\" height=\"100px\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("s_pruebas_pruebas_homepage");
        echo "\"><img src=\"/my_project/web/bundles/spruebaspruebas/imgs/logo.png\" width=\"160px\"> </a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav navbar-nav nav-justified hidden-xs\" role=\"menu\">
 \t\t\t\t\t<li>
\t\t\t\t\t\t\t<!--<button type=\"submit\" class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;\">
\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/spruebaspruebas/imgs/publicar.png\" onClick=\"location.href='";
        // line 97
        echo $this->env->getExtension('routing')->getPath("publicaranuncio");
        echo "'\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t\t</button>-->
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;\" onClick=\"location.href='";
        // line 100
        echo $this->env->getExtension('routing')->getPath("publicaranuncio");
        echo "'\" value=\"publicar anuncio\">
\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/spruebaspruebas/imgs/publicar.png\">&nbsp;&nbsp;&nbsp; Publicar anuncio</button>
\t\t\t\t<div class=\"navbar-right container-fluid \" >
\t\t\t\t\t\t<div style=\"background-color:white; padding:5px; margin-right:13px; margin-top:-32px; border-radius: 15px;\">
            ";
        // line 104
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 105
            echo "                    Estás logueado como: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <br><center>
                <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Salir", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></center>
            ";
        } else {
            // line 110
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 112
        echo "        </div>

        ";
        // line 114
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 115
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 116
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 117
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 118
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "        ";
        }
        // line 123
        echo "        </div>\t\t
 \t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--
\t\t\t\t<form class=\"navbar-right\" style=\"margin-top:10px;\">
\t\t\t\t\t<a href=\"publicar.html\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default hidden-xs\" style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-webkit-border-radius: 27px 27px 27px 27px; margin-right:390px;\">
\t\t\t\t\t\t\t<img src=\"imgs/publicar.png\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t</form>-->
\t\t\t\t<div class=\"navbar-right container-fluid\" style=\"margin-top:20px;\">
\t\t<input type=\"button\" class=\"btnJ\" value=\"Iniciar sesión\" onclick=\"location.href='";
        // line 137
        echo $this->env->getExtension('routing')->getPath("login");
        echo "';\"/><div class=\"visible-xs\"><br></div>
\t\t<input type=\"button\" class=\"btnJ\" value=\"Registrarse\" onclick=\"location.href='";
        // line 138
        echo $this->env->getExtension('routing')->getPath("registrarse");
        echo "';\"/>
\t\t
\t\t</div>
\t\t\t</nav>
\t\t\t<center>
\t\t\t<div style=\"margin-top: 170px; margin-bottom: 50px; width:100%;\">
\t\t\t\t";
        // line 144
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "\t\t\t</div>
\t\t\t</center>
\t\t</div>
\t</div>
\t
</div>
<div id=\"footer\" style=\"position: fixed; bottom: 0; width: 100%; height: 40px; background-color: #00BCD4;text-align: right; line-height: 40px;\">
      <div class=\"container\" >
        <p class=\"text-muted credit\" ><font color=\"#FFFFFF\">Pet's | Copyright © 2016 - 2017</font></p>

      </div>
    </div>


    <!--<script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/scripts.js\"></script>-->
    \t<!-- menu redondo-->
\t\t<!--<script src=\"js/polyfills.js\"></script>
\t\t<script src=\"js/demo1.js\"></script>-->
\t\t
\t\t";
        // line 167
        $this->displayBlock('javascripts1', $context, $blocks);
        // line 174
        echo "\t\t<!-- fin menu redondo -->   
  </body>
</html>";
        
        $__internal_be6236fc5ebf6dff3807c6038fb84aff5ee4519a1a57973b23159bd565586040->leave($__internal_be6236fc5ebf6dff3807c6038fb84aff5ee4519a1a57973b23159bd565586040_prof);

    }

    // line 39
    public function block_estilos($context, array $blocks = array())
    {
        $__internal_edda4d8a10e3bb0e5b3c661fe5ed4135e83d2359809f95538352f2f1d2dfd767 = $this->env->getExtension("native_profiler");
        $__internal_edda4d8a10e3bb0e5b3c661fe5ed4135e83d2359809f95538352f2f1d2dfd767->enter($__internal_edda4d8a10e3bb0e5b3c661fe5ed4135e83d2359809f95538352f2f1d2dfd767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        // line 40
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/component1.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_edda4d8a10e3bb0e5b3c661fe5ed4135e83d2359809f95538352f2f1d2dfd767->leave($__internal_edda4d8a10e3bb0e5b3c661fe5ed4135e83d2359809f95538352f2f1d2dfd767_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4dec249e59af750f0b284bce42f8278a493d9f5fbb2b978dcb2b7dbc88a4946 = $this->env->getExtension("native_profiler");
        $__internal_e4dec249e59af750f0b284bce42f8278a493d9f5fbb2b978dcb2b7dbc88a4946->enter($__internal_e4dec249e59af750f0b284bce42f8278a493d9f5fbb2b978dcb2b7dbc88a4946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_e4dec249e59af750f0b284bce42f8278a493d9f5fbb2b978dcb2b7dbc88a4946->leave($__internal_e4dec249e59af750f0b284bce42f8278a493d9f5fbb2b978dcb2b7dbc88a4946_prof);

    }

    // line 144
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8dbe40eef004b33c30002185ebc2be1649a320f80f71f674c680f22f4358db5 = $this->env->getExtension("native_profiler");
        $__internal_f8dbe40eef004b33c30002185ebc2be1649a320f80f71f674c680f22f4358db5->enter($__internal_f8dbe40eef004b33c30002185ebc2be1649a320f80f71f674c680f22f4358db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 145
        echo "        \t\t";
        
        $__internal_f8dbe40eef004b33c30002185ebc2be1649a320f80f71f674c680f22f4358db5->leave($__internal_f8dbe40eef004b33c30002185ebc2be1649a320f80f71f674c680f22f4358db5_prof);

    }

    // line 167
    public function block_javascripts1($context, array $blocks = array())
    {
        $__internal_71a2e3a1732fdd60894b1e5193dcde1f9754e85d57d8d78b6ebe088403977d6c = $this->env->getExtension("native_profiler");
        $__internal_71a2e3a1732fdd60894b1e5193dcde1f9754e85d57d8d78b6ebe088403977d6c->enter($__internal_71a2e3a1732fdd60894b1e5193dcde1f9754e85d57d8d78b6ebe088403977d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts1"));

        // line 168
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/polyfills.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/demo1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_71a2e3a1732fdd60894b1e5193dcde1f9754e85d57d8d78b6ebe088403977d6c->leave($__internal_71a2e3a1732fdd60894b1e5193dcde1f9754e85d57d8d78b6ebe088403977d6c_prof);

    }

    public function getTemplateName()
    {
        return "SPruebasPRUEBASBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 172,  349 => 171,  345 => 170,  341 => 169,  336 => 168,  330 => 167,  323 => 145,  317 => 144,  307 => 47,  301 => 46,  292 => 44,  288 => 43,  284 => 42,  280 => 41,  275 => 40,  269 => 39,  260 => 174,  258 => 167,  235 => 146,  233 => 144,  224 => 138,  220 => 137,  204 => 123,  201 => 122,  195 => 121,  186 => 118,  181 => 117,  176 => 116,  171 => 115,  169 => 114,  165 => 112,  157 => 110,  151 => 107,  147 => 106,  142 => 105,  140 => 104,  133 => 100,  127 => 97,  118 => 91,  110 => 86,  71 => 49,  68 => 46,  66 => 39,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <!-- */
/* .hidden-xs*/
/* Si aplicamos esta clase CSS a un DIV no aparecerá en la versión móvil pero si desde un ordenador o tablet.*/
/* */
/* .visible-xs*/
/* Si aplicamos esta clase CSS a un DIV sí aparecerá en la versión móvil pero no desde una dispositivo con la pantalla mayor.*/
/* -->*/
/*   <head>*/
/*   <style>*/
/* 		  .btnJ{*/
/* 		   -webkit-border-radius: 35;*/
/* 		  -moz-border-radius: 35;*/
/* 		  border-radius: 35px;*/
/* 		  color: #ffffff;*/
/* 		  font-size: 20px;*/
/* 		  background: #00BCD4;*/
/* 		  padding: 10px 20px 10px 20px;*/
/* 		  border: solid #1f628d 0px;*/
/* 		  text-decoration: none;*/
/* 		}*/
/* */
/* */
/* 		.btnJ:hover {*/
/* 		  text-decoration: none;*/
/* 		}*/
/* */
/* 		.navbar-nav.nav-justified > li{*/
/*     float:none;*/
/* }*/
/* */
/* */
/*   </style>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <!-- menu redondo-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     {% block estilos %}*/
/*     <link href="{{ asset('bundles/spruebaspruebas/css/normalize.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('bundles/spruebaspruebas/css/demo.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/spruebaspruebas/css/component1.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/spruebaspruebas/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/spruebaspruebas/css/style.css') }}" type="text/css" rel="stylesheet" />*/
/* 		{% endblock %}*/
/* 		{% block javascripts %}*/
/* 		<script src="{{ asset('bundles/spruebaspruebas/js/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>*/
/* 		{% endblock %}*/
/* 		*/
/* 	<!-- fin menu redondo -->*/
/*     <title>Pet’s, adoptalo y no compres</title>*/
/* */
/*     <meta name="description" content="Pets page">*/
/*     <meta name="author" content="Pets">*/
/* */
/* */
/*     */
/* */
/*   </head>*/
/*   <body>*/
/*   	<!-- menu redondo-->*/
/*   	<div class="component">*/
/* 				<!-- Start Nav Structure -->*/
/* 				<button class="cn-button" id="cn-button">+</button>*/
/* 				<div class="cn-wrapper" id="cn-wrapper" style="margin-bottom: 10px"> <!-- mover posicion de los botones del menu -->*/
/* 				    <ul>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/camada.png" width="45px"></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/adoptar.png" width="45px"></span></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/home.png" width="40px"></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/buscar.png" width="30px"></a></li>*/
/* 				       <li><a href="#"><img src="/my_project/web/bundles/spruebaspruebas/imgs/iconsMenu/donar.png" width="45px"></a></li>*/
/* */
/* */
/* */
/* 				     </ul>*/
/* 				</div>*/
/* 				<div id="cn-overlay" class="cn-overlay"></div>*/
/* 				<!-- End Nav Structure -->*/
/* 	</div>*/
/* 	<!-- fin menu redondo-->*/
/*     <div class="container-fluid">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:95px;">*/
/* 				<div class="navbar-header" >*/
/* 					<a href="{{ path("publicaranuncio") }}">*/
/* 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border:0;">*/
/* 						<img src="/my_project/web/bundles/spruebaspruebas/imgs/publicar.png" class="visible-xs">*/
/* 						</button>*/
/* 					</a>*/
/* 					<a class="navbar-brand container-fluid" height="100px" href="{{ path("s_pruebas_pruebas_homepage") }}"><img src="/my_project/web/bundles/spruebaspruebas/imgs/logo.png" width="160px"> </a>*/
/* 				</div>*/
/* 				<ul class="nav navbar-nav nav-justified hidden-xs" role="menu">*/
/*  					<li>*/
/* 							<!--<button type="submit" class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 							-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;">*/
/* 							<img src="/my_project/web/bundles/spruebaspruebas/imgs/publicar.png" onClick="location.href='{{ path("publicaranuncio") }}'"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 							</button>-->*/
/* 							<button type="submit" class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 							-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;" onClick="location.href='{{ path("publicaranuncio") }}'" value="publicar anuncio">*/
/* 								<img src="/my_project/web/bundles/spruebaspruebas/imgs/publicar.png">&nbsp;&nbsp;&nbsp; Publicar anuncio</button>*/
/* 				<div class="navbar-right container-fluid " >*/
/* 						<div style="background-color:white; padding:5px; margin-right:13px; margin-top:-32px; border-radius: 15px;">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     Estás logueado como: {{ app.user.username }} <br><center>*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'Salir'|trans({}, 'FOSUserBundle') }}*/
/*                 </a></center>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'Login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         </div>		*/
/*  				</ul>*/
/* 								<!--*/
/* 				<form class="navbar-right" style="margin-top:10px;">*/
/* 					<a href="publicar.html">*/
/* 							<button type="submit" class="btn btn-default hidden-xs" style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 							-moz-border-radius: 27px 27px 27px 27px;*/
/* 							-webkit-border-radius: 27px 27px 27px 27px; margin-right:390px;">*/
/* 							<img src="imgs/publicar.png"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 							</button>*/
/* 						*/
/* 						</a>*/
/* 				</form>-->*/
/* 				<div class="navbar-right container-fluid" style="margin-top:20px;">*/
/* 		<input type="button" class="btnJ" value="Iniciar sesión" onclick="location.href='{{ path("login") }}';"/><div class="visible-xs"><br></div>*/
/* 		<input type="button" class="btnJ" value="Registrarse" onclick="location.href='{{ path("registrarse") }}';"/>*/
/* 		*/
/* 		</div>*/
/* 			</nav>*/
/* 			<center>*/
/* 			<div style="margin-top: 170px; margin-bottom: 50px; width:100%;">*/
/* 				{% block body %}*/
/*         		{% endblock body %}*/
/* 			</div>*/
/* 			</center>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* <div id="footer" style="position: fixed; bottom: 0; width: 100%; height: 40px; background-color: #00BCD4;text-align: right; line-height: 40px;">*/
/*       <div class="container" >*/
/*         <p class="text-muted credit" ><font color="#FFFFFF">Pet's | Copyright © 2016 - 2017</font></p>*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <!--<script src="js/jquery.min.js"></script>*/
/*     <script src="js/bootstrap.min.js"></script>*/
/*     <script src="js/scripts.js"></script>-->*/
/*     	<!-- menu redondo-->*/
/* 		<!--<script src="js/polyfills.js"></script>*/
/* 		<script src="js/demo1.js"></script>-->*/
/* 		*/
/* 		{% block javascripts1 %}*/
/* 		<script src="{{ asset('bundles/spruebaspruebas/js/jquery.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/spruebaspruebas/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/spruebaspruebas/js/scripts.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/spruebaspruebas/js/polyfills.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/spruebaspruebas/js/demo1.js') }}" type="text/javascript"></script>*/
/* 		{% endblock %}*/
/* 		<!-- fin menu redondo -->   */
/*   </body>*/
/* </html>*/
