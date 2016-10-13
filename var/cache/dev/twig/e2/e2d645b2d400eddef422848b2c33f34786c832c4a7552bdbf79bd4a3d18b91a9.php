<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_35e70b8e4e385265d6cc22571e7a53e5aff6309f152a2708bd3418df82da69da extends Twig_Template
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
        $__internal_344c42cb18ea2f2c55ef147a441754877bbc988446a88ce12c3b22703c1dfdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344c42cb18ea2f2c55ef147a441754877bbc988446a88ce12c3b22703c1dfdaa->enter($__internal_344c42cb18ea2f2c55ef147a441754877bbc988446a88ce12c3b22703c1dfdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_344c42cb18ea2f2c55ef147a441754877bbc988446a88ce12c3b22703c1dfdaa->leave($__internal_344c42cb18ea2f2c55ef147a441754877bbc988446a88ce12c3b22703c1dfdaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
