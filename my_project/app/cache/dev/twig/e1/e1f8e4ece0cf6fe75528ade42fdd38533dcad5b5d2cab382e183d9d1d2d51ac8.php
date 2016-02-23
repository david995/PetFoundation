<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7657e53da0a4c124109804be82b5ec7d9df94a2ee37fd03d736a3da37757605b extends Twig_Template
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
        $__internal_d66348e0e43e684ad85bdd1d384c5e6af0f7b4de1481a0f102506215dc106d7c = $this->env->getExtension("native_profiler");
        $__internal_d66348e0e43e684ad85bdd1d384c5e6af0f7b4de1481a0f102506215dc106d7c->enter($__internal_d66348e0e43e684ad85bdd1d384c5e6af0f7b4de1481a0f102506215dc106d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d66348e0e43e684ad85bdd1d384c5e6af0f7b4de1481a0f102506215dc106d7c->leave($__internal_d66348e0e43e684ad85bdd1d384c5e6af0f7b4de1481a0f102506215dc106d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
