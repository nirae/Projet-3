<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d995bfb9de52dbca1d9a33c32c4819a09cebc39aa538c15157a8ce33dd23e66c extends Twig_Template
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
        $__internal_a78887ab98ac60fdf4c1e87a9ef442372728dac676078ef04bbdd8026eeca07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78887ab98ac60fdf4c1e87a9ef442372728dac676078ef04bbdd8026eeca07e->enter($__internal_a78887ab98ac60fdf4c1e87a9ef442372728dac676078ef04bbdd8026eeca07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a78887ab98ac60fdf4c1e87a9ef442372728dac676078ef04bbdd8026eeca07e->leave($__internal_a78887ab98ac60fdf4c1e87a9ef442372728dac676078ef04bbdd8026eeca07e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
