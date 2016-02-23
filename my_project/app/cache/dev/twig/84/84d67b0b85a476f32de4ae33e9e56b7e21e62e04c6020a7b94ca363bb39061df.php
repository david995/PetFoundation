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
        $__internal_b16c94812fc1571840a4d1fe42f0ce3cb44fa8887b3b93260ab88f7f78bb3f0f = $this->env->getExtension("native_profiler");
        $__internal_b16c94812fc1571840a4d1fe42f0ce3cb44fa8887b3b93260ab88f7f78bb3f0f->enter($__internal_b16c94812fc1571840a4d1fe42f0ce3cb44fa8887b3b93260ab88f7f78bb3f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b16c94812fc1571840a4d1fe42f0ce3cb44fa8887b3b93260ab88f7f78bb3f0f->leave($__internal_b16c94812fc1571840a4d1fe42f0ce3cb44fa8887b3b93260ab88f7f78bb3f0f_prof);

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
