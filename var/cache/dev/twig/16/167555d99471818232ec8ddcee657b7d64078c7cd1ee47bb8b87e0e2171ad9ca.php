<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bb5a2197e9e3401ad78e237e5d8f91b3d39999be3fd1bebd259c109c3bb7b193 extends Twig_Template
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
        $__internal_d5b7f2b2798d6edcf200bd7767bba50cefb86692461fa8f01a2775819a98bff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b7f2b2798d6edcf200bd7767bba50cefb86692461fa8f01a2775819a98bff7->enter($__internal_d5b7f2b2798d6edcf200bd7767bba50cefb86692461fa8f01a2775819a98bff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d5b7f2b2798d6edcf200bd7767bba50cefb86692461fa8f01a2775819a98bff7->leave($__internal_d5b7f2b2798d6edcf200bd7767bba50cefb86692461fa8f01a2775819a98bff7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
