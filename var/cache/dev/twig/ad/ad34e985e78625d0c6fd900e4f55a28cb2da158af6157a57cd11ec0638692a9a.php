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
        $__internal_6f13b4c0cd62ae5fc972fa2826724d542a3628e43877b64627a23d65a155a91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f13b4c0cd62ae5fc972fa2826724d542a3628e43877b64627a23d65a155a91a->enter($__internal_6f13b4c0cd62ae5fc972fa2826724d542a3628e43877b64627a23d65a155a91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6f13b4c0cd62ae5fc972fa2826724d542a3628e43877b64627a23d65a155a91a->leave($__internal_6f13b4c0cd62ae5fc972fa2826724d542a3628e43877b64627a23d65a155a91a_prof);

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
