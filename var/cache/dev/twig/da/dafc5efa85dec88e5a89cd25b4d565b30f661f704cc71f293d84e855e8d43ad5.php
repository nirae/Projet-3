<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e56f2f5047c875f62a2f163149b6d365dcb68bdcda6777015c9c710c64fd71ef extends Twig_Template
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
        $__internal_73f9a7b540ed96b38af997358ea088a416fb5c4d41d9166db6062ccd69bf82a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f9a7b540ed96b38af997358ea088a416fb5c4d41d9166db6062ccd69bf82a1->enter($__internal_73f9a7b540ed96b38af997358ea088a416fb5c4d41d9166db6062ccd69bf82a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_73f9a7b540ed96b38af997358ea088a416fb5c4d41d9166db6062ccd69bf82a1->leave($__internal_73f9a7b540ed96b38af997358ea088a416fb5c4d41d9166db6062ccd69bf82a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
