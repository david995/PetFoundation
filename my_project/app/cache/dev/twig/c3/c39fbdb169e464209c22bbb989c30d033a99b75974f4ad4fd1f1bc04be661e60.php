<?php

/* base.html.twig */
class __TwigTemplate_9d3f89b4b876caf4ddd27b5fff24002962d13d42c14ee824a6499a1496323d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_523bcbe79a2cb73ecb9f55bc04e4b2ad3e4ded2a42b33b3d8767c3dcd8209470 = $this->env->getExtension("native_profiler");
        $__internal_523bcbe79a2cb73ecb9f55bc04e4b2ad3e4ded2a42b33b3d8767c3dcd8209470->enter($__internal_523bcbe79a2cb73ecb9f55bc04e4b2ad3e4ded2a42b33b3d8767c3dcd8209470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "        ";
        // line 13
        echo "        
    </body>
</html>
";
        
        $__internal_523bcbe79a2cb73ecb9f55bc04e4b2ad3e4ded2a42b33b3d8767c3dcd8209470->leave($__internal_523bcbe79a2cb73ecb9f55bc04e4b2ad3e4ded2a42b33b3d8767c3dcd8209470_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec23a9b9c9a2dbe07a556ac436905139be2f218d36b193266f62e4fdfa9c9e8c = $this->env->getExtension("native_profiler");
        $__internal_ec23a9b9c9a2dbe07a556ac436905139be2f218d36b193266f62e4fdfa9c9e8c->enter($__internal_ec23a9b9c9a2dbe07a556ac436905139be2f218d36b193266f62e4fdfa9c9e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec23a9b9c9a2dbe07a556ac436905139be2f218d36b193266f62e4fdfa9c9e8c->leave($__internal_ec23a9b9c9a2dbe07a556ac436905139be2f218d36b193266f62e4fdfa9c9e8c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc6e2d89076a67e815bf786ce60d7a3664059ef6457d8f8ae30e17fe6738614e = $this->env->getExtension("native_profiler");
        $__internal_bc6e2d89076a67e815bf786ce60d7a3664059ef6457d8f8ae30e17fe6738614e->enter($__internal_bc6e2d89076a67e815bf786ce60d7a3664059ef6457d8f8ae30e17fe6738614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bc6e2d89076a67e815bf786ce60d7a3664059ef6457d8f8ae30e17fe6738614e->leave($__internal_bc6e2d89076a67e815bf786ce60d7a3664059ef6457d8f8ae30e17fe6738614e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_af1041c5c2d6071d8cbf50bf9f1c35762f8dbcc01c5bdecdb3eef815f6212a42 = $this->env->getExtension("native_profiler");
        $__internal_af1041c5c2d6071d8cbf50bf9f1c35762f8dbcc01c5bdecdb3eef815f6212a42->enter($__internal_af1041c5c2d6071d8cbf50bf9f1c35762f8dbcc01c5bdecdb3eef815f6212a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af1041c5c2d6071d8cbf50bf9f1c35762f8dbcc01c5bdecdb3eef815f6212a42->leave($__internal_af1041c5c2d6071d8cbf50bf9f1c35762f8dbcc01c5bdecdb3eef815f6212a42_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83037528a7c4d58edec6366eba6099aab82c81fbd79b6c39fb7cbcd8f470e910 = $this->env->getExtension("native_profiler");
        $__internal_83037528a7c4d58edec6366eba6099aab82c81fbd79b6c39fb7cbcd8f470e910->enter($__internal_83037528a7c4d58edec6366eba6099aab82c81fbd79b6c39fb7cbcd8f470e910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83037528a7c4d58edec6366eba6099aab82c81fbd79b6c39fb7cbcd8f470e910->leave($__internal_83037528a7c4d58edec6366eba6099aab82c81fbd79b6c39fb7cbcd8f470e910_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 11,  85 => 10,  74 => 6,  62 => 5,  52 => 13,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         {# app/Resources/views/default/new.html.twig #}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
