<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b697c1723d39add0ee20505bf9e195f6402af0ee2c650e8a2f9225cb6a221107 extends Twig_Template
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
        $__internal_237aa3059386283fbef0f5a5f346416ddebca704cb7806eb011e80ff7005d006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237aa3059386283fbef0f5a5f346416ddebca704cb7806eb011e80ff7005d006->enter($__internal_237aa3059386283fbef0f5a5f346416ddebca704cb7806eb011e80ff7005d006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_237aa3059386283fbef0f5a5f346416ddebca704cb7806eb011e80ff7005d006->leave($__internal_237aa3059386283fbef0f5a5f346416ddebca704cb7806eb011e80ff7005d006_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
