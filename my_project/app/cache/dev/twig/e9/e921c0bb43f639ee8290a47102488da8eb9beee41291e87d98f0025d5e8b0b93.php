<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c0f2a2e488b56916f6f0ef4c1fbe69be9dc05100218faced8b8c2e289c95c3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
            'javascripts' => array($this, 'block_javascripts'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts1' => array($this, 'block_javascripts1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34bb051db985209472bcb595fe39c8492a9d8886fbaaeef0d165235e8e9bef05 = $this->env->getExtension("native_profiler");
        $__internal_34bb051db985209472bcb595fe39c8492a9d8886fbaaeef0d165235e8e9bef05->enter($__internal_34bb051db985209472bcb595fe39c8492a9d8886fbaaeef0d165235e8e9bef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
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
\t\t
\t\tinput{
\t\t\tborder-radius: 4px;
\t\t\tborder-color:white;
\t\t}
\t\t
\t\t


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
\t\t\t\t<div class=\"navbar-header\" ><center>
\t\t\t\t\t<a href=\"publicar.html\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t<img src=\"/my_project/web/bundles/spruebaspruebas/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</a></center>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("s_pruebas_pruebas_homepage");
        echo "\"><img src=\"/my_project/web/bundles/spruebaspruebas/imgs/logo.png\" width=\"160px\"></a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav navbar-nav nav-justified hidden-xs\" role=\"menu\">
 \t\t\t\t\t<li>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-webkit-border-radius: 27px 27px 27px 27px; margin-top: -55px; margin-left:45%; margin-top:-32px;\">
\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/spruebaspruebas/imgs/publicar.png\" onClick=\"location.href='publicar.html'\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t\t</button>
\t\t\t\t<div class=\"navbar-right container-fluid \" >
\t\t\t\t\t\t<div style=\"background-color:white; padding:5px; margin-right:13px; margin-top:-32px; border-radius: 15px;\">
            ";
        // line 102
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 103
            echo "                    Estás logueado como: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <br><center>
                <a href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Salir", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></center>
            ";
        } else {
            // line 108
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 110
        echo "        </div>

        ";
        // line 112
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 113
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 114
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 115
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 116
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "        ";
        }
        // line 121
        echo "        </div>\t
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
\t\t
\t\t\t</nav>
\t\t\t
\t\t\t<center>
\t\t\t<div class=\"jumbotron\" style=\"margin-top: 170px; margin-bottom: 50px; width:50%; background-color:#d3d3d3;\">
\t\t\t
\t\t\t\t";
        // line 140
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 142
        echo "        
\t\t\t</div>
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
        // line 166
        $this->displayBlock('javascripts1', $context, $blocks);
        // line 173
        echo "\t\t<!-- fin menu redondo -->   
  </body>
</html>
        
    </body>
</html>
";
        
        $__internal_34bb051db985209472bcb595fe39c8492a9d8886fbaaeef0d165235e8e9bef05->leave($__internal_34bb051db985209472bcb595fe39c8492a9d8886fbaaeef0d165235e8e9bef05_prof);

    }

    // line 39
    public function block_estilos($context, array $blocks = array())
    {
        $__internal_ae4b65827061db430289b4fda819531f17a6230569ef4c8667ba492108f0d48e = $this->env->getExtension("native_profiler");
        $__internal_ae4b65827061db430289b4fda819531f17a6230569ef4c8667ba492108f0d48e->enter($__internal_ae4b65827061db430289b4fda819531f17a6230569ef4c8667ba492108f0d48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

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
        
        $__internal_ae4b65827061db430289b4fda819531f17a6230569ef4c8667ba492108f0d48e->leave($__internal_ae4b65827061db430289b4fda819531f17a6230569ef4c8667ba492108f0d48e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c901b0142578573e66cc83cf548895e953b80d84a8525e224f4aa12773885eb6 = $this->env->getExtension("native_profiler");
        $__internal_c901b0142578573e66cc83cf548895e953b80d84a8525e224f4aa12773885eb6->enter($__internal_c901b0142578573e66cc83cf548895e953b80d84a8525e224f4aa12773885eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_c901b0142578573e66cc83cf548895e953b80d84a8525e224f4aa12773885eb6->leave($__internal_c901b0142578573e66cc83cf548895e953b80d84a8525e224f4aa12773885eb6_prof);

    }

    // line 140
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d93ba712d78b9c6f922fb65ed5991555e98dd9c497f4f37c9cb686312f35dd1 = $this->env->getExtension("native_profiler");
        $__internal_6d93ba712d78b9c6f922fb65ed5991555e98dd9c497f4f37c9cb686312f35dd1->enter($__internal_6d93ba712d78b9c6f922fb65ed5991555e98dd9c497f4f37c9cb686312f35dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 141
        echo "        ";
        
        $__internal_6d93ba712d78b9c6f922fb65ed5991555e98dd9c497f4f37c9cb686312f35dd1->leave($__internal_6d93ba712d78b9c6f922fb65ed5991555e98dd9c497f4f37c9cb686312f35dd1_prof);

    }

    // line 166
    public function block_javascripts1($context, array $blocks = array())
    {
        $__internal_dd1e97bd43a8dd53e424c8d6ba49a7859bc30c99f0ff8257f33c99879dfdc4dd = $this->env->getExtension("native_profiler");
        $__internal_dd1e97bd43a8dd53e424c8d6ba49a7859bc30c99f0ff8257f33c99879dfdc4dd->enter($__internal_dd1e97bd43a8dd53e424c8d6ba49a7859bc30c99f0ff8257f33c99879dfdc4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts1"));

        // line 167
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/polyfills.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/demo1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_dd1e97bd43a8dd53e424c8d6ba49a7859bc30c99f0ff8257f33c99879dfdc4dd->leave($__internal_dd1e97bd43a8dd53e424c8d6ba49a7859bc30c99f0ff8257f33c99879dfdc4dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 171,  337 => 170,  333 => 169,  329 => 168,  324 => 167,  318 => 166,  311 => 141,  305 => 140,  295 => 47,  289 => 46,  280 => 44,  276 => 43,  272 => 42,  268 => 41,  263 => 40,  257 => 39,  244 => 173,  242 => 166,  216 => 142,  214 => 140,  193 => 121,  190 => 120,  184 => 119,  175 => 116,  170 => 115,  165 => 114,  160 => 113,  158 => 112,  154 => 110,  146 => 108,  140 => 105,  136 => 104,  131 => 103,  129 => 102,  115 => 91,  71 => 49,  68 => 46,  66 => 39,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
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
/* 		*/
/* 		input{*/
/* 			border-radius: 4px;*/
/* 			border-color:white;*/
/* 		}*/
/* 		*/
/* 		*/
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
/*     <body>*/
/*         	<!-- menu redondo-->*/
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
/* 				<div class="navbar-header" ><center>*/
/* 					<a href="publicar.html">*/
/* 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border:0;">*/
/* 						<img src="/my_project/web/bundles/spruebaspruebas/imgs/publicar.png" class="visible-xs">*/
/* 						</button>*/
/* 					</a></center>*/
/* 					<a class="navbar-brand" href="{{ path("s_pruebas_pruebas_homepage") }}"><img src="/my_project/web/bundles/spruebaspruebas/imgs/logo.png" width="160px"></a>*/
/* 				</div>*/
/* 				<ul class="nav navbar-nav nav-justified hidden-xs" role="menu">*/
/*  					<li>*/
/* 							<button type="submit" class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 							-moz-border-radius: 27px 27px 27px 27px;*/
/* 							-webkit-border-radius: 27px 27px 27px 27px; margin-top: -55px; margin-left:45%; margin-top:-32px;">*/
/* 							<img src="/my_project/web/bundles/spruebaspruebas/imgs/publicar.png" onClick="location.href='publicar.html'"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 							</button>*/
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
/*         </div>	*/
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
/* 		*/
/* 			</nav>*/
/* 			*/
/* 			<center>*/
/* 			<div class="jumbotron" style="margin-top: 170px; margin-bottom: 50px; width:50%; background-color:#d3d3d3;">*/
/* 			*/
/* 				{% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*         */
/* 			</div>*/
/* 			</center>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/*        */
/* */
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
/*         */
/*     </body>*/
/* </html>*/
/* */
