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
        $__internal_b0e28c54bc136366549a2bae78afd2f2db3e756064eee4a09781e1b530418b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e28c54bc136366549a2bae78afd2f2db3e756064eee4a09781e1b530418b6d->enter($__internal_b0e28c54bc136366549a2bae78afd2f2db3e756064eee4a09781e1b530418b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b0e28c54bc136366549a2bae78afd2f2db3e756064eee4a09781e1b530418b6d->leave($__internal_b0e28c54bc136366549a2bae78afd2f2db3e756064eee4a09781e1b530418b6d_prof);

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
