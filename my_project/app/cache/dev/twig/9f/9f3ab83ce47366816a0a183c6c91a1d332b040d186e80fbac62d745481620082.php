<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2bb5039191d84ccd75f3036d426811e5b47a8bec042a55cb57411d5191cf372 extends Twig_Template
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
        $__internal_1752fc04550db587f6e3fd7e2273a7fbf2ed15db00b51566ff28c28431848db8 = $this->env->getExtension("native_profiler");
        $__internal_1752fc04550db587f6e3fd7e2273a7fbf2ed15db00b51566ff28c28431848db8->enter($__internal_1752fc04550db587f6e3fd7e2273a7fbf2ed15db00b51566ff28c28431848db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1752fc04550db587f6e3fd7e2273a7fbf2ed15db00b51566ff28c28431848db8->leave($__internal_1752fc04550db587f6e3fd7e2273a7fbf2ed15db00b51566ff28c28431848db8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
