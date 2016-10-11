<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_386bb58c89d83892ca021c7f3e8299cf97112335e11ee593c05f4a25279e2751 extends Twig_Template
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
        $__internal_da361c77ea5783f8f43de22210c47b58f77b018ddfb5d6233a68d8b7fe2e443d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da361c77ea5783f8f43de22210c47b58f77b018ddfb5d6233a68d8b7fe2e443d->enter($__internal_da361c77ea5783f8f43de22210c47b58f77b018ddfb5d6233a68d8b7fe2e443d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_da361c77ea5783f8f43de22210c47b58f77b018ddfb5d6233a68d8b7fe2e443d->leave($__internal_da361c77ea5783f8f43de22210c47b58f77b018ddfb5d6233a68d8b7fe2e443d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
