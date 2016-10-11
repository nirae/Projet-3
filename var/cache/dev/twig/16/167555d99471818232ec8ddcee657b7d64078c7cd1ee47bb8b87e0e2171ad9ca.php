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
        $__internal_9794214e6519ba95930e74d58082ee3f9740c0d0ce7f8d7b920b943ce77b1089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9794214e6519ba95930e74d58082ee3f9740c0d0ce7f8d7b920b943ce77b1089->enter($__internal_9794214e6519ba95930e74d58082ee3f9740c0d0ce7f8d7b920b943ce77b1089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9794214e6519ba95930e74d58082ee3f9740c0d0ce7f8d7b920b943ce77b1089->leave($__internal_9794214e6519ba95930e74d58082ee3f9740c0d0ce7f8d7b920b943ce77b1089_prof);

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
