<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d06e866fd6f126699b0dad0998414d4dfbf51789e7da88a11fbdf561d5724c33 extends Twig_Template
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
        $__internal_d26777734975b564885e27c09db14a96ba6bd20125afcf6ec6a674798a3d52a7 = $this->env->getExtension("native_profiler");
        $__internal_d26777734975b564885e27c09db14a96ba6bd20125afcf6ec6a674798a3d52a7->enter($__internal_d26777734975b564885e27c09db14a96ba6bd20125afcf6ec6a674798a3d52a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div style=\"margin-left:30px;\">
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("role" => "form", "method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register form-horizontal")));
        echo "
 <div class=\"form-group\">
    <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
    <div class=\"col-sm-10\">
      ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    <label class=\"control-label col-sm-2\" for=\"username\">Username:</label>
    <div class=\"col-sm-10\"> 
      ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    </div>
  </div>
   <div class=\"form-group\">
    <label class=\"control-label col-sm-2\" for=\"password\">Password:<br>Comfirm:</label>
    <div class=\"col-sm-10\"> 
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
    </div>
  </div>
  ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "  <div class=\"form-group\">
    <label class=\"control-label col-sm-2\" for=\"password\">Rol:</label>
    <div class=\"col-sm-10\"> 
      <select style=\"\" id=\"fos_user_registration_form_roles\" name=\"fos_user_registration_form[roles][]\" required=\"required\" multiple=\"multiple\">
          <option value=\"ROLE_ADMIN\" >ADMINISTRADOR</option>
          <option value=\"ROLE_SUPERADMIN\" >SUPERADMINISTRADOR</option>
          <option value=\"ROLE_USER\"  selected=\"selected\">USUARIO</option>
      </select>
    </div>
  </div>
  ";
        } else {
            // line 34
            echo "    <div class=\"col-sm-10\"> 
      ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'row');
            echo "
    </div>

";
        }
        // line 39
        echo "
    
  <div class=\"form-group\"> 
    <div class=\"col-sm-offset-2 col-sm-10\">
      <button type=\"submit\" class=\"btn btn-default\">Submit</button>
    </div>
  </div>


";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_d26777734975b564885e27c09db14a96ba6bd20125afcf6ec6a674798a3d52a7->leave($__internal_d26777734975b564885e27c09db14a96ba6bd20125afcf6ec6a674798a3d52a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 48,  81 => 39,  74 => 35,  71 => 34,  58 => 23,  56 => 22,  50 => 19,  41 => 13,  32 => 7,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div style="margin-left:30px;">*/
/* {{ form_start(form, {'role': 'form','method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register form-horizontal'}}) }}*/
/*  <div class="form-group">*/
/*     <label class="control-label col-sm-2" for="email">Email:</label>*/
/*     <div class="col-sm-10">*/
/*       {{ form_row(form.email) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label class="control-label col-sm-2" for="username">Username:</label>*/
/*     <div class="col-sm-10"> */
/*       {{ form_row(form.username) }}*/
/*     </div>*/
/*   </div>*/
/*    <div class="form-group">*/
/*     <label class="control-label col-sm-2" for="password">Password:<br>Comfirm:</label>*/
/*     <div class="col-sm-10"> */
/*       {{ form_row(form.plainPassword) }}*/
/*     </div>*/
/*   </div>*/
/*   {% if is_granted('ROLE_ADMIN') %}*/
/*   <div class="form-group">*/
/*     <label class="control-label col-sm-2" for="password">Rol:</label>*/
/*     <div class="col-sm-10"> */
/*       <select style="" id="fos_user_registration_form_roles" name="fos_user_registration_form[roles][]" required="required" multiple="multiple">*/
/*           <option value="ROLE_ADMIN" >ADMINISTRADOR</option>*/
/*           <option value="ROLE_SUPERADMIN" >SUPERADMINISTRADOR</option>*/
/*           <option value="ROLE_USER"  selected="selected">USUARIO</option>*/
/*       </select>*/
/*     </div>*/
/*   </div>*/
/*   {% else %}*/
/*     <div class="col-sm-10"> */
/*       {{ form_row(form.roles) }}*/
/*     </div>*/
/* */
/* {% endif %}*/
/* */
/*     */
/*   <div class="form-group"> */
/*     <div class="col-sm-offset-2 col-sm-10">*/
/*       <button type="submit" class="btn btn-default">Submit</button>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* {{form_end(form) }}*/
/* </div>*/
