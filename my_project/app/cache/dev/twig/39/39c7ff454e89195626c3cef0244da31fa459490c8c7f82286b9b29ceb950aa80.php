<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8dc4f5c5d4620b8bc88cabcb1510ad9b515ac8c149e056e7214f92fdd92e503a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b214f8072b2a6cce505f4727511d489efe693cb3b5773ce8aeebf9170f02d8 = $this->env->getExtension("native_profiler");
        $__internal_13b214f8072b2a6cce505f4727511d489efe693cb3b5773ce8aeebf9170f02d8->enter($__internal_13b214f8072b2a6cce505f4727511d489efe693cb3b5773ce8aeebf9170f02d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b214f8072b2a6cce505f4727511d489efe693cb3b5773ce8aeebf9170f02d8->leave($__internal_13b214f8072b2a6cce505f4727511d489efe693cb3b5773ce8aeebf9170f02d8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3944f27d64346a339354a16bb3ea3b7c831309da904cc182397e890a02f8000 = $this->env->getExtension("native_profiler");
        $__internal_e3944f27d64346a339354a16bb3ea3b7c831309da904cc182397e890a02f8000->enter($__internal_e3944f27d64346a339354a16bb3ea3b7c831309da904cc182397e890a02f8000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
\t\t 
        

<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
   
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
     <table align=\"center\" class=\"table \">
         <tr>
             <td><label for=\"username\">";
        // line 18
        echo "Nombre de usuario";
        echo "</label></td>
             <td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /></td>
         </tr>
        <tr>
            <td><label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contraseña", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td>
            <td><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /></td>
        </tr>
        
         <tr>
            
            <td ><label for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recordarme", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td>
            <td align=\"left\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /></td>
        </tr>
        
         <tr>
            <td colspan=\"2\"><center><input class=\"btn btn-default btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enviar", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></center></td>
        </tr>
        
        </table>
</form>
";
        
        $__internal_e3944f27d64346a339354a16bb3ea3b7c831309da904cc182397e890a02f8000->leave($__internal_e3944f27d64346a339354a16bb3ea3b7c831309da904cc182397e890a02f8000_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  84 => 28,  75 => 22,  69 => 19,  65 => 18,  59 => 15,  54 => 13,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* 		 */
/*         */
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*    */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*      <table align="center" class="table ">*/
/*          <tr>*/
/*              <td><label for="username">{{ 'Nombre de usuario' }}</label></td>*/
/*              <td><input type="text" id="username" name="_username" value="{{ last_username }}" required="required" /></td>*/
/*          </tr>*/
/*         <tr>*/
/*             <td><label for="password">{{ 'Contraseña'|trans }}</label></td>*/
/*             <td><input type="password" id="password" name="_password" required="required" /></td>*/
/*         </tr>*/
/*         */
/*          <tr>*/
/*             */
/*             <td ><label for="remember_me">{{ 'Recordarme'|trans }}</label></td>*/
/*             <td align="left"><input type="checkbox" id="remember_me" name="_remember_me" value="on" /></td>*/
/*         </tr>*/
/*         */
/*          <tr>*/
/*             <td colspan="2"><center><input class="btn btn-default btn-block" type="submit" id="_submit" name="_submit" value="{{ 'Enviar'|trans }}" /></center></td>*/
/*         </tr>*/
/*         */
/*         </table>*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
