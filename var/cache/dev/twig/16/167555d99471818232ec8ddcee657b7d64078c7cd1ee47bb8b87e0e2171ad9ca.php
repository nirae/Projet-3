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
        $__internal_03b9d54c9301121df0c8a9decb05599cdbf456293aca112b8890e2a480adcb0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b9d54c9301121df0c8a9decb05599cdbf456293aca112b8890e2a480adcb0b->enter($__internal_03b9d54c9301121df0c8a9decb05599cdbf456293aca112b8890e2a480adcb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_03b9d54c9301121df0c8a9decb05599cdbf456293aca112b8890e2a480adcb0b->leave($__internal_03b9d54c9301121df0c8a9decb05599cdbf456293aca112b8890e2a480adcb0b_prof);

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
