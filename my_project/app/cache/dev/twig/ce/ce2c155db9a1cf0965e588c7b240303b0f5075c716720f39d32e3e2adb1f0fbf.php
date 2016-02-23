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
        $__internal_783fe0533ef9db459d67ef489e4cac739026a1ae4fbcae82dec3d347681d3048 = $this->env->getExtension("native_profiler");
        $__internal_783fe0533ef9db459d67ef489e4cac739026a1ae4fbcae82dec3d347681d3048->enter($__internal_783fe0533ef9db459d67ef489e4cac739026a1ae4fbcae82dec3d347681d3048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_783fe0533ef9db459d67ef489e4cac739026a1ae4fbcae82dec3d347681d3048->leave($__internal_783fe0533ef9db459d67ef489e4cac739026a1ae4fbcae82dec3d347681d3048_prof);

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
