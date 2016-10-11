<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_bf21c039fd5ce2135318961dcb99f6ec1c09066b8cbb35ff22841c141ff0e4d1 extends Twig_Template
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
        $__internal_002d06d6b0cf8c041a563726aab4d9449bef5376f70eca128dc31692a4a9b2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002d06d6b0cf8c041a563726aab4d9449bef5376f70eca128dc31692a4a9b2d8->enter($__internal_002d06d6b0cf8c041a563726aab4d9449bef5376f70eca128dc31692a4a9b2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_002d06d6b0cf8c041a563726aab4d9449bef5376f70eca128dc31692a4a9b2d8->leave($__internal_002d06d6b0cf8c041a563726aab4d9449bef5376f70eca128dc31692a4a9b2d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
