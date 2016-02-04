<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_90bda33cef6ea34ab805870c969e01047c9510289db87fe193ac6d1bf99364de extends Twig_Template
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
        $__internal_8d3d8993d78c8e81f73e719df9753fb63c950f3361c6161e237d2e384ba534d8 = $this->env->getExtension("native_profiler");
        $__internal_8d3d8993d78c8e81f73e719df9753fb63c950f3361c6161e237d2e384ba534d8->enter($__internal_8d3d8993d78c8e81f73e719df9753fb63c950f3361c6161e237d2e384ba534d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8d3d8993d78c8e81f73e719df9753fb63c950f3361c6161e237d2e384ba534d8->leave($__internal_8d3d8993d78c8e81f73e719df9753fb63c950f3361c6161e237d2e384ba534d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
