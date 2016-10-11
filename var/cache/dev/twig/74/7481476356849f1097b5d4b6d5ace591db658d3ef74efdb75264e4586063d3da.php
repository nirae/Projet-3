<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5248f34482d5bd2323a54d34bc7dec73ffad785e465c12ad5863a64dd465fc4f extends Twig_Template
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
        $__internal_dcbab40283559a7553921dd6fde69693526be8e2f331bdaace9676826be569fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbab40283559a7553921dd6fde69693526be8e2f331bdaace9676826be569fb->enter($__internal_dcbab40283559a7553921dd6fde69693526be8e2f331bdaace9676826be569fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dcbab40283559a7553921dd6fde69693526be8e2f331bdaace9676826be569fb->leave($__internal_dcbab40283559a7553921dd6fde69693526be8e2f331bdaace9676826be569fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
