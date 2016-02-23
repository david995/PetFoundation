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
        $__internal_3fe9e2735b43e4122481aa246867e9385bce5f329f4a5426b04138e6491b76c4 = $this->env->getExtension("native_profiler");
        $__internal_3fe9e2735b43e4122481aa246867e9385bce5f329f4a5426b04138e6491b76c4->enter($__internal_3fe9e2735b43e4122481aa246867e9385bce5f329f4a5426b04138e6491b76c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3fe9e2735b43e4122481aa246867e9385bce5f329f4a5426b04138e6491b76c4->leave($__internal_3fe9e2735b43e4122481aa246867e9385bce5f329f4a5426b04138e6491b76c4_prof);

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
