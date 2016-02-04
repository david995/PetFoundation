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
        $__internal_327b7e37196667187a3a0cf612bde6082dfc7b6f63d5aacf94209f8c1f6858c4 = $this->env->getExtension("native_profiler");
        $__internal_327b7e37196667187a3a0cf612bde6082dfc7b6f63d5aacf94209f8c1f6858c4->enter($__internal_327b7e37196667187a3a0cf612bde6082dfc7b6f63d5aacf94209f8c1f6858c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_327b7e37196667187a3a0cf612bde6082dfc7b6f63d5aacf94209f8c1f6858c4->leave($__internal_327b7e37196667187a3a0cf612bde6082dfc7b6f63d5aacf94209f8c1f6858c4_prof);

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
