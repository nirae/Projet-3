<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d9905b54092cc00c31b7d3251df91acb7ae374a6dacd88a80e9dcd73f738b5c5 extends Twig_Template
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
        $__internal_ea50470d98308597cae4a3d43a6ab660f578a486cfe49958f2ed1dad0a7d56be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea50470d98308597cae4a3d43a6ab660f578a486cfe49958f2ed1dad0a7d56be->enter($__internal_ea50470d98308597cae4a3d43a6ab660f578a486cfe49958f2ed1dad0a7d56be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ea50470d98308597cae4a3d43a6ab660f578a486cfe49958f2ed1dad0a7d56be->leave($__internal_ea50470d98308597cae4a3d43a6ab660f578a486cfe49958f2ed1dad0a7d56be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
