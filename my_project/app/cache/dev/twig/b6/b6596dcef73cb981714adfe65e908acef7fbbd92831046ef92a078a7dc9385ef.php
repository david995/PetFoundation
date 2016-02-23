<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b1a5637f01aa9d1eb903f8adb095ed7edc1613ad97830ef6fbd0cc9221958c58 extends Twig_Template
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
        $__internal_c5233bbf61f6df0558ea8ed23d89d9a910537df2896958e9d107b96914900ccc = $this->env->getExtension("native_profiler");
        $__internal_c5233bbf61f6df0558ea8ed23d89d9a910537df2896958e9d107b96914900ccc->enter($__internal_c5233bbf61f6df0558ea8ed23d89d9a910537df2896958e9d107b96914900ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c5233bbf61f6df0558ea8ed23d89d9a910537df2896958e9d107b96914900ccc->leave($__internal_c5233bbf61f6df0558ea8ed23d89d9a910537df2896958e9d107b96914900ccc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
