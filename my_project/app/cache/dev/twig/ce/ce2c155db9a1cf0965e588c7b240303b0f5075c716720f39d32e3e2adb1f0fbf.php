<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f4172796acab4438deef1aab86b889792eb43b5e75aed2ebc55855e684a4fb89 extends Twig_Template
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
        $__internal_bde3d2c9da2c6a2ca8af2aae756649acc5ce64cba73b88734e3567c8e89931db = $this->env->getExtension("native_profiler");
        $__internal_bde3d2c9da2c6a2ca8af2aae756649acc5ce64cba73b88734e3567c8e89931db->enter($__internal_bde3d2c9da2c6a2ca8af2aae756649acc5ce64cba73b88734e3567c8e89931db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bde3d2c9da2c6a2ca8af2aae756649acc5ce64cba73b88734e3567c8e89931db->leave($__internal_bde3d2c9da2c6a2ca8af2aae756649acc5ce64cba73b88734e3567c8e89931db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
