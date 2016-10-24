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
        $__internal_d0d30c7f86b54c0d566d545b248edaa2309e747b3faa45c92d81c957fff8ce9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d30c7f86b54c0d566d545b248edaa2309e747b3faa45c92d81c957fff8ce9c->enter($__internal_d0d30c7f86b54c0d566d545b248edaa2309e747b3faa45c92d81c957fff8ce9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d0d30c7f86b54c0d566d545b248edaa2309e747b3faa45c92d81c957fff8ce9c->leave($__internal_d0d30c7f86b54c0d566d545b248edaa2309e747b3faa45c92d81c957fff8ce9c_prof);

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
