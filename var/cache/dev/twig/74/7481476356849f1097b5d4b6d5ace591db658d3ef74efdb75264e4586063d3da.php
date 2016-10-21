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
        $__internal_166d0689b1d4ea4258e6ca055bbe571c7cf0df6f6477f34320c690c843ff7328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166d0689b1d4ea4258e6ca055bbe571c7cf0df6f6477f34320c690c843ff7328->enter($__internal_166d0689b1d4ea4258e6ca055bbe571c7cf0df6f6477f34320c690c843ff7328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_166d0689b1d4ea4258e6ca055bbe571c7cf0df6f6477f34320c690c843ff7328->leave($__internal_166d0689b1d4ea4258e6ca055bbe571c7cf0df6f6477f34320c690c843ff7328_prof);

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
