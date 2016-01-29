<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b5c7d5e1e7c0da1c9752034236759948c7321b8251058aed59e08d559b470031 extends Twig_Template
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
        $__internal_bd211f300048eced1a71414c1f86cc8b196699810ce6b7ba95807308b28a7f18 = $this->env->getExtension("native_profiler");
        $__internal_bd211f300048eced1a71414c1f86cc8b196699810ce6b7ba95807308b28a7f18->enter($__internal_bd211f300048eced1a71414c1f86cc8b196699810ce6b7ba95807308b28a7f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd211f300048eced1a71414c1f86cc8b196699810ce6b7ba95807308b28a7f18->leave($__internal_bd211f300048eced1a71414c1f86cc8b196699810ce6b7ba95807308b28a7f18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
