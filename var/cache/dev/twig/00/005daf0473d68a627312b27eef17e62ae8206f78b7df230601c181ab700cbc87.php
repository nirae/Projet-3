<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d995bfb9de52dbca1d9a33c32c4819a09cebc39aa538c15157a8ce33dd23e66c extends Twig_Template
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
        $__internal_1709f72b7664e44612b5d6623b53d03d6c24d1508d4c3899bcff69350297e22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1709f72b7664e44612b5d6623b53d03d6c24d1508d4c3899bcff69350297e22c->enter($__internal_1709f72b7664e44612b5d6623b53d03d6c24d1508d4c3899bcff69350297e22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1709f72b7664e44612b5d6623b53d03d6c24d1508d4c3899bcff69350297e22c->leave($__internal_1709f72b7664e44612b5d6623b53d03d6c24d1508d4c3899bcff69350297e22c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
