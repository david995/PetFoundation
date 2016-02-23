<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7de59e26b0ba3c42beed2d49698c4b91ac8c797ef6fe0e744796b980ec1a0605 extends Twig_Template
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
        $__internal_80cee819c760b45ba1545006643e6adcf2762c1868007958b5723b9a7a427369 = $this->env->getExtension("native_profiler");
        $__internal_80cee819c760b45ba1545006643e6adcf2762c1868007958b5723b9a7a427369->enter($__internal_80cee819c760b45ba1545006643e6adcf2762c1868007958b5723b9a7a427369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_80cee819c760b45ba1545006643e6adcf2762c1868007958b5723b9a7a427369->leave($__internal_80cee819c760b45ba1545006643e6adcf2762c1868007958b5723b9a7a427369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
