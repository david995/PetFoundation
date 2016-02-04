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
        $__internal_458b804bb8b3e051e2a18fc28f595f4732f83374870dbfe933a654faa9d4009c = $this->env->getExtension("native_profiler");
        $__internal_458b804bb8b3e051e2a18fc28f595f4732f83374870dbfe933a654faa9d4009c->enter($__internal_458b804bb8b3e051e2a18fc28f595f4732f83374870dbfe933a654faa9d4009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_458b804bb8b3e051e2a18fc28f595f4732f83374870dbfe933a654faa9d4009c->leave($__internal_458b804bb8b3e051e2a18fc28f595f4732f83374870dbfe933a654faa9d4009c_prof);

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
