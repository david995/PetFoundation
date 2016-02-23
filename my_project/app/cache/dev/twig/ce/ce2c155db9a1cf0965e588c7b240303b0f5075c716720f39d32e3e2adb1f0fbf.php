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
        $__internal_a649cbda334ed8289662dfea8039a140a53fa28121d239a5b94467ec1149830b = $this->env->getExtension("native_profiler");
        $__internal_a649cbda334ed8289662dfea8039a140a53fa28121d239a5b94467ec1149830b->enter($__internal_a649cbda334ed8289662dfea8039a140a53fa28121d239a5b94467ec1149830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a649cbda334ed8289662dfea8039a140a53fa28121d239a5b94467ec1149830b->leave($__internal_a649cbda334ed8289662dfea8039a140a53fa28121d239a5b94467ec1149830b_prof);

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
