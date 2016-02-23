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
        $__internal_19bfb5c01b7c3d87842ab2356a25a48ccfcd2be8b5c12c1391aba57f2bf5147d = $this->env->getExtension("native_profiler");
        $__internal_19bfb5c01b7c3d87842ab2356a25a48ccfcd2be8b5c12c1391aba57f2bf5147d->enter($__internal_19bfb5c01b7c3d87842ab2356a25a48ccfcd2be8b5c12c1391aba57f2bf5147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_19bfb5c01b7c3d87842ab2356a25a48ccfcd2be8b5c12c1391aba57f2bf5147d->leave($__internal_19bfb5c01b7c3d87842ab2356a25a48ccfcd2be8b5c12c1391aba57f2bf5147d_prof);

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
