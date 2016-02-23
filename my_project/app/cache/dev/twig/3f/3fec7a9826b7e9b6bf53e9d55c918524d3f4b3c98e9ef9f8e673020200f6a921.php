<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_24840ac1b85378f8e644b22235fef64cdc18f5337ae05bfdd033af3308400bf1 extends Twig_Template
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
        $__internal_0f4a5ff1448a4e2dc9a0c62c78501dadd983b3fa89555df8342f873d5be48b5b = $this->env->getExtension("native_profiler");
        $__internal_0f4a5ff1448a4e2dc9a0c62c78501dadd983b3fa89555df8342f873d5be48b5b->enter($__internal_0f4a5ff1448a4e2dc9a0c62c78501dadd983b3fa89555df8342f873d5be48b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0f4a5ff1448a4e2dc9a0c62c78501dadd983b3fa89555df8342f873d5be48b5b->leave($__internal_0f4a5ff1448a4e2dc9a0c62c78501dadd983b3fa89555df8342f873d5be48b5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
