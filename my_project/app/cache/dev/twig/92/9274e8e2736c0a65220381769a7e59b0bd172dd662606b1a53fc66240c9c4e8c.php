<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_151fcb7ecb46776c27e7d0dc25607d5b110f867d21ca6006c159601b80288f4f extends Twig_Template
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
        $__internal_f826455a55fdf9fbcdeaaf488e3aa82dcd6f985df901585f412adea89ad53e8d = $this->env->getExtension("native_profiler");
        $__internal_f826455a55fdf9fbcdeaaf488e3aa82dcd6f985df901585f412adea89ad53e8d->enter($__internal_f826455a55fdf9fbcdeaaf488e3aa82dcd6f985df901585f412adea89ad53e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f826455a55fdf9fbcdeaaf488e3aa82dcd6f985df901585f412adea89ad53e8d->leave($__internal_f826455a55fdf9fbcdeaaf488e3aa82dcd6f985df901585f412adea89ad53e8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
