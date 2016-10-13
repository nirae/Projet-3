<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_dde8305d2ffaaac7166f0500b7782fd7b487bd6224a8881cd6548636f6a6a984 extends Twig_Template
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
        $__internal_932a016e55e58857caca9656a2f3d17b4f26e54529d5466675e90d9dda1d6cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932a016e55e58857caca9656a2f3d17b4f26e54529d5466675e90d9dda1d6cc5->enter($__internal_932a016e55e58857caca9656a2f3d17b4f26e54529d5466675e90d9dda1d6cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_932a016e55e58857caca9656a2f3d17b4f26e54529d5466675e90d9dda1d6cc5->leave($__internal_932a016e55e58857caca9656a2f3d17b4f26e54529d5466675e90d9dda1d6cc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
