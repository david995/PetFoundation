<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_17e3cabb77b8dd7b9dd667d93fc07c878c98aafe81af2ac9dacafce2b5820bc4 extends Twig_Template
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
        $__internal_5c79921b2bf5afb2950cd10665ad612375777781a4ba705d7c73c076b98503fd = $this->env->getExtension("native_profiler");
        $__internal_5c79921b2bf5afb2950cd10665ad612375777781a4ba705d7c73c076b98503fd->enter($__internal_5c79921b2bf5afb2950cd10665ad612375777781a4ba705d7c73c076b98503fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5c79921b2bf5afb2950cd10665ad612375777781a4ba705d7c73c076b98503fd->leave($__internal_5c79921b2bf5afb2950cd10665ad612375777781a4ba705d7c73c076b98503fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
