<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ff8d26a6c706e88c88dd98ac9d8210a4139e9e97cf4a3a61fb3730cbc2463e16 extends Twig_Template
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
        $__internal_c86e717403bcf84d5debfa24bfc6bd70927ed4ae5619e389eee0d069109103a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86e717403bcf84d5debfa24bfc6bd70927ed4ae5619e389eee0d069109103a6->enter($__internal_c86e717403bcf84d5debfa24bfc6bd70927ed4ae5619e389eee0d069109103a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c86e717403bcf84d5debfa24bfc6bd70927ed4ae5619e389eee0d069109103a6->leave($__internal_c86e717403bcf84d5debfa24bfc6bd70927ed4ae5619e389eee0d069109103a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
