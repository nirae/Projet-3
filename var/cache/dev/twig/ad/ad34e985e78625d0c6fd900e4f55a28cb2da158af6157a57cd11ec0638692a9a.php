<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_97c0ef47788e1ca8d476d696bfca90610cae5316c8376d21641ec70525bc0e02 extends Twig_Template
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
        $__internal_7e8adf90420d50cd76a86e09d673d83426d0320ea5fdb0c1b86374ced8b24415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8adf90420d50cd76a86e09d673d83426d0320ea5fdb0c1b86374ced8b24415->enter($__internal_7e8adf90420d50cd76a86e09d673d83426d0320ea5fdb0c1b86374ced8b24415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7e8adf90420d50cd76a86e09d673d83426d0320ea5fdb0c1b86374ced8b24415->leave($__internal_7e8adf90420d50cd76a86e09d673d83426d0320ea5fdb0c1b86374ced8b24415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
