<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_99f51404d2336847b2bd133bf9427b6f56658dede9d2c23cb88c2b2da48df665 extends Twig_Template
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
        $__internal_d92fb4c452756d232f27cd0bbf6ed69a8cc093fb7cf3d33329f90b0c43402f4b = $this->env->getExtension("native_profiler");
        $__internal_d92fb4c452756d232f27cd0bbf6ed69a8cc093fb7cf3d33329f90b0c43402f4b->enter($__internal_d92fb4c452756d232f27cd0bbf6ed69a8cc093fb7cf3d33329f90b0c43402f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d92fb4c452756d232f27cd0bbf6ed69a8cc093fb7cf3d33329f90b0c43402f4b->leave($__internal_d92fb4c452756d232f27cd0bbf6ed69a8cc093fb7cf3d33329f90b0c43402f4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
