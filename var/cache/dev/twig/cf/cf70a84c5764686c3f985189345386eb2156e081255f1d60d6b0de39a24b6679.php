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
        $__internal_ec73d0250a2a8b4bf0097955f0b8ecefc9216f0be325c149b16315bcbe4062e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec73d0250a2a8b4bf0097955f0b8ecefc9216f0be325c149b16315bcbe4062e8->enter($__internal_ec73d0250a2a8b4bf0097955f0b8ecefc9216f0be325c149b16315bcbe4062e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ec73d0250a2a8b4bf0097955f0b8ecefc9216f0be325c149b16315bcbe4062e8->leave($__internal_ec73d0250a2a8b4bf0097955f0b8ecefc9216f0be325c149b16315bcbe4062e8_prof);

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
