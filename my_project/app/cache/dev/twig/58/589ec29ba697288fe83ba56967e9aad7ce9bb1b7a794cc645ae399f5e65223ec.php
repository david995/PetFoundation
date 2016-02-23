<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cbd8fb8a8e617538ee05e9c95cc1b32801ba0147c5a5383044e77b9d6ce03312 extends Twig_Template
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
        $__internal_ab2a30ffd851a7b79fcde14c609598fa6bd9fc6278db5e2d82dabf7087c08687 = $this->env->getExtension("native_profiler");
        $__internal_ab2a30ffd851a7b79fcde14c609598fa6bd9fc6278db5e2d82dabf7087c08687->enter($__internal_ab2a30ffd851a7b79fcde14c609598fa6bd9fc6278db5e2d82dabf7087c08687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ab2a30ffd851a7b79fcde14c609598fa6bd9fc6278db5e2d82dabf7087c08687->leave($__internal_ab2a30ffd851a7b79fcde14c609598fa6bd9fc6278db5e2d82dabf7087c08687_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
