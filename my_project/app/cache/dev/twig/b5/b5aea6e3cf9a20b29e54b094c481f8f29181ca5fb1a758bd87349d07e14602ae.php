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
        $__internal_798ddcad9ccc6481141ecc54d3ab606b6e8df9f674300c6a6b4da0f254e8b2a4 = $this->env->getExtension("native_profiler");
        $__internal_798ddcad9ccc6481141ecc54d3ab606b6e8df9f674300c6a6b4da0f254e8b2a4->enter($__internal_798ddcad9ccc6481141ecc54d3ab606b6e8df9f674300c6a6b4da0f254e8b2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_798ddcad9ccc6481141ecc54d3ab606b6e8df9f674300c6a6b4da0f254e8b2a4->leave($__internal_798ddcad9ccc6481141ecc54d3ab606b6e8df9f674300c6a6b4da0f254e8b2a4_prof);

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
