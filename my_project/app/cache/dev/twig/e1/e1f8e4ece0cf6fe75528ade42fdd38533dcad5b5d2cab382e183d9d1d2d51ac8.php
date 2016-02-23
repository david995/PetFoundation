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
        $__internal_b1a24046b30f84d167712b6684da695eb5def345f9c682dbd2e9b4c466c1bbd1 = $this->env->getExtension("native_profiler");
        $__internal_b1a24046b30f84d167712b6684da695eb5def345f9c682dbd2e9b4c466c1bbd1->enter($__internal_b1a24046b30f84d167712b6684da695eb5def345f9c682dbd2e9b4c466c1bbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b1a24046b30f84d167712b6684da695eb5def345f9c682dbd2e9b4c466c1bbd1->leave($__internal_b1a24046b30f84d167712b6684da695eb5def345f9c682dbd2e9b4c466c1bbd1_prof);

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
