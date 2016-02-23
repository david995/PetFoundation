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
        $__internal_2b3a4374787d49b3b2f7d3e48d3b64d378d4c9cfed8055526bb580fbb344c95c = $this->env->getExtension("native_profiler");
        $__internal_2b3a4374787d49b3b2f7d3e48d3b64d378d4c9cfed8055526bb580fbb344c95c->enter($__internal_2b3a4374787d49b3b2f7d3e48d3b64d378d4c9cfed8055526bb580fbb344c95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2b3a4374787d49b3b2f7d3e48d3b64d378d4c9cfed8055526bb580fbb344c95c->leave($__internal_2b3a4374787d49b3b2f7d3e48d3b64d378d4c9cfed8055526bb580fbb344c95c_prof);

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
