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
        $__internal_730c3071c8494dac909363f2def5a0fa05804a66e04587337c33eb3fe3ac854f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730c3071c8494dac909363f2def5a0fa05804a66e04587337c33eb3fe3ac854f->enter($__internal_730c3071c8494dac909363f2def5a0fa05804a66e04587337c33eb3fe3ac854f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_730c3071c8494dac909363f2def5a0fa05804a66e04587337c33eb3fe3ac854f->leave($__internal_730c3071c8494dac909363f2def5a0fa05804a66e04587337c33eb3fe3ac854f_prof);

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
