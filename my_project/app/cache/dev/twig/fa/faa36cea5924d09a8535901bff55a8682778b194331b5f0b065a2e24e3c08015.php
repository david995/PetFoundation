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
        $__internal_613ceb8f286beeb50e98e329cdcc505ae9a9e28c97b2f180cd61d485eb3e94b6 = $this->env->getExtension("native_profiler");
        $__internal_613ceb8f286beeb50e98e329cdcc505ae9a9e28c97b2f180cd61d485eb3e94b6->enter($__internal_613ceb8f286beeb50e98e329cdcc505ae9a9e28c97b2f180cd61d485eb3e94b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_613ceb8f286beeb50e98e329cdcc505ae9a9e28c97b2f180cd61d485eb3e94b6->leave($__internal_613ceb8f286beeb50e98e329cdcc505ae9a9e28c97b2f180cd61d485eb3e94b6_prof);

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
