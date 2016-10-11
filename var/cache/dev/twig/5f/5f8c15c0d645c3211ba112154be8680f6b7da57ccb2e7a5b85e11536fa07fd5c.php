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
        $__internal_908d16164f6798d25ee50a67562a8877bd81700d4f68fb95a3002e7a8146f84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908d16164f6798d25ee50a67562a8877bd81700d4f68fb95a3002e7a8146f84e->enter($__internal_908d16164f6798d25ee50a67562a8877bd81700d4f68fb95a3002e7a8146f84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_908d16164f6798d25ee50a67562a8877bd81700d4f68fb95a3002e7a8146f84e->leave($__internal_908d16164f6798d25ee50a67562a8877bd81700d4f68fb95a3002e7a8146f84e_prof);

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
