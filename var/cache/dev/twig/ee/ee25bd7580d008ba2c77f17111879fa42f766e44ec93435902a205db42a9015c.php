<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_bf21c039fd5ce2135318961dcb99f6ec1c09066b8cbb35ff22841c141ff0e4d1 extends Twig_Template
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
        $__internal_0776820002445b062fc54e0cafa2321e59595410b1f6576017d910e0d326d6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0776820002445b062fc54e0cafa2321e59595410b1f6576017d910e0d326d6bc->enter($__internal_0776820002445b062fc54e0cafa2321e59595410b1f6576017d910e0d326d6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0776820002445b062fc54e0cafa2321e59595410b1f6576017d910e0d326d6bc->leave($__internal_0776820002445b062fc54e0cafa2321e59595410b1f6576017d910e0d326d6bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
