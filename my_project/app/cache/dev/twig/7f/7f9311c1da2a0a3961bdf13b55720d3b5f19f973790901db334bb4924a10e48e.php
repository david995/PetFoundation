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
        $__internal_8575b2f7f72b4c148c7f7b1b354b571dff452aa020ed9d600261659132981d4c = $this->env->getExtension("native_profiler");
        $__internal_8575b2f7f72b4c148c7f7b1b354b571dff452aa020ed9d600261659132981d4c->enter($__internal_8575b2f7f72b4c148c7f7b1b354b571dff452aa020ed9d600261659132981d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8575b2f7f72b4c148c7f7b1b354b571dff452aa020ed9d600261659132981d4c->leave($__internal_8575b2f7f72b4c148c7f7b1b354b571dff452aa020ed9d600261659132981d4c_prof);

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
