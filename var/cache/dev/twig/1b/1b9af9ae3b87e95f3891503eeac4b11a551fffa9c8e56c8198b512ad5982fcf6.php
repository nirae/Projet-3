<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4e21fab197209714431d51aaf3f1a637c54aeae9a7d839414109f9100c1e955b extends Twig_Template
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
        $__internal_87b5d7c7da9a472a74d700e4ac0b27d17d206da2d60d77fbb08204fcc3372d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b5d7c7da9a472a74d700e4ac0b27d17d206da2d60d77fbb08204fcc3372d8a->enter($__internal_87b5d7c7da9a472a74d700e4ac0b27d17d206da2d60d77fbb08204fcc3372d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_87b5d7c7da9a472a74d700e4ac0b27d17d206da2d60d77fbb08204fcc3372d8a->leave($__internal_87b5d7c7da9a472a74d700e4ac0b27d17d206da2d60d77fbb08204fcc3372d8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
