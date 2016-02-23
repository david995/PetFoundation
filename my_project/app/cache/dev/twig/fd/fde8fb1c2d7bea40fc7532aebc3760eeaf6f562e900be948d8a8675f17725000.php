<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2e3e52985ce43cbf9bd0db76aa4b86c47af51c7f93003e0d40e746b5821de4bb extends Twig_Template
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
        $__internal_1ee944e240d359b6d68a6d4431a719d69f3151a698a87119d08abc1ecf611537 = $this->env->getExtension("native_profiler");
        $__internal_1ee944e240d359b6d68a6d4431a719d69f3151a698a87119d08abc1ecf611537->enter($__internal_1ee944e240d359b6d68a6d4431a719d69f3151a698a87119d08abc1ecf611537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1ee944e240d359b6d68a6d4431a719d69f3151a698a87119d08abc1ecf611537->leave($__internal_1ee944e240d359b6d68a6d4431a719d69f3151a698a87119d08abc1ecf611537_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
