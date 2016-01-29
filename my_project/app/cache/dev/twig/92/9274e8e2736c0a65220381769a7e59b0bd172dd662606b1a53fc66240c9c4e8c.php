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
        $__internal_b85331826129b4281ecd822fbffa6fb902338fff9223e3bdbecc64678e16df03 = $this->env->getExtension("native_profiler");
        $__internal_b85331826129b4281ecd822fbffa6fb902338fff9223e3bdbecc64678e16df03->enter($__internal_b85331826129b4281ecd822fbffa6fb902338fff9223e3bdbecc64678e16df03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b85331826129b4281ecd822fbffa6fb902338fff9223e3bdbecc64678e16df03->leave($__internal_b85331826129b4281ecd822fbffa6fb902338fff9223e3bdbecc64678e16df03_prof);

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
