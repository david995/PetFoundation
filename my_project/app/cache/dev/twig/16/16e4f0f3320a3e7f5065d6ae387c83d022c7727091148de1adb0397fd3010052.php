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
        $__internal_ec5e0fdaa207b1e6d07dfdecfc1bfdc4fb4f41cab5234552cb2befb2173bac92 = $this->env->getExtension("native_profiler");
        $__internal_ec5e0fdaa207b1e6d07dfdecfc1bfdc4fb4f41cab5234552cb2befb2173bac92->enter($__internal_ec5e0fdaa207b1e6d07dfdecfc1bfdc4fb4f41cab5234552cb2befb2173bac92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ec5e0fdaa207b1e6d07dfdecfc1bfdc4fb4f41cab5234552cb2befb2173bac92->leave($__internal_ec5e0fdaa207b1e6d07dfdecfc1bfdc4fb4f41cab5234552cb2befb2173bac92_prof);

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
