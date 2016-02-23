<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b07e6fb530232a9febc3307c527f678bbfc769d63ccf48db1de677024b0e56a6 extends Twig_Template
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
        $__internal_dfd76bffb73728a0b319d2591461493184ec93562fd8c66719d4c7c7fa575cac = $this->env->getExtension("native_profiler");
        $__internal_dfd76bffb73728a0b319d2591461493184ec93562fd8c66719d4c7c7fa575cac->enter($__internal_dfd76bffb73728a0b319d2591461493184ec93562fd8c66719d4c7c7fa575cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
                  <div class=\"col-sm-10 col-md-offset-1\">
                  <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Perfil de usuario</font>
                  <br><br>
</div>
</div>
  <div class=\"row\"> 
          <div class=\"col-sm-5 col-md-offset-3\" align=\"left\"  style=\"font-size:2px\"><!--  col-md-offset-2 -->
    <p><label>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p><label>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
          </div>
      </div>
      <div class=\"row\" >
                 <div class=\"col-sm-4 col-md-offset-4 \">
                     <br>
                       <input id=\"botonPublicar\" onclick=\"location.href='";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "';\" class=\"btn btn-info\" type=\"submit\" value=\"Cambiar e-mail\" style='width:100%; height:40px; font-size:20px' /><br><br>
                       <input id=\"botonPublicar\" onclick=\"location.href='";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "';\" class=\"btn btn-info\" type=\"submit\" value=\"Cambiar contraseña\" style='width:100%; height:40px; font-size:20px' />
                 </div>
             </div>
             <br><br>
             <div class=\"col-sm-10 col-md-offset-1\">
                  <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Anuncios de  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</font>
                  <br><br>
                  
                  <table class=\"table\">
        <thead>
            <tr>
               
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Descripcion</th>
                <th>Idpropietario</th>
                <th>Idanimal</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Raza</th>
                <th>Sexo</th>
                <th>Nacimiento</th>
                <th>Propietario</th>
                <th>Telefono</th>
                <th>Pedigri</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
           
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anuncios"]) ? $context["anuncios"] : $this->getContext($context, "anuncios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 50
            echo "            <tr>
                
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Categoria", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "anuncio_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "animal_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Tipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Raza", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Sexo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nacimiento", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Propietario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "tlf", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            if ($this->getAttribute($context["anuncio"], "Pedigri", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                   <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_show", array("id" => $this->getAttribute($context["anuncio"], "id", array()))), "html", null, true);
            echo "\">Ver tu anuncio</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>
                  
                  
</div>
<br><br><br><br><br><br>

";
        
        $__internal_dfd76bffb73728a0b319d2591461493184ec93562fd8c66719d4c7c7fa575cac->leave($__internal_dfd76bffb73728a0b319d2591461493184ec93562fd8c66719d4c7c7fa575cac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 70,  155 => 66,  146 => 64,  142 => 63,  138 => 62,  134 => 61,  130 => 60,  126 => 59,  122 => 58,  118 => 57,  114 => 56,  110 => 55,  106 => 54,  102 => 53,  98 => 52,  94 => 50,  90 => 49,  62 => 24,  54 => 19,  50 => 18,  39 => 12,  33 => 11,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*                   <div class="col-sm-10 col-md-offset-1">*/
/*                   <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Perfil de usuario</font>*/
/*                   <br><br>*/
/* </div>*/
/* </div>*/
/*   <div class="row"> */
/*           <div class="col-sm-5 col-md-offset-3" align="left"  style="font-size:2px"><!--  col-md-offset-2 -->*/
/*     <p><label>{{ 'profile.show.username'|trans }}:</label> {{ user.username }}</p>*/
/*     <p><label>{{ 'profile.show.email'|trans }}:</label> {{ user.email }}</p>*/
/*           </div>*/
/*       </div>*/
/*       <div class="row" >*/
/*                  <div class="col-sm-4 col-md-offset-4 ">*/
/*                      <br>*/
/*                        <input id="botonPublicar" onclick="location.href='{{ path("fos_user_profile_edit") }}';" class="btn btn-info" type="submit" value="Cambiar e-mail" style='width:100%; height:40px; font-size:20px' /><br><br>*/
/*                        <input id="botonPublicar" onclick="location.href='{{ path("fos_user_change_password") }}';" class="btn btn-info" type="submit" value="Cambiar contraseña" style='width:100%; height:40px; font-size:20px' />*/
/*                  </div>*/
/*              </div>*/
/*              <br><br>*/
/*              <div class="col-sm-10 col-md-offset-1">*/
/*                   <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Anuncios de  {{ app.user.username }}</font>*/
/*                   <br><br>*/
/*                   */
/*                   <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                */
/*                 <th>Titulo</th>*/
/*                 <th>Categoria</th>*/
/*                 <th>Descripcion</th>*/
/*                 <th>Idpropietario</th>*/
/*                 <th>Idanimal</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Tipo</th>*/
/*                 <th>Raza</th>*/
/*                 <th>Sexo</th>*/
/*                 <th>Nacimiento</th>*/
/*                 <th>Propietario</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Pedigri</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*            */
/*         {% for anuncio in anuncios %}*/
/*             <tr>*/
/*                 */
/*                 <td>{{ anuncio.titulo }}</td>*/
/*                 <td>{{ anuncio.Categoria }}</td>*/
/*                 <td>{{ anuncio.descripcion }}</td>*/
/*                 <td>{{ anuncio.anuncio_id }}</td>*/
/*                 <td>{{ anuncio.animal_id }}</td>*/
/*                 <td>{{ anuncio.Nombre }}</td>*/
/*                 <td>{{ anuncio.Tipo }}</td>*/
/*                 <td>{{ anuncio.Raza }}</td>*/
/*                 <td>{{ anuncio.Sexo }}</td>*/
/*                 <td>{{ anuncio.Nacimiento }}</td>*/
/*                 <td>{{ anuncio.Propietario }}</td>*/
/*                 <td>{{ anuncio.tlf }}</td>*/
/*                 <td>{% if anuncio.Pedigri  %}Si{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                    <a href="{{ path('anuncios_show', { 'id': anuncio.id }) }}">Ver tu anuncio</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*                   */
/*                   */
/* </div>*/
/* <br><br><br><br><br><br>*/
/* */
/* */
