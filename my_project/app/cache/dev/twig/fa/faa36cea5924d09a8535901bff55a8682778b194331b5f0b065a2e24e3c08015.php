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
        $__internal_cb925d3d35d094bcde1bb7780a3b9c662c706facc22c5806c485aa1aa0bb4301 = $this->env->getExtension("native_profiler");
        $__internal_cb925d3d35d094bcde1bb7780a3b9c662c706facc22c5806c485aa1aa0bb4301->enter($__internal_cb925d3d35d094bcde1bb7780a3b9c662c706facc22c5806c485aa1aa0bb4301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cb925d3d35d094bcde1bb7780a3b9c662c706facc22c5806c485aa1aa0bb4301->leave($__internal_cb925d3d35d094bcde1bb7780a3b9c662c706facc22c5806c485aa1aa0bb4301_prof);

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
