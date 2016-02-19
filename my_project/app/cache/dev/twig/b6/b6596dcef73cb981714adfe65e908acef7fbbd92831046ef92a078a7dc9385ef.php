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
        $__internal_3e93395e5afeb29c2973b92924579cd4b77566d4fd75b0c033fb7c0bb274c7e1 = $this->env->getExtension("native_profiler");
        $__internal_3e93395e5afeb29c2973b92924579cd4b77566d4fd75b0c033fb7c0bb274c7e1->enter($__internal_3e93395e5afeb29c2973b92924579cd4b77566d4fd75b0c033fb7c0bb274c7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3e93395e5afeb29c2973b92924579cd4b77566d4fd75b0c033fb7c0bb274c7e1->leave($__internal_3e93395e5afeb29c2973b92924579cd4b77566d4fd75b0c033fb7c0bb274c7e1_prof);

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
