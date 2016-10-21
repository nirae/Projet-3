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
        $__internal_c8e2f5f5d2ef2006ac3571efa13b1af07d42108b489ca088ca6943ed4d5e3bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e2f5f5d2ef2006ac3571efa13b1af07d42108b489ca088ca6943ed4d5e3bcb->enter($__internal_c8e2f5f5d2ef2006ac3571efa13b1af07d42108b489ca088ca6943ed4d5e3bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c8e2f5f5d2ef2006ac3571efa13b1af07d42108b489ca088ca6943ed4d5e3bcb->leave($__internal_c8e2f5f5d2ef2006ac3571efa13b1af07d42108b489ca088ca6943ed4d5e3bcb_prof);

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
