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
        $__internal_3f4742a5f095d250fd8cca35cf6ac851462c64730502b276d13fdcb619f46e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4742a5f095d250fd8cca35cf6ac851462c64730502b276d13fdcb619f46e25->enter($__internal_3f4742a5f095d250fd8cca35cf6ac851462c64730502b276d13fdcb619f46e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_3f4742a5f095d250fd8cca35cf6ac851462c64730502b276d13fdcb619f46e25->leave($__internal_3f4742a5f095d250fd8cca35cf6ac851462c64730502b276d13fdcb619f46e25_prof);

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
