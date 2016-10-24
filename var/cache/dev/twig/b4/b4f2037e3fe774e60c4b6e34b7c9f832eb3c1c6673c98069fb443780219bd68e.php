<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_410a87e8f24fdc99a3c4bc0150921d55d371c0a5a08f1ed0aed50b9598af3728 extends Twig_Template
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
        $__internal_7ae0fa957b47ba24af393be5f685dd35411aca2013a6ac2de6e04812d34f4a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae0fa957b47ba24af393be5f685dd35411aca2013a6ac2de6e04812d34f4a99->enter($__internal_7ae0fa957b47ba24af393be5f685dd35411aca2013a6ac2de6e04812d34f4a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7ae0fa957b47ba24af393be5f685dd35411aca2013a6ac2de6e04812d34f4a99->leave($__internal_7ae0fa957b47ba24af393be5f685dd35411aca2013a6ac2de6e04812d34f4a99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
