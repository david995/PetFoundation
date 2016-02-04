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
        $__internal_07b3ca1febea00368ada5ed6cff6f1207fd5de27578838c063c11c86727a8b10 = $this->env->getExtension("native_profiler");
        $__internal_07b3ca1febea00368ada5ed6cff6f1207fd5de27578838c063c11c86727a8b10->enter($__internal_07b3ca1febea00368ada5ed6cff6f1207fd5de27578838c063c11c86727a8b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_07b3ca1febea00368ada5ed6cff6f1207fd5de27578838c063c11c86727a8b10->leave($__internal_07b3ca1febea00368ada5ed6cff6f1207fd5de27578838c063c11c86727a8b10_prof);

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
