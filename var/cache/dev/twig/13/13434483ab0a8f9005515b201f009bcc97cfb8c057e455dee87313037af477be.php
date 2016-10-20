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
        $__internal_b81a4092a2e7d84db1ebc90bee48880178159b528e7ecdd0a8999606e4f3ad0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81a4092a2e7d84db1ebc90bee48880178159b528e7ecdd0a8999606e4f3ad0d->enter($__internal_b81a4092a2e7d84db1ebc90bee48880178159b528e7ecdd0a8999606e4f3ad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b81a4092a2e7d84db1ebc90bee48880178159b528e7ecdd0a8999606e4f3ad0d->leave($__internal_b81a4092a2e7d84db1ebc90bee48880178159b528e7ecdd0a8999606e4f3ad0d_prof);

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
