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
        $__internal_031bd0e8db6e646d29cba822c7f711aede4d7f607c32c3c52b00f44821177fa5 = $this->env->getExtension("native_profiler");
        $__internal_031bd0e8db6e646d29cba822c7f711aede4d7f607c32c3c52b00f44821177fa5->enter($__internal_031bd0e8db6e646d29cba822c7f711aede4d7f607c32c3c52b00f44821177fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_031bd0e8db6e646d29cba822c7f711aede4d7f607c32c3c52b00f44821177fa5->leave($__internal_031bd0e8db6e646d29cba822c7f711aede4d7f607c32c3c52b00f44821177fa5_prof);

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
