<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2bb5039191d84ccd75f3036d426811e5b47a8bec042a55cb57411d5191cf372 extends Twig_Template
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
        $__internal_31b670e37f7ca9b0bf9a27ab34031d529c94393162749420ac93d44011adc306 = $this->env->getExtension("native_profiler");
        $__internal_31b670e37f7ca9b0bf9a27ab34031d529c94393162749420ac93d44011adc306->enter($__internal_31b670e37f7ca9b0bf9a27ab34031d529c94393162749420ac93d44011adc306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_31b670e37f7ca9b0bf9a27ab34031d529c94393162749420ac93d44011adc306->leave($__internal_31b670e37f7ca9b0bf9a27ab34031d529c94393162749420ac93d44011adc306_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
