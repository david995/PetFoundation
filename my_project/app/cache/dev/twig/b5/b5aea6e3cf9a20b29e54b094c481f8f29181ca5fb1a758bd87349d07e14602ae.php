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
        $__internal_97dd43f30dfd11403cf7326311e71c8e5080321070b412856a73d0b48066273a = $this->env->getExtension("native_profiler");
        $__internal_97dd43f30dfd11403cf7326311e71c8e5080321070b412856a73d0b48066273a->enter($__internal_97dd43f30dfd11403cf7326311e71c8e5080321070b412856a73d0b48066273a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_97dd43f30dfd11403cf7326311e71c8e5080321070b412856a73d0b48066273a->leave($__internal_97dd43f30dfd11403cf7326311e71c8e5080321070b412856a73d0b48066273a_prof);

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
