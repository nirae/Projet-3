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
        $__internal_0ef42fec14baeab6be0b708cdba2fcc0d620452d17f676a3aac0f5af14b07555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef42fec14baeab6be0b708cdba2fcc0d620452d17f676a3aac0f5af14b07555->enter($__internal_0ef42fec14baeab6be0b708cdba2fcc0d620452d17f676a3aac0f5af14b07555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0ef42fec14baeab6be0b708cdba2fcc0d620452d17f676a3aac0f5af14b07555->leave($__internal_0ef42fec14baeab6be0b708cdba2fcc0d620452d17f676a3aac0f5af14b07555_prof);

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
