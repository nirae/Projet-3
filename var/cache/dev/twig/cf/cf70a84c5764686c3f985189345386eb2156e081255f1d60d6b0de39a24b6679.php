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
        $__internal_6547b048316dd92b9db7eeb60702c36ce18029b0b7e5ecdafcb1baed7864a419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6547b048316dd92b9db7eeb60702c36ce18029b0b7e5ecdafcb1baed7864a419->enter($__internal_6547b048316dd92b9db7eeb60702c36ce18029b0b7e5ecdafcb1baed7864a419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6547b048316dd92b9db7eeb60702c36ce18029b0b7e5ecdafcb1baed7864a419->leave($__internal_6547b048316dd92b9db7eeb60702c36ce18029b0b7e5ecdafcb1baed7864a419_prof);

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
