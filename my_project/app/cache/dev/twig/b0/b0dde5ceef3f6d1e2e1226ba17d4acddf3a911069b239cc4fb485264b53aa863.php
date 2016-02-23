<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0bc4672530a5af4e99a2685e966308e4aa12f7dc5fb8bcac124e6e7653e169c8 extends Twig_Template
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
        $__internal_9045755c4cf7712952276596edba103899d9239fcd8f58d568d729b7a892cc31 = $this->env->getExtension("native_profiler");
        $__internal_9045755c4cf7712952276596edba103899d9239fcd8f58d568d729b7a892cc31->enter($__internal_9045755c4cf7712952276596edba103899d9239fcd8f58d568d729b7a892cc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9045755c4cf7712952276596edba103899d9239fcd8f58d568d729b7a892cc31->leave($__internal_9045755c4cf7712952276596edba103899d9239fcd8f58d568d729b7a892cc31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
