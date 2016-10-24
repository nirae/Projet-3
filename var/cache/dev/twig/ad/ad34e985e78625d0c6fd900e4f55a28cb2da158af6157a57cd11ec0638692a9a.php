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
        $__internal_f3f4742224ccd6502ebb8361aa3d8b2538835dca5b0f16b6724cbc8d0eb02edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f4742224ccd6502ebb8361aa3d8b2538835dca5b0f16b6724cbc8d0eb02edf->enter($__internal_f3f4742224ccd6502ebb8361aa3d8b2538835dca5b0f16b6724cbc8d0eb02edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f3f4742224ccd6502ebb8361aa3d8b2538835dca5b0f16b6724cbc8d0eb02edf->leave($__internal_f3f4742224ccd6502ebb8361aa3d8b2538835dca5b0f16b6724cbc8d0eb02edf_prof);

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
