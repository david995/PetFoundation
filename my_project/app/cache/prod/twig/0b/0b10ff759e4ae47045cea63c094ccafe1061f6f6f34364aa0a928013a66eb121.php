<?php

/* PaginasIndexBundle:Default:Contenido_camadas.html.twig */
class __TwigTemplate_ee0de97d545761a09f75ef053a8cf72cf9b9d41e3cf456ce890db48813a76873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PaginasIndexBundle:Default:index.html.twig", "PaginasIndexBundle:Default:Contenido_camadas.html.twig", 1);
        $this->blocks = array(
            'guide' => array($this, 'block_guide'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PaginasIndexBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0abdcbe12f29a2552d8c906dc73469770cef96b386989d9fbf55686def1b426 = $this->env->getExtension("native_profiler");
        $__internal_a0abdcbe12f29a2552d8c906dc73469770cef96b386989d9fbf55686def1b426->enter($__internal_a0abdcbe12f29a2552d8c906dc73469770cef96b386989d9fbf55686def1b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasIndexBundle:Default:Contenido_camadas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0abdcbe12f29a2552d8c906dc73469770cef96b386989d9fbf55686def1b426->leave($__internal_a0abdcbe12f29a2552d8c906dc73469770cef96b386989d9fbf55686def1b426_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_2ec2a87714f24777b7364949717bda9949e6ce5948188ed92d68cc6a34e2ec76 = $this->env->getExtension("native_profiler");
        $__internal_2ec2a87714f24777b7364949717bda9949e6ce5948188ed92d68cc6a34e2ec76->enter($__internal_2ec2a87714f24777b7364949717bda9949e6ce5948188ed92d68cc6a34e2ec76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Camadas</a>
";
        
        $__internal_2ec2a87714f24777b7364949717bda9949e6ce5948188ed92d68cc6a34e2ec76->leave($__internal_2ec2a87714f24777b7364949717bda9949e6ce5948188ed92d68cc6a34e2ec76_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8df7639b2c999dd80bfc276daf82819abb429eb5c216311ed82e943c37760b4c = $this->env->getExtension("native_profiler");
        $__internal_8df7639b2c999dd80bfc276daf82819abb429eb5c216311ed82e943c37760b4c->enter($__internal_8df7639b2c999dd80bfc276daf82819abb429eb5c216311ed82e943c37760b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

<!-- inicio buscador -->
                            <div class=\"container\">
                                <div class=\"row\">
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
                                </div>
                            </div><br><!-- fin buscador -->
                            <center> 
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anuncios"]) ? $context["anuncios"] : $this->getContext($context, "anuncios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 30
            echo "                                <div class=\"row\" > <!-- anuncio -->
                                    <hr style=\"display: block;height: 1px;border: 0;border-top: 2px solid #ccc;margin: 1em 0;padding: 0; \">
           
           
                                    <div class=\"col-sm-4 mostrarDescripcion \"><!--  col-md-offset-2 -->
                                        <img src=\"/my_project/web/bundles/paginasindex/imgs/camadasboxers.jpg\" class=\"img-rounded\" style=\"width:50%\">
                                    </div>
                                    <div class=\"col-sm-3\" >
                                        <img src=\"/my_project/web/bundles/index/imgs/add-notes.png\" style=\"width: 30px\"/><b>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "titulo", array()), "html", null, true);
            echo "</b>
                                    </div>
                                    <div class=\"col-sm-5 \" align=\"left\" >
                                        <b>- Descripción:</b>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "descripcion", array()), "html", null, true);
            echo "<br>
                                        <b>- Nombre:</b>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nombre", array()), "html", null, true);
            echo "<br>
                                        <b>- Raza:</b>  ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Raza", array()), "html", null, true);
            echo "<br>
                                        <b>- Tipo:</b>  ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Tipo", array()), "html", null, true);
            echo "<br>
                                        <b>- Sexo:</b>  ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Sexo", array()), "html", null, true);
            echo "<br>
                                        <b>- Teléfono:</b>  ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "tlf", array()), "html", null, true);
            echo "<br>
                                        <b>- Nacimiento:</b>  ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nacimiento", array()), "html", null, true);
            echo "<br>
                                        
                                        <b>- Pedrigri:</b>";
            // line 49
            if ($this->getAttribute($context["anuncio"], "Pedigri", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "  <br>
                                        <b>- Propietario:</b>  ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Propietario", array()), "html", null, true);
            echo "<br>
                                    </div>
                                </div>
                                <hr style=\"display: block;
                                
                                
                        
                                
                                
                                height: 1px;
                                border: 0;
                                border-top: 2px solid #ccc;
                                margin: 1em 0;
                                padding: 0; \"><br><!-- fin anuncio -->
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo " 
                            </center>


";
        
        $__internal_8df7639b2c999dd80bfc276daf82819abb429eb5c216311ed82e943c37760b4c->leave($__internal_8df7639b2c999dd80bfc276daf82819abb429eb5c216311ed82e943c37760b4c_prof);

    }

    public function getTemplateName()
    {
        return "PaginasIndexBundle:Default:Contenido_camadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 64,  136 => 50,  128 => 49,  123 => 47,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  93 => 38,  83 => 30,  79 => 29,  57 => 9,  51 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PaginasIndexBundle:Default:index.html.twig" %}*/
/* */
/* {% block guide %}*/
/*   <a href="{{ path("index_homepage") }}">Inicio</a> > <a href="#">Camadas</a>*/
/* {% endblock guide %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* <!-- inicio buscador -->*/
/*                             <div class="container">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-7 col-md-offset-2">*/
/*                                         <div id="custom-search-input">*/
/*                                             <div class="input-group col-md-12">*/
/*                                                 <input type="text" class="form-control input-lg" placeholder="Buscar animal" />*/
/*                                                 <span class="input-group-btn">*/
/*                                                     <button class="btn btn-info btn-lg" type="button">*/
/*                                                         <i class="glyphicon glyphicon-search"></i>*/
/*                                                     </button>*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div><br><!-- fin buscador -->*/
/*                             <center> */
/*                     {% for anuncio in anuncios %}*/
/*                                 <div class="row" > <!-- anuncio -->*/
/*                                     <hr style="display: block;height: 1px;border: 0;border-top: 2px solid #ccc;margin: 1em 0;padding: 0; ">*/
/*            */
/*            */
/*                                     <div class="col-sm-4 mostrarDescripcion "><!--  col-md-offset-2 -->*/
/*                                         <img src="/my_project/web/bundles/paginasindex/imgs/camadasboxers.jpg" class="img-rounded" style="width:50%">*/
/*                                     </div>*/
/*                                     <div class="col-sm-3" >*/
/*                                         <img src="/my_project/web/bundles/index/imgs/add-notes.png" style="width: 30px"/><b>{{ anuncio.titulo }}</b>*/
/*                                     </div>*/
/*                                     <div class="col-sm-5 " align="left" >*/
/*                                         <b>- Descripción:</b>{{ anuncio.descripcion }}<br>*/
/*                                         <b>- Nombre:</b>{{ anuncio.Nombre }}<br>*/
/*                                         <b>- Raza:</b>  {{ anuncio.Raza }}<br>*/
/*                                         <b>- Tipo:</b>  {{ anuncio.Tipo }}<br>*/
/*                                         <b>- Sexo:</b>  {{ anuncio.Sexo }}<br>*/
/*                                         <b>- Teléfono:</b>  {{ anuncio.tlf }}<br>*/
/*                                         <b>- Nacimiento:</b>  {{ anuncio.Nacimiento }}<br>*/
/*                                         */
/*                                         <b>- Pedrigri:</b>{% if anuncio.Pedigri  %}Si{% else %}No{% endif %}  <br>*/
/*                                         <b>- Propietario:</b>  {{ anuncio.Propietario }}<br>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr style="display: block;*/
/*                                 */
/*                                 */
/*                         */
/*                                 */
/*                                 */
/*                                 height: 1px;*/
/*                                 border: 0;*/
/*                                 border-top: 2px solid #ccc;*/
/*                                 margin: 1em 0;*/
/*                                 padding: 0; "><br><!-- fin anuncio -->*/
/*                                    {% endfor %} */
/*                             </center>*/
/* */
/* */
/* {% endblock body %}*/
/*       */
