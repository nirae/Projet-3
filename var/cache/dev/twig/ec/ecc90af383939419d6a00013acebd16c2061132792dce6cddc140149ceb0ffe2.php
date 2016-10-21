<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a4dd8c25ebac8a39da194bde7a58129109498a80221d65774891ad5a373ba767 extends Twig_Template
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
        $__internal_96e43e90f6017dc16eb8f9443992ff4b454c423bfaded86856ea8a98faa6a968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e43e90f6017dc16eb8f9443992ff4b454c423bfaded86856ea8a98faa6a968->enter($__internal_96e43e90f6017dc16eb8f9443992ff4b454c423bfaded86856ea8a98faa6a968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_96e43e90f6017dc16eb8f9443992ff4b454c423bfaded86856ea8a98faa6a968->leave($__internal_96e43e90f6017dc16eb8f9443992ff4b454c423bfaded86856ea8a98faa6a968_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
