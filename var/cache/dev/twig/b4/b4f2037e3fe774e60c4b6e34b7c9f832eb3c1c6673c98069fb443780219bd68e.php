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
        $__internal_864815d04b473ddec42c82a9d9ed91a45890181add185cb3c55b823f823825ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864815d04b473ddec42c82a9d9ed91a45890181add185cb3c55b823f823825ff->enter($__internal_864815d04b473ddec42c82a9d9ed91a45890181add185cb3c55b823f823825ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_864815d04b473ddec42c82a9d9ed91a45890181add185cb3c55b823f823825ff->leave($__internal_864815d04b473ddec42c82a9d9ed91a45890181add185cb3c55b823f823825ff_prof);

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
