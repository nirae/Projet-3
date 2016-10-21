<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0b6943e185a38a40254212c722417b4496752ccd2e8d7710452aa917fe88332c extends Twig_Template
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
        $__internal_eb9dc130af764f30615fcaa00bbae0ba3de7873b7d64e7032161dd13a3227c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9dc130af764f30615fcaa00bbae0ba3de7873b7d64e7032161dd13a3227c02->enter($__internal_eb9dc130af764f30615fcaa00bbae0ba3de7873b7d64e7032161dd13a3227c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_eb9dc130af764f30615fcaa00bbae0ba3de7873b7d64e7032161dd13a3227c02->leave($__internal_eb9dc130af764f30615fcaa00bbae0ba3de7873b7d64e7032161dd13a3227c02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
