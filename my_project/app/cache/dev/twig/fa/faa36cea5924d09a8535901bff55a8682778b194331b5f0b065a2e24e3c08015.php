<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6e542450ec85c5b2d30452c9d19b5ee8459235593f376757bed9ef37a003d380 extends Twig_Template
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
        $__internal_a13e18c3d42ff78098cbe79b80eaddbb50f752ee2c5d021e811ba8a4c43e947a = $this->env->getExtension("native_profiler");
        $__internal_a13e18c3d42ff78098cbe79b80eaddbb50f752ee2c5d021e811ba8a4c43e947a->enter($__internal_a13e18c3d42ff78098cbe79b80eaddbb50f752ee2c5d021e811ba8a4c43e947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a13e18c3d42ff78098cbe79b80eaddbb50f752ee2c5d021e811ba8a4c43e947a->leave($__internal_a13e18c3d42ff78098cbe79b80eaddbb50f752ee2c5d021e811ba8a4c43e947a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
