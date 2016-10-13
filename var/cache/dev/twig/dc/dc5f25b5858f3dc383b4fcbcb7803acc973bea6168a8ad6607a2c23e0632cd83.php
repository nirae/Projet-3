<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d9905b54092cc00c31b7d3251df91acb7ae374a6dacd88a80e9dcd73f738b5c5 extends Twig_Template
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
        $__internal_7707d6a2761b7b216ccb03ae649322f8fdd34250746c3755261680f11aa9d655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7707d6a2761b7b216ccb03ae649322f8fdd34250746c3755261680f11aa9d655->enter($__internal_7707d6a2761b7b216ccb03ae649322f8fdd34250746c3755261680f11aa9d655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7707d6a2761b7b216ccb03ae649322f8fdd34250746c3755261680f11aa9d655->leave($__internal_7707d6a2761b7b216ccb03ae649322f8fdd34250746c3755261680f11aa9d655_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
