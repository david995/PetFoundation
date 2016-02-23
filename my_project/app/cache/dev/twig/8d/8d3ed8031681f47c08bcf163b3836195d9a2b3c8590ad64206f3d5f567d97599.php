<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c62a1be908691c779ce8cc0924bf9ad20e642d970c8214ecd56c63ecf98ee4c2 extends Twig_Template
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
        $__internal_c093c0ae083555c9157643ce5f1d4619fbbd4667a4f7bffb77cc64471b49b672 = $this->env->getExtension("native_profiler");
        $__internal_c093c0ae083555c9157643ce5f1d4619fbbd4667a4f7bffb77cc64471b49b672->enter($__internal_c093c0ae083555c9157643ce5f1d4619fbbd4667a4f7bffb77cc64471b49b672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c093c0ae083555c9157643ce5f1d4619fbbd4667a4f7bffb77cc64471b49b672->leave($__internal_c093c0ae083555c9157643ce5f1d4619fbbd4667a4f7bffb77cc64471b49b672_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
