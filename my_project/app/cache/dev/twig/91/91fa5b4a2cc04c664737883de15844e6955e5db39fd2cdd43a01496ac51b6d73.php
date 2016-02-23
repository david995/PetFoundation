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
        $__internal_12d889649b0f337b1e8ed6c416a8414badf0ce1fd69e87b0540b5d1785322beb = $this->env->getExtension("native_profiler");
        $__internal_12d889649b0f337b1e8ed6c416a8414badf0ce1fd69e87b0540b5d1785322beb->enter($__internal_12d889649b0f337b1e8ed6c416a8414badf0ce1fd69e87b0540b5d1785322beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_12d889649b0f337b1e8ed6c416a8414badf0ce1fd69e87b0540b5d1785322beb->leave($__internal_12d889649b0f337b1e8ed6c416a8414badf0ce1fd69e87b0540b5d1785322beb_prof);

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
