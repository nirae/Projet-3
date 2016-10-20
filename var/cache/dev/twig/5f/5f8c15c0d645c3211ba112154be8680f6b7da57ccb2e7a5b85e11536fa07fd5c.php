<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_53b565f8727e217246e6f55ffe83aca752261504b52d6800c8016033332f0288 extends Twig_Template
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
        $__internal_0ebfb76c7321de0c662c0e10475a016b4d94a8d9281755e2aa0de04ec0cd3a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebfb76c7321de0c662c0e10475a016b4d94a8d9281755e2aa0de04ec0cd3a41->enter($__internal_0ebfb76c7321de0c662c0e10475a016b4d94a8d9281755e2aa0de04ec0cd3a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0ebfb76c7321de0c662c0e10475a016b4d94a8d9281755e2aa0de04ec0cd3a41->leave($__internal_0ebfb76c7321de0c662c0e10475a016b4d94a8d9281755e2aa0de04ec0cd3a41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
