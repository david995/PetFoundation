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
        $__internal_f931a4ef01ae79ab0e68a384fd1cf9ffcb44c45366102f9b97953d3e7b1df8dc = $this->env->getExtension("native_profiler");
        $__internal_f931a4ef01ae79ab0e68a384fd1cf9ffcb44c45366102f9b97953d3e7b1df8dc->enter($__internal_f931a4ef01ae79ab0e68a384fd1cf9ffcb44c45366102f9b97953d3e7b1df8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f931a4ef01ae79ab0e68a384fd1cf9ffcb44c45366102f9b97953d3e7b1df8dc->leave($__internal_f931a4ef01ae79ab0e68a384fd1cf9ffcb44c45366102f9b97953d3e7b1df8dc_prof);

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
