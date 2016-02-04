<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_f24321d6fd4d39257f1f82d1889edbe637806c846d21e80023ab73ad2fe0e902 extends Twig_Template
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
        $__internal_ea040d6420b1585ee9d69e222379c3894d2d91ed44b18d9565c2c09dc8f3a881 = $this->env->getExtension("native_profiler");
        $__internal_ea040d6420b1585ee9d69e222379c3894d2d91ed44b18d9565c2c09dc8f3a881->enter($__internal_ea040d6420b1585ee9d69e222379c3894d2d91ed44b18d9565c2c09dc8f3a881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    <table align=\"center\" class=\"table \">
         <tr>
             <td><label for=\"username\">";
        // line 6
        echo "Nombre de usuario";
        echo "</label></td>
             <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "</td>
         </tr>
        <tr>
            <td><label for=\"email\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td>
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td><label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contraseña actual", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'row');
        echo "</td>
        </tr>
        
         <tr>
            <td colspan=\"2\"><input class=\"btn btn-default btn-block\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enviar", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></td>
        </tr>
        
        </table>
    
        
    
";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ea040d6420b1585ee9d69e222379c3894d2d91ed44b18d9565c2c09dc8f3a881->leave($__internal_ea040d6420b1585ee9d69e222379c3894d2d91ed44b18d9565c2c09dc8f3a881_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  62 => 19,  55 => 15,  51 => 14,  45 => 11,  41 => 10,  35 => 7,  31 => 6,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     <table align="center" class="table ">*/
/*          <tr>*/
/*              <td><label for="username">{{ 'Nombre de usuario' }}</label></td>*/
/*              <td>{{ form_row(form.username) }}</td>*/
/*          </tr>*/
/*         <tr>*/
/*             <td><label for="email">{{ 'Email'|trans }}</label></td>*/
/*             <td>{{ form_row(form.email) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td><label for="password">{{ 'Contraseña actual'|trans }}</label></td>*/
/*             <td>{{ form_row(form.current_password) }}</td>*/
/*         </tr>*/
/*         */
/*          <tr>*/
/*             <td colspan="2"><input class="btn btn-default btn-block" type="submit" value="{{ 'Enviar'|trans }}" /></td>*/
/*         </tr>*/
/*         */
/*         </table>*/
/*     */
/*         */
/*     */
/* {{ form_end(form) }}*/
/* */
