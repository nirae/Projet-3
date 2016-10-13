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
        $__internal_b0b79e64af32ad831eabc2d176bc0ed58c745e07fb1d5163e41479e63705206b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b79e64af32ad831eabc2d176bc0ed58c745e07fb1d5163e41479e63705206b->enter($__internal_b0b79e64af32ad831eabc2d176bc0ed58c745e07fb1d5163e41479e63705206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b0b79e64af32ad831eabc2d176bc0ed58c745e07fb1d5163e41479e63705206b->leave($__internal_b0b79e64af32ad831eabc2d176bc0ed58c745e07fb1d5163e41479e63705206b_prof);

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
