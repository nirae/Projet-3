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
        $__internal_82ead4ccc816198cd564ecd9c812ffdb56cdcf707139ed554d79d499681fb7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ead4ccc816198cd564ecd9c812ffdb56cdcf707139ed554d79d499681fb7cb->enter($__internal_82ead4ccc816198cd564ecd9c812ffdb56cdcf707139ed554d79d499681fb7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_82ead4ccc816198cd564ecd9c812ffdb56cdcf707139ed554d79d499681fb7cb->leave($__internal_82ead4ccc816198cd564ecd9c812ffdb56cdcf707139ed554d79d499681fb7cb_prof);

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
