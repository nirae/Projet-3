<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_35e70b8e4e385265d6cc22571e7a53e5aff6309f152a2708bd3418df82da69da extends Twig_Template
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
        $__internal_38c4cf7266f00e8d82cfa202d2743fa72a1ae3d47442d51cb1c08341dd5e8b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c4cf7266f00e8d82cfa202d2743fa72a1ae3d47442d51cb1c08341dd5e8b52->enter($__internal_38c4cf7266f00e8d82cfa202d2743fa72a1ae3d47442d51cb1c08341dd5e8b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_38c4cf7266f00e8d82cfa202d2743fa72a1ae3d47442d51cb1c08341dd5e8b52->leave($__internal_38c4cf7266f00e8d82cfa202d2743fa72a1ae3d47442d51cb1c08341dd5e8b52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
