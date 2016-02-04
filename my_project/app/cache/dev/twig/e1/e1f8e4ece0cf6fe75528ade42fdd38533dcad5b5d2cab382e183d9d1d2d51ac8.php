<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7657e53da0a4c124109804be82b5ec7d9df94a2ee37fd03d736a3da37757605b extends Twig_Template
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
        $__internal_36c9161e526e4ec7189fb288fb99e35c00cd8f502f1b61a5334cceaf37d6bc64 = $this->env->getExtension("native_profiler");
        $__internal_36c9161e526e4ec7189fb288fb99e35c00cd8f502f1b61a5334cceaf37d6bc64->enter($__internal_36c9161e526e4ec7189fb288fb99e35c00cd8f502f1b61a5334cceaf37d6bc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_36c9161e526e4ec7189fb288fb99e35c00cd8f502f1b61a5334cceaf37d6bc64->leave($__internal_36c9161e526e4ec7189fb288fb99e35c00cd8f502f1b61a5334cceaf37d6bc64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
