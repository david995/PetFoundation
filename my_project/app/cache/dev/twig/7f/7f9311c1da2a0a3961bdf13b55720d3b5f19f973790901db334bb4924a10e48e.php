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
        $__internal_a7379c32befe2f699208b999a6e2423d9c1b81b892da603779fa5ab06ccc25cc = $this->env->getExtension("native_profiler");
        $__internal_a7379c32befe2f699208b999a6e2423d9c1b81b892da603779fa5ab06ccc25cc->enter($__internal_a7379c32befe2f699208b999a6e2423d9c1b81b892da603779fa5ab06ccc25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a7379c32befe2f699208b999a6e2423d9c1b81b892da603779fa5ab06ccc25cc->leave($__internal_a7379c32befe2f699208b999a6e2423d9c1b81b892da603779fa5ab06ccc25cc_prof);

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
