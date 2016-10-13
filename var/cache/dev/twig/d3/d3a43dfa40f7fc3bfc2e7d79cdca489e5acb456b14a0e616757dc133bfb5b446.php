<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b85def830bcb77f5a3a3f436c206f22ab061ce785f5ae7244d0bdbcf665e9336 extends Twig_Template
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
        $__internal_8792fa955906d836d9a327f0d8ba53fec818ec12ca45514bdee8e0ac488eb4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8792fa955906d836d9a327f0d8ba53fec818ec12ca45514bdee8e0ac488eb4e6->enter($__internal_8792fa955906d836d9a327f0d8ba53fec818ec12ca45514bdee8e0ac488eb4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8792fa955906d836d9a327f0d8ba53fec818ec12ca45514bdee8e0ac488eb4e6->leave($__internal_8792fa955906d836d9a327f0d8ba53fec818ec12ca45514bdee8e0ac488eb4e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
