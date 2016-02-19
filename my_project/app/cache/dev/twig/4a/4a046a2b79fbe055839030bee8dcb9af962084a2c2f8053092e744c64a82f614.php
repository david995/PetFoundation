<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_be518afa0843eb2039ef547d36d788b01889fd7e58031e15df04888f154b5847 extends Twig_Template
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
        $__internal_95df4eb8ade3d49e220382207496ad8d50a75402c7148da58eda6158acd4a965 = $this->env->getExtension("native_profiler");
        $__internal_95df4eb8ade3d49e220382207496ad8d50a75402c7148da58eda6158acd4a965->enter($__internal_95df4eb8ade3d49e220382207496ad8d50a75402c7148da58eda6158acd4a965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_95df4eb8ade3d49e220382207496ad8d50a75402c7148da58eda6158acd4a965->leave($__internal_95df4eb8ade3d49e220382207496ad8d50a75402c7148da58eda6158acd4a965_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
