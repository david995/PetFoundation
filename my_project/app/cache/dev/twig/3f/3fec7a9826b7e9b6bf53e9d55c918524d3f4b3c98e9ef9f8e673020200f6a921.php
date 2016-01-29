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
        $__internal_ffe57f6199e88d18b92e8d1716a447094a7e20dbeb566039148f14740432f9fb = $this->env->getExtension("native_profiler");
        $__internal_ffe57f6199e88d18b92e8d1716a447094a7e20dbeb566039148f14740432f9fb->enter($__internal_ffe57f6199e88d18b92e8d1716a447094a7e20dbeb566039148f14740432f9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ffe57f6199e88d18b92e8d1716a447094a7e20dbeb566039148f14740432f9fb->leave($__internal_ffe57f6199e88d18b92e8d1716a447094a7e20dbeb566039148f14740432f9fb_prof);

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
