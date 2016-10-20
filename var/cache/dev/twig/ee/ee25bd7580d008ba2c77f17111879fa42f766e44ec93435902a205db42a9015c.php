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
        $__internal_69425cadd6779fb4c3f5c82f0e5f9a30fceb49449843001363c62a211300856a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69425cadd6779fb4c3f5c82f0e5f9a30fceb49449843001363c62a211300856a->enter($__internal_69425cadd6779fb4c3f5c82f0e5f9a30fceb49449843001363c62a211300856a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_69425cadd6779fb4c3f5c82f0e5f9a30fceb49449843001363c62a211300856a->leave($__internal_69425cadd6779fb4c3f5c82f0e5f9a30fceb49449843001363c62a211300856a_prof);

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
