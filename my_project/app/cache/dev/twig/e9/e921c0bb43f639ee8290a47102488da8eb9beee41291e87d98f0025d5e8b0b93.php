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
        $__internal_b0c864a5f1ef3c1e6b8f8ac1354091223b2d6c398493e40a63cef9ce3648773b = $this->env->getExtension("native_profiler");
        $__internal_b0c864a5f1ef3c1e6b8f8ac1354091223b2d6c398493e40a63cef9ce3648773b->enter($__internal_b0c864a5f1ef3c1e6b8f8ac1354091223b2d6c398493e40a63cef9ce3648773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        // line 41
        $this->displayBlock('estilos', $context, $blocks);
        // line 48
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
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
\t\t\t\t\t<a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("publicaranuncio");
        echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t<img src=\"/my_project/web/bundles/spruebaspruebas/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</a></center>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 93
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
        // line 142
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 144
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
        // line 168
        $this->displayBlock('javascripts1', $context, $blocks);
        // line 175
        echo "\t\t<!-- fin menu redondo -->   
  </body>
</html>
        
    </body>
</html>
";
        
        $__internal_b0c864a5f1ef3c1e6b8f8ac1354091223b2d6c398493e40a63cef9ce3648773b->leave($__internal_b0c864a5f1ef3c1e6b8f8ac1354091223b2d6c398493e40a63cef9ce3648773b_prof);

    }

    // line 41
    public function block_estilos($context, array $blocks = array())
    {
        $__internal_8c90fc278fdfa8b308ee515ba705238f6877a54ebb899987b1fc37822bcc814e = $this->env->getExtension("native_profiler");
        $__internal_8c90fc278fdfa8b308ee515ba705238f6877a54ebb899987b1fc37822bcc814e->enter($__internal_8c90fc278fdfa8b308ee515ba705238f6877a54ebb899987b1fc37822bcc814e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        // line 42
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/component1.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_8c90fc278fdfa8b308ee515ba705238f6877a54ebb899987b1fc37822bcc814e->leave($__internal_8c90fc278fdfa8b308ee515ba705238f6877a54ebb899987b1fc37822bcc814e_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecaa76d755d0b4d960b67ec3be1fc513f8f8475d055a26ac7d4811e222b69479 = $this->env->getExtension("native_profiler");
        $__internal_ecaa76d755d0b4d960b67ec3be1fc513f8f8475d055a26ac7d4811e222b69479->enter($__internal_ecaa76d755d0b4d960b67ec3be1fc513f8f8475d055a26ac7d4811e222b69479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_ecaa76d755d0b4d960b67ec3be1fc513f8f8475d055a26ac7d4811e222b69479->leave($__internal_ecaa76d755d0b4d960b67ec3be1fc513f8f8475d055a26ac7d4811e222b69479_prof);

    }

    // line 142
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21e96bb874b3308d55c87a71d283e945900fd263c73737f43b85068f0d1b6f1a = $this->env->getExtension("native_profiler");
        $__internal_21e96bb874b3308d55c87a71d283e945900fd263c73737f43b85068f0d1b6f1a->enter($__internal_21e96bb874b3308d55c87a71d283e945900fd263c73737f43b85068f0d1b6f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 143
        echo "        ";
        
        $__internal_21e96bb874b3308d55c87a71d283e945900fd263c73737f43b85068f0d1b6f1a->leave($__internal_21e96bb874b3308d55c87a71d283e945900fd263c73737f43b85068f0d1b6f1a_prof);

    }

    // line 168
    public function block_javascripts1($context, array $blocks = array())
    {
        $__internal_b9945773f55401eb1cd163e5fd61396f9cb243e870e7f213b4f6c673769b3f01 = $this->env->getExtension("native_profiler");
        $__internal_b9945773f55401eb1cd163e5fd61396f9cb243e870e7f213b4f6c673769b3f01->enter($__internal_b9945773f55401eb1cd163e5fd61396f9cb243e870e7f213b4f6c673769b3f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts1"));

        // line 169
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/polyfills.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/spruebaspruebas/js/demo1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_b9945773f55401eb1cd163e5fd61396f9cb243e870e7f213b4f6c673769b3f01->leave($__internal_b9945773f55401eb1cd163e5fd61396f9cb243e870e7f213b4f6c673769b3f01_prof);

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
        return array (  346 => 173,  342 => 172,  338 => 171,  334 => 170,  329 => 169,  323 => 168,  316 => 143,  310 => 142,  300 => 49,  294 => 48,  285 => 46,  281 => 45,  277 => 44,  273 => 43,  268 => 42,  262 => 41,  249 => 175,  247 => 168,  221 => 144,  219 => 142,  198 => 123,  195 => 122,  189 => 121,  180 => 118,  175 => 117,  170 => 116,  165 => 115,  163 => 114,  159 => 112,  151 => 110,  145 => 107,  141 => 106,  136 => 105,  134 => 104,  120 => 93,  112 => 88,  73 => 51,  70 => 48,  68 => 41,  26 => 1,);
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
/*     */
/*     */
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
/* 					<a href="{{ path("publicaranuncio") }}">*/
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
