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
        $__internal_31a263b3a7d6bbe64acc1d1b6a75a836617bfc150ae1d16363616969bbed9225 = $this->env->getExtension("native_profiler");
        $__internal_31a263b3a7d6bbe64acc1d1b6a75a836617bfc150ae1d16363616969bbed9225->enter($__internal_31a263b3a7d6bbe64acc1d1b6a75a836617bfc150ae1d16363616969bbed9225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        // line 43
        $this->displayBlock('estilos', $context, $blocks);
        // line 50
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
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
\t\t\t\t    \t<ul>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 71
        echo $this->env->getExtension('routing')->getPath("paginas_sebusca");
        echo "'\" ><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/buscarperdido.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 72
        echo $this->env->getExtension('routing')->getPath("paginas_adopciones");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/adoptar.png\" width=\"50px\"></span></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 73
        echo $this->env->getExtension('routing')->getPath("paginas_protectoras");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/refugio.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 74
        echo $this->env->getExtension('routing')->getPath("paginas_camadas");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/camada.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a href=\"/my_project/phpBB3/\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/forum.png\" width=\"45px\"></a></li>
\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"cn-overlay\" class=\"cn-overlay\"></div>
\t\t\t\t<!-- End Nav Structure -->
\t</div>
\t<!-- fin menu redondo-->
    <div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"height:95px;\">
\t\t\t\t\t\t<div class=\"navbar-header\" >
\t\t\t\t\t\t\t<a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("ani");
        echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"navbar-brand container-fluid\" style=\"height:100px\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\"><img src=\"/my_project/web/bundles/index/imgs/logo.png\" width=\"160px\"> </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"nav navbar-nav nav-justified hidden-xs\" role=\"menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<!--<button type=\"submit\" class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;\">
\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\" onClick=\"location.href=''\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t\t\t</button>-->
\t\t\t\t\t\t\t\t<button class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-130px;\" onClick=\"location.href='";
        // line 101
        echo $this->env->getExtension('routing')->getPath("ani");
        echo "'\" value=\"publicar anuncio\">
\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\">&nbsp;&nbsp;&nbsp; Publicar anuncio
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<div class=\"navbar-right container-fluid \" >
\t\t\t\t\t\t\t\t<div style=\"background-color:white; padding:5px; margin-right:13px; margin-top:-105px; border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px;\">
\t\t\t\t\t\t\t\t\t";
        // line 108
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/user.png\">&nbsp;&nbsp; 
\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px;\" href=\"http://pruebaaaspets-daflpa.c9users.io/my_project/web/app_dev.php/profile/\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Perfil", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a> | 
\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px;\" href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cerrar sesión", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>&nbsp;&nbsp; 
\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px; text-decoration:none;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><img src=\"/my_project/web/bundles/index/imgs/user.png\">&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("   Mi cuenta", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 122
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 123
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 126
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 131
        echo "\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!--
\t\t\t\t\t\t<form class=\"navbar-right\" style=\"margin-top:10px;\">
\t\t\t\t\t\t<a href=\"publicar.html\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default hidden-xs\" style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t-webkit-border-radius: 27px 27px 27px 27px; margin-right:390px;\">
\t\t\t\t\t\t<img src=\"imgs/publicar.png\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t</form>-->
\t\t\t\t\t\t<div class=\"navbar-right container-fluid\" style=\"margin-top:7px;\">
\t\t\t\t\t\t\t<img class=\"visible-xs\" src=\"/my_project/web/bundles/index/imgs/user.png\" onclick=\"location.href='";
        // line 145
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "';\" style=\"float: right; margin-right: 10px\"><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t
\t\t\t<center>
\t\t\t<div class=\"jumbotron\" style=\"margin-top: 120px; margin-bottom: 50px; width:100%; background-color:white;\">
\t\t\t
\t\t\t\t";
        // line 152
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 154
        echo "       
\t\t\t</div>
\t\t\t</center>
\t\t</div>
\t</div>
\t
</div>
       

<div id=\"footer\" style=\"position: fixed; bottom: 0; width: 100%; height: 50px; background-color: #00BCD4;text-align: right; line-height: 40px;\">
            <div class=\"container\" >
                <p class=\"text-muted credit\" ><font color=\"#FFFFFF\"><a href=\"/my_project/web/app_dev.php/contactame\" style=\"color: white; text-decoration: none\">Contacto</a> | Pet's - Copyright © 2016</font></p>
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
        // line 177
        $this->displayBlock('javascripts1', $context, $blocks);
        // line 184
        echo "\t\t<!-- fin menu redondo -->   
  </body>
</html>
        
    </body>
</html>
";
        
        $__internal_31a263b3a7d6bbe64acc1d1b6a75a836617bfc150ae1d16363616969bbed9225->leave($__internal_31a263b3a7d6bbe64acc1d1b6a75a836617bfc150ae1d16363616969bbed9225_prof);

    }

    // line 43
    public function block_estilos($context, array $blocks = array())
    {
        $__internal_2e0ed59a603b232dce9a3ff594291d043643f270a7fc75d630441a63c974e5e2 = $this->env->getExtension("native_profiler");
        $__internal_2e0ed59a603b232dce9a3ff594291d043643f270a7fc75d630441a63c974e5e2->enter($__internal_2e0ed59a603b232dce9a3ff594291d043643f270a7fc75d630441a63c974e5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        // line 44
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/component1.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_2e0ed59a603b232dce9a3ff594291d043643f270a7fc75d630441a63c974e5e2->leave($__internal_2e0ed59a603b232dce9a3ff594291d043643f270a7fc75d630441a63c974e5e2_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7bf4a2548086d7a89923fe690f89aaf299f6bfafcdcbfdf7087186dd88cb9ba = $this->env->getExtension("native_profiler");
        $__internal_b7bf4a2548086d7a89923fe690f89aaf299f6bfafcdcbfdf7087186dd88cb9ba->enter($__internal_b7bf4a2548086d7a89923fe690f89aaf299f6bfafcdcbfdf7087186dd88cb9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_b7bf4a2548086d7a89923fe690f89aaf299f6bfafcdcbfdf7087186dd88cb9ba->leave($__internal_b7bf4a2548086d7a89923fe690f89aaf299f6bfafcdcbfdf7087186dd88cb9ba_prof);

    }

    // line 152
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11e368e566e06329fec92aaa34ea98e26eed6024778fe0d98932f9f9cbe05ba0 = $this->env->getExtension("native_profiler");
        $__internal_11e368e566e06329fec92aaa34ea98e26eed6024778fe0d98932f9f9cbe05ba0->enter($__internal_11e368e566e06329fec92aaa34ea98e26eed6024778fe0d98932f9f9cbe05ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 153
        echo "        ";
        
        $__internal_11e368e566e06329fec92aaa34ea98e26eed6024778fe0d98932f9f9cbe05ba0->leave($__internal_11e368e566e06329fec92aaa34ea98e26eed6024778fe0d98932f9f9cbe05ba0_prof);

    }

    // line 177
    public function block_javascripts1($context, array $blocks = array())
    {
        $__internal_6e55c724f2a5c70e798b71b8fb5c5ad00ac1a45a37c0d0f70d1811ea045761cf = $this->env->getExtension("native_profiler");
        $__internal_6e55c724f2a5c70e798b71b8fb5c5ad00ac1a45a37c0d0f70d1811ea045761cf->enter($__internal_6e55c724f2a5c70e798b71b8fb5c5ad00ac1a45a37c0d0f70d1811ea045761cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts1"));

        // line 178
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/polyfills.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/demo1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_6e55c724f2a5c70e798b71b8fb5c5ad00ac1a45a37c0d0f70d1811ea045761cf->leave($__internal_6e55c724f2a5c70e798b71b8fb5c5ad00ac1a45a37c0d0f70d1811ea045761cf_prof);

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
        return array (  374 => 182,  370 => 181,  366 => 180,  362 => 179,  357 => 178,  351 => 177,  344 => 153,  338 => 152,  328 => 51,  322 => 50,  313 => 48,  309 => 47,  305 => 46,  301 => 45,  296 => 44,  290 => 43,  277 => 184,  275 => 177,  250 => 154,  248 => 152,  238 => 145,  222 => 131,  219 => 130,  213 => 129,  204 => 126,  199 => 125,  194 => 124,  189 => 123,  187 => 122,  184 => 121,  176 => 119,  168 => 114,  164 => 113,  159 => 111,  155 => 109,  153 => 108,  143 => 101,  131 => 92,  123 => 87,  107 => 74,  103 => 73,  99 => 72,  95 => 71,  75 => 53,  72 => 50,  70 => 43,  26 => 1,);
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
/* */
/* */
/*   </style>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <!-- menu redondo-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     {% block estilos %}*/
/*     <link href="{{ asset('bundles/index/css/normalize.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('bundles/index/css/demo.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/index/css/component1.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/index/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/index/css/style.css') }}" type="text/css" rel="stylesheet" />*/
/* 		{% endblock %}*/
/* 		{% block javascripts %}*/
/* 		<script src="{{ asset('bundles/index/js/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>*/
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
/* 				    	<ul>*/
/* 					<li><a onclick="location.href='{{ path("paginas_sebusca") }}'" ><img src="/my_project/web/bundles/index/imgs/iconsMenu/buscarperdido.png" width="45px"></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_adopciones") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/adoptar.png" width="50px"></span></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_protectoras") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/refugio.png" width="45px"></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_camadas") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/camada.png" width="45px"></a></li>*/
/* 					<li><a href="/my_project/phpBB3/"><img src="/my_project/web/bundles/index/imgs/iconsMenu/forum.png" width="45px"></a></li>*/
/* 				</ul>*/
/* 				</div>*/
/* 				<div id="cn-overlay" class="cn-overlay"></div>*/
/* 				<!-- End Nav Structure -->*/
/* 	</div>*/
/* 	<!-- fin menu redondo-->*/
/*     <div class="container-fluid">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:95px;">*/
/* 						<div class="navbar-header" >*/
/* 							<a href="{{ path("ani") }}">*/
/* 								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border:0;">*/
/* 									<img src="/my_project/web/bundles/index/imgs/publicar.png" class="visible-xs">*/
/* 								</button>*/
/* 							</a>*/
/* 							<a class="navbar-brand container-fluid" style="height:100px" href="{{ path("index_homepage") }}"><img src="/my_project/web/bundles/index/imgs/logo.png" width="160px"> </a>*/
/* 						</div>*/
/* 						<ul class="nav navbar-nav nav-justified hidden-xs" role="menu">*/
/* 							<li>*/
/* 								<!--<button type="submit" class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 								-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;">*/
/* 								<img src="/my_project/web/bundles/index/imgs/publicar.png" onClick="location.href=''"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 								</button>-->*/
/* 								<button class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 								-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-130px;" onClick="location.href='{{ path("ani") }}'" value="publicar anuncio">*/
/* 									<img src="/my_project/web/bundles/index/imgs/publicar.png">&nbsp;&nbsp;&nbsp; Publicar anuncio*/
/* 								</button>*/
/* 							</li>*/
/* 							<div class="navbar-right container-fluid " >*/
/* 								<div style="background-color:white; padding:5px; margin-right:13px; margin-top:-105px; border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 								-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px;">*/
/* 									{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 										<img src="/my_project/web/bundles/index/imgs/user.png">&nbsp;&nbsp; */
/* 										<a style="height:-150px;" href="http://pruebaaaspets-daflpa.c9users.io/my_project/web/app_dev.php/profile/">*/
/* 											{{ 'Perfil'|trans({}, 'FOSUserBundle') }}*/
/* 										</a> | */
/* 										<a style="height:-150px;" href="{{ path('fos_user_security_logout') }}">*/
/* 											{{ 'Cerrar sesión'|trans({}, 'FOSUserBundle') }}*/
/* 										</a>&nbsp;&nbsp; */
/* 										<center>*/
/* 										</center>*/
/* 									{% else %}*/
/* 										<a style="height:-150px; text-decoration:none;" href="{{ path('fos_user_security_login') }}"><img src="/my_project/web/bundles/index/imgs/user.png">&nbsp;{{ '   Mi cuenta'|trans({}, 'FOSUserBundle') }}</a>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								{% if app.request.hasPreviousSession %}*/
/* 									{% for type, messages in app.session.flashbag.all() %}*/
/* 										{% for message in messages %}*/
/* 											<div class="flash-{{ type }}">*/
/* 												{{ message }}*/
/* 											</div>*/
/* 										{% endfor %}*/
/* 									{% endfor %}*/
/* 								{% endif %}*/
/* 							</div>		*/
/* 						</ul>*/
/* 						<!--*/
/* 						<form class="navbar-right" style="margin-top:10px;">*/
/* 						<a href="publicar.html">*/
/* 						<button type="submit" class="btn btn-default hidden-xs" style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 						-moz-border-radius: 27px 27px 27px 27px;*/
/* 						-webkit-border-radius: 27px 27px 27px 27px; margin-right:390px;">*/
/* 						<img src="imgs/publicar.png"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 						</button>*/
/* 						*/
/* 						</a>*/
/* 						</form>-->*/
/* 						<div class="navbar-right container-fluid" style="margin-top:7px;">*/
/* 							<img class="visible-xs" src="/my_project/web/bundles/index/imgs/user.png" onclick="location.href='{{ path("fos_user_security_login") }}';" style="float: right; margin-right: 10px"><br>*/
/* 						</div>*/
/* 					</nav>*/
/* 			*/
/* 			<center>*/
/* 			<div class="jumbotron" style="margin-top: 120px; margin-bottom: 50px; width:100%; background-color:white;">*/
/* 			*/
/* 				{% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*        */
/* 			</div>*/
/* 			</center>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/*        */
/* */
/* <div id="footer" style="position: fixed; bottom: 0; width: 100%; height: 50px; background-color: #00BCD4;text-align: right; line-height: 40px;">*/
/*             <div class="container" >*/
/*                 <p class="text-muted credit" ><font color="#FFFFFF"><a href="/my_project/web/app_dev.php/contactame" style="color: white; text-decoration: none">Contacto</a> | Pet's - Copyright © 2016</font></p>*/
/*             </div>*/
/*             </div>*/
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
/* 		<script src="{{ asset('bundles/index/js/jquery.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/index/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/index/js/scripts.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/index/js/polyfills.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/index/js/demo1.js') }}" type="text/javascript"></script>*/
/* 		{% endblock %}*/
/* 		<!-- fin menu redondo -->   */
/*   </body>*/
/* </html>*/
/*         */
/*     </body>*/
/* </html>*/
/* */
