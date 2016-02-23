<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b8a9ac02d6d83137d96a7556a67db261ff08af6c7d018f16421e55a755e403a0 extends Twig_Template
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
        $__internal_e99bd7f5e4c3c4027677e6402c81bc3d83827806a1ccfba80f007a770727658a = $this->env->getExtension("native_profiler");
        $__internal_e99bd7f5e4c3c4027677e6402c81bc3d83827806a1ccfba80f007a770727658a->enter($__internal_e99bd7f5e4c3c4027677e6402c81bc3d83827806a1ccfba80f007a770727658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e99bd7f5e4c3c4027677e6402c81bc3d83827806a1ccfba80f007a770727658a->leave($__internal_e99bd7f5e4c3c4027677e6402c81bc3d83827806a1ccfba80f007a770727658a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
