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
        $__internal_fea9300fa1a013b801fc3e3d2b57a8cfeb3f25988eaedfc3353ca9a98d4c1b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea9300fa1a013b801fc3e3d2b57a8cfeb3f25988eaedfc3353ca9a98d4c1b4f->enter($__internal_fea9300fa1a013b801fc3e3d2b57a8cfeb3f25988eaedfc3353ca9a98d4c1b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fea9300fa1a013b801fc3e3d2b57a8cfeb3f25988eaedfc3353ca9a98d4c1b4f->leave($__internal_fea9300fa1a013b801fc3e3d2b57a8cfeb3f25988eaedfc3353ca9a98d4c1b4f_prof);

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
