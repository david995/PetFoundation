<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_215f1899ec46429529e50ff2d31fd630561a13ee9b89013a178ae20b56106f57 extends Twig_Template
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
        $__internal_9661c210483785c8f8b70f4b2abfc2bdfa4b738e2c1231ce216a2e2e5d43f9f5 = $this->env->getExtension("native_profiler");
        $__internal_9661c210483785c8f8b70f4b2abfc2bdfa4b738e2c1231ce216a2e2e5d43f9f5->enter($__internal_9661c210483785c8f8b70f4b2abfc2bdfa4b738e2c1231ce216a2e2e5d43f9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9661c210483785c8f8b70f4b2abfc2bdfa4b738e2c1231ce216a2e2e5d43f9f5->leave($__internal_9661c210483785c8f8b70f4b2abfc2bdfa4b738e2c1231ce216a2e2e5d43f9f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
