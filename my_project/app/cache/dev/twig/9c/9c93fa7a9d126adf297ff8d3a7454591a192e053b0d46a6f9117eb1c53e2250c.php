<?php

/* PaginasIndexBundle:Default:SeBusca.html.twig */
class __TwigTemplate_83105388164e027d76df8e0153047513775d304435622efee8a1552203c2248d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8fb4a51e1a0bb153773a21f329feb8787c8b34814336c847898316977588d25 = $this->env->getExtension("native_profiler");
        $__internal_d8fb4a51e1a0bb153773a21f329feb8787c8b34814336c847898316977588d25->enter($__internal_d8fb4a51e1a0bb153773a21f329feb8787c8b34814336c847898316977588d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasIndexBundle:Default:SeBusca.html.twig"));

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

#custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}

  </style>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- menu redondo-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/my_project/web/bundles/index/css/normalize.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/my_project/web/bundles/index/css/demo.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/my_project/web/bundles/index/css/component1.css\" />

\t\t<link rel=\"stylesheet\" href=\"/my_project/web/bundles/index/css/normalizebuscar.css\">
        <link rel=\"stylesheet\" href=\"/my_project/web/bundles/index/css/estilobuscar.css\">

\t\t<script src=\"/my_project/web/bundles/index/js/modernizr-2.6.2.min.js\"></script>
\t\t<script src=\"/my_project/web/bundles/index/js/jquery-1.10.2.js\"></script>
        <script src=\"/my_project/web/bundles/index/js/anuncioshow.js\"></script>
\t<!-- fin menu redondo -->
    <title>Pet’s, adoptalo y no compres</title>
\t
    <meta name=\"description\" content=\"Pets page\">
    <meta name=\"author\" content=\"Pets\">


    <link href=\"/my_project/web/bundles/index/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/my_project/web/bundles/index/css/style.css\" rel=\"stylesheet\">

  </head>
  <body>
  \t<!-- menu redondo-->
  \t<div class=\"component\">
\t\t\t\t<!-- Start Nav Structure -->
\t\t\t\t<button class=\"cn-button\" id=\"cn-button\">+</button>
\t\t\t\t<!--<button class=\"cn-button visible-xs\" id=\"cn-button\" style=\"width:90px;\">+</button>-->
\t\t\t\t<div class=\"cn-wrapper\" id=\"cn-wrapper\" style=\"margin-bottom: 10px\"> <!-- mover posicion de los botones del menu -->
\t\t\t\t    <ul>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/paginasindex/imgs/iconsMenu/camada.png\" width=\"45px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/paginasindex/imgs/iconsMenu/adoptar.png\" width=\"45px\"></span></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/paginasindex/imgs/iconsMenu/home.png\" width=\"40px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/paginasindex/imgs/iconsMenu/buscar.png\" width=\"30px\"></a></li>
\t\t\t\t       <li><a href=\"#\"><img src=\"/my_project/web/bundles/paginasindex/imgs/iconsMenu/donar.png\" width=\"45px\"></a></li>



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
\t\t\t\t\t<a href=\"publicar.html\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t<img src=\"/my_project/web/bundles/paginasindex/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</a> 
\t\t\t\t\t<a class=\"navbar-brand container-fluid\" height=\"100px\" href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\"><img src=\"/my_project/web/bundles/index/imgs/logo.png\" width=\"160px\"> </a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav navbar-nav nav-justified hidden-xs\" role=\"menu\">
 \t\t\t\t\t<li>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;\" onClick=\"location.href='";
        // line 128
        echo $this->env->getExtension('routing')->getPath("ani");
        echo "'\" value=\"publicar anuncio\">
\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\">&nbsp;&nbsp;&nbsp; Publicar anuncio</button>
\t\t\t\t\t\t
 \t\t\t\t</ul>
\t\t\t\t
\t\t
\t\t\t</nav><center> 
\t\t\t\t<div class=\"jumbotron\" style=\"margin-top: 70px; margin-bottom: 50px; background-color:white\">

<!-- inicio buscador -->
      <div class=\"container\">
\t<div class=\"row\">
        <div class=\"col-md-7 col-md-offset-2\">
            <div id=\"custom-search-input\">
                <div class=\"input-group col-md-12\">
                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Buscar animal\" />
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-info btn-lg\" type=\"button\">
                            <i class=\"glyphicon glyphicon-search\"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
\t</div>
</div><br><!-- fin buscador -->
    
<center> 
      <div class=\"row\" > <!-- anuncio -->
      \t<hr style=\"display: block;height: 1px;border: 0;border-top: 2px solid #ccc;margin: 1em 0;padding: 0; \">
          <div class=\"col-sm-4 mostrarDescripcion \"><!--  col-md-offset-2 -->
          \t<img src=\"/my_project/web/bundles/paginasindex/imgs/caniche3.jpg\" class=\"img-rounded\" style=\"width:50%\">
          </div>
          <div class=\"col-sm-3\" >
          \t<img src=\"/my_project/web/bundles/index/imgs/add-notes.png\" style=\"width: 30px\"/><b>Perro perdido en Silla</b>
          </div>
          <div class=\"col-sm-5 \" align=\"left\" >
          \t<b>- Descripcion:</b>Perro perdido por la zona de Silla (Valencia), responde al nombre de Rocky y es muy cariñoso, no dudará en acercarse a la gente
          \t                       Se escapó ayer por la calle Juan Ramón Jimenez. Si alguien lo ve, porfavor que comunique a este número de teléfono 696852963.
          \t                       Las fotos están en la descripción. Muchas Gracias<br>
\t\t\t\t\t        \t<b>- Nombre:</b> Rocky<br>
\t\t\t\t\t        \t<b>- Raza:</b> Caniche<br>
\t\t\t\t\t        \t<b>- Tipo:</b> Perro<br>
\t\t\t\t\t        \t<b>- Sexo:</b> Hembra<br>
\t\t\t\t\t        \t<b>- Nacimiento:</b>  21/09/2010<br>
\t\t\t\t\t        \t<b>- Pedrigri:</b>  No<br>
\t\t\t\t\t        \t<b>- Propietario:</b>  Rafa Jareño<br>
          </div>
      </div><hr style=\"display: block;
    height: 1px;
    border: 0;
    border-top: 2px solid #ccc;
    margin: 1em 0;
    padding: 0; \"><br><!-- fin anuncio -->

      <div >
      <div class=\"row\" ><!-- anuncio -->
          <div class=\"col-sm-4 mostrarDescripcion\" ><!--  col-md-offset-2 -->
          \t<img src=\"/my_project/web/bundles/paginasindex/imgs/labrador.png\" class=\"img-rounded\" style=\"width:50%\">
          </div>
          <div class=\"col-sm-3\">
          \t<img src=\"/my_project/web/bundles/index/imgs/add-notes.png\" style=\"width: 30px\"/><b>Doy Labrador, motivos personales</b>
          </div>
          <div class=\"col-sm-5\" align=\"left\" hidden>
          \t<b>- Descripcion:</b> Es una raza canina de la familia Spitz, que recibe su nombre de la región de Pomerania Central, en Alemania oriental, y se clasifica como perro toy (juguete) por su pequeño tamaño.<br>
\t\t\t\t\t        \t<b>- Nombre:</b>  Vigupe<br>
\t\t\t\t\t        \t<b>- Raza:</b>  cruzado<br>
\t\t\t\t\t        \t<b>- Tipo:</b>  perro<br>
\t\t\t\t\t        \t<b>- Sexo:</b>  macho<br>
\t\t\t\t\t        \t<b>- Nacimiento:</b>  21/09/1989<br>
\t\t\t\t\t        \t<b>- Pedrigri:</b>  No<br>
\t\t\t\t\t        \t<b>- Propietario:</b>  Jonathan Romero<br>
          </div>
      </div><!-- fin anuncio -->
  </div>




\t\t\t\t</center>
\t\t\t
\t\t</div>
\t\t</div>
\t</div>
\t
</div>
<div id=\"footer\" style=\"position: fixed; bottom: 0; width: 100%; height: 40px; background-color: #00BCD4;text-align: right; line-height: 40px;\">
      <div class=\"container\" >
        <p class=\"text-muted credit\" ><font color=\"#FFFFFF\">Pet's | Copyright © 2016</font></p>

      </div>
    </div>

    <script src=\"/my_project/web/bundles/paginasindex/js/jquery.min.js\"></script>
    <script src=\"/my_project/web/bundles/paginasindex/js/bootstrap.min.js\"></script>
    <script src=\"/my_project/web/bundles/paginasindex/js/scripts.js\"></script>
    \t<!-- menu redondo-->
\t\t<script src=\"/my_project/web/bundles/paginasindex/js/polyfills.js\"></script>
\t\t<script src=\"/my_project/web/bundles/paginasindex/js/demo1.js\"></script>
\t\t<!-- fin menu redondo -->   
  </body>
</html>";
        
        $__internal_d8fb4a51e1a0bb153773a21f329feb8787c8b34814336c847898316977588d25->leave($__internal_d8fb4a51e1a0bb153773a21f329feb8787c8b34814336c847898316977588d25_prof);

    }

    public function getTemplateName()
    {
        return "PaginasIndexBundle:Default:SeBusca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 128,  146 => 123,  22 => 1,);
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
/* #custom-search-input{*/
/*     padding: 3px;*/
/*     border: solid 1px #E4E4E4;*/
/*     border-radius: 6px;*/
/*     background-color: #fff;*/
/* }*/
/* */
/* #custom-search-input input{*/
/*     border: 0;*/
/*     box-shadow: none;*/
/* }*/
/* */
/* #custom-search-input button{*/
/*     margin: 2px 0 0 0;*/
/*     background: none;*/
/*     box-shadow: none;*/
/*     border: 0;*/
/*     color: #666666;*/
/*     padding: 0 8px 0 10px;*/
/*     border-left: solid 1px #ccc;*/
/* }*/
/* */
/* #custom-search-input button:hover{*/
/*     border: 0;*/
/*     box-shadow: none;*/
/*     border-left: solid 1px #ccc;*/
/* }*/
/* */
/* #custom-search-input .glyphicon-search{*/
/*     font-size: 23px;*/
/* }*/
/* */
/*   </style>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <!-- menu redondo-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link rel="stylesheet" type="text/css" href="/my_project/web/bundles/index/css/normalize.css" />*/
/* 		<link rel="stylesheet" type="text/css" href="/my_project/web/bundles/index/css/demo.css" />*/
/* 		<link rel="stylesheet" type="text/css" href="/my_project/web/bundles/index/css/component1.css" />*/
/* */
/* 		<link rel="stylesheet" href="/my_project/web/bundles/index/css/normalizebuscar.css">*/
/*         <link rel="stylesheet" href="/my_project/web/bundles/index/css/estilobuscar.css">*/
/* */
/* 		<script src="/my_project/web/bundles/index/js/modernizr-2.6.2.min.js"></script>*/
/* 		<script src="/my_project/web/bundles/index/js/jquery-1.10.2.js"></script>*/
/*         <script src="/my_project/web/bundles/index/js/anuncioshow.js"></script>*/
/* 	<!-- fin menu redondo -->*/
/*     <title>Pet’s, adoptalo y no compres</title>*/
/* 	*/
/*     <meta name="description" content="Pets page">*/
/*     <meta name="author" content="Pets">*/
/* */
/* */
/*     <link href="/my_project/web/bundles/index/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="/my_project/web/bundles/index/css/style.css" rel="stylesheet">*/
/* */
/*   </head>*/
/*   <body>*/
/*   	<!-- menu redondo-->*/
/*   	<div class="component">*/
/* 				<!-- Start Nav Structure -->*/
/* 				<button class="cn-button" id="cn-button">+</button>*/
/* 				<!--<button class="cn-button visible-xs" id="cn-button" style="width:90px;">+</button>-->*/
/* 				<div class="cn-wrapper" id="cn-wrapper" style="margin-bottom: 10px"> <!-- mover posicion de los botones del menu -->*/
/* 				    <ul>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/paginasindex/imgs/iconsMenu/camada.png" width="45px"></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/paginasindex/imgs/iconsMenu/adoptar.png" width="45px"></span></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/paginasindex/imgs/iconsMenu/home.png" width="40px"></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/paginasindex/imgs/iconsMenu/buscar.png" width="30px"></a></li>*/
/* 				       <li><a href="#"><img src="/my_project/web/bundles/paginasindex/imgs/iconsMenu/donar.png" width="45px"></a></li>*/
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
/* 					<a href="publicar.html">*/
/* 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border:0;">*/
/* 						<img src="/my_project/web/bundles/paginasindex/imgs/publicar.png" class="visible-xs">*/
/* 						</button>*/
/* 					</a> */
/* 					<a class="navbar-brand container-fluid" height="100px" href="{{ path("index_homepage") }}"><img src="/my_project/web/bundles/index/imgs/logo.png" width="160px"> </a>*/
/* 				</div>*/
/* 				<ul class="nav navbar-nav nav-justified hidden-xs" role="menu">*/
/*  					<li>*/
/* 						<button type="submit" class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 						-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;" onClick="location.href='{{ path("ani") }}'" value="publicar anuncio">*/
/* 						<img src="/my_project/web/bundles/index/imgs/publicar.png">&nbsp;&nbsp;&nbsp; Publicar anuncio</button>*/
/* 						*/
/*  				</ul>*/
/* 				*/
/* 		*/
/* 			</nav><center> */
/* 				<div class="jumbotron" style="margin-top: 70px; margin-bottom: 50px; background-color:white">*/
/* */
/* <!-- inicio buscador -->*/
/*       <div class="container">*/
/* 	<div class="row">*/
/*         <div class="col-md-7 col-md-offset-2">*/
/*             <div id="custom-search-input">*/
/*                 <div class="input-group col-md-12">*/
/*                     <input type="text" class="form-control input-lg" placeholder="Buscar animal" />*/
/*                     <span class="input-group-btn">*/
/*                         <button class="btn btn-info btn-lg" type="button">*/
/*                             <i class="glyphicon glyphicon-search"></i>*/
/*                         </button>*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div><br><!-- fin buscador -->*/
/*     */
/* <center> */
/*       <div class="row" > <!-- anuncio -->*/
/*       	<hr style="display: block;height: 1px;border: 0;border-top: 2px solid #ccc;margin: 1em 0;padding: 0; ">*/
/*           <div class="col-sm-4 mostrarDescripcion "><!--  col-md-offset-2 -->*/
/*           	<img src="/my_project/web/bundles/paginasindex/imgs/caniche3.jpg" class="img-rounded" style="width:50%">*/
/*           </div>*/
/*           <div class="col-sm-3" >*/
/*           	<img src="/my_project/web/bundles/index/imgs/add-notes.png" style="width: 30px"/><b>Perro perdido en Silla</b>*/
/*           </div>*/
/*           <div class="col-sm-5 " align="left" >*/
/*           	<b>- Descripcion:</b>Perro perdido por la zona de Silla (Valencia), responde al nombre de Rocky y es muy cariñoso, no dudará en acercarse a la gente*/
/*           	                       Se escapó ayer por la calle Juan Ramón Jimenez. Si alguien lo ve, porfavor que comunique a este número de teléfono 696852963.*/
/*           	                       Las fotos están en la descripción. Muchas Gracias<br>*/
/* 					        	<b>- Nombre:</b> Rocky<br>*/
/* 					        	<b>- Raza:</b> Caniche<br>*/
/* 					        	<b>- Tipo:</b> Perro<br>*/
/* 					        	<b>- Sexo:</b> Hembra<br>*/
/* 					        	<b>- Nacimiento:</b>  21/09/2010<br>*/
/* 					        	<b>- Pedrigri:</b>  No<br>*/
/* 					        	<b>- Propietario:</b>  Rafa Jareño<br>*/
/*           </div>*/
/*       </div><hr style="display: block;*/
/*     height: 1px;*/
/*     border: 0;*/
/*     border-top: 2px solid #ccc;*/
/*     margin: 1em 0;*/
/*     padding: 0; "><br><!-- fin anuncio -->*/
/* */
/*       <div >*/
/*       <div class="row" ><!-- anuncio -->*/
/*           <div class="col-sm-4 mostrarDescripcion" ><!--  col-md-offset-2 -->*/
/*           	<img src="/my_project/web/bundles/paginasindex/imgs/labrador.png" class="img-rounded" style="width:50%">*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*           	<img src="/my_project/web/bundles/index/imgs/add-notes.png" style="width: 30px"/><b>Doy Labrador, motivos personales</b>*/
/*           </div>*/
/*           <div class="col-sm-5" align="left" hidden>*/
/*           	<b>- Descripcion:</b> Es una raza canina de la familia Spitz, que recibe su nombre de la región de Pomerania Central, en Alemania oriental, y se clasifica como perro toy (juguete) por su pequeño tamaño.<br>*/
/* 					        	<b>- Nombre:</b>  Vigupe<br>*/
/* 					        	<b>- Raza:</b>  cruzado<br>*/
/* 					        	<b>- Tipo:</b>  perro<br>*/
/* 					        	<b>- Sexo:</b>  macho<br>*/
/* 					        	<b>- Nacimiento:</b>  21/09/1989<br>*/
/* 					        	<b>- Pedrigri:</b>  No<br>*/
/* 					        	<b>- Propietario:</b>  Jonathan Romero<br>*/
/*           </div>*/
/*       </div><!-- fin anuncio -->*/
/*   </div>*/
/* */
/* */
/* */
/* */
/* 				</center>*/
/* 			*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* <div id="footer" style="position: fixed; bottom: 0; width: 100%; height: 40px; background-color: #00BCD4;text-align: right; line-height: 40px;">*/
/*       <div class="container" >*/
/*         <p class="text-muted credit" ><font color="#FFFFFF">Pet's | Copyright © 2016</font></p>*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/*     <script src="/my_project/web/bundles/paginasindex/js/jquery.min.js"></script>*/
/*     <script src="/my_project/web/bundles/paginasindex/js/bootstrap.min.js"></script>*/
/*     <script src="/my_project/web/bundles/paginasindex/js/scripts.js"></script>*/
/*     	<!-- menu redondo-->*/
/* 		<script src="/my_project/web/bundles/paginasindex/js/polyfills.js"></script>*/
/* 		<script src="/my_project/web/bundles/paginasindex/js/demo1.js"></script>*/
/* 		<!-- fin menu redondo -->   */
/*   </body>*/
/* </html>*/
