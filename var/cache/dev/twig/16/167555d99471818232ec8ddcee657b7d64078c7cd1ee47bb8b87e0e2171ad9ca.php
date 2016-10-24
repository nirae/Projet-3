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
        $__internal_51a444c2c0e24c0c47f60ba3aa88db74f43dbc61b310ccfb0e51d1ec3908bed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a444c2c0e24c0c47f60ba3aa88db74f43dbc61b310ccfb0e51d1ec3908bed4->enter($__internal_51a444c2c0e24c0c47f60ba3aa88db74f43dbc61b310ccfb0e51d1ec3908bed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_51a444c2c0e24c0c47f60ba3aa88db74f43dbc61b310ccfb0e51d1ec3908bed4->leave($__internal_51a444c2c0e24c0c47f60ba3aa88db74f43dbc61b310ccfb0e51d1ec3908bed4_prof);

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
