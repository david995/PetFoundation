<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bb40d981309bb889df135b2264a9fe561f1d02847aee80244e940c8ea0a87f83 extends Twig_Template
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
        $__internal_c1bfb43768e504c481ee34ae9b818ea4ba683fa4c24d625a5bf48a708dcfe55d = $this->env->getExtension("native_profiler");
        $__internal_c1bfb43768e504c481ee34ae9b818ea4ba683fa4c24d625a5bf48a708dcfe55d->enter($__internal_c1bfb43768e504c481ee34ae9b818ea4ba683fa4c24d625a5bf48a708dcfe55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c1bfb43768e504c481ee34ae9b818ea4ba683fa4c24d625a5bf48a708dcfe55d->leave($__internal_c1bfb43768e504c481ee34ae9b818ea4ba683fa4c24d625a5bf48a708dcfe55d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
