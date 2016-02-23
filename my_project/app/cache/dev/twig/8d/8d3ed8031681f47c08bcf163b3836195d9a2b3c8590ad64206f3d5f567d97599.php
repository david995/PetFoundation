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
        $__internal_4c8b14e0b65e13ef136fa990e7bb5dfa7dc0133af82a2e3399a3cf0de7530518 = $this->env->getExtension("native_profiler");
        $__internal_4c8b14e0b65e13ef136fa990e7bb5dfa7dc0133af82a2e3399a3cf0de7530518->enter($__internal_4c8b14e0b65e13ef136fa990e7bb5dfa7dc0133af82a2e3399a3cf0de7530518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4c8b14e0b65e13ef136fa990e7bb5dfa7dc0133af82a2e3399a3cf0de7530518->leave($__internal_4c8b14e0b65e13ef136fa990e7bb5dfa7dc0133af82a2e3399a3cf0de7530518_prof);

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
