<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_620e97bb4fc072efb817d83ff5d6df57def7d57dd492d0b9834caeb3edb637e1 extends Twig_Template
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
        $__internal_97817057a152a3ed7c8df9e2c7abd7644a0026c08a483e020c20ae98e9a4970b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97817057a152a3ed7c8df9e2c7abd7644a0026c08a483e020c20ae98e9a4970b->enter($__internal_97817057a152a3ed7c8df9e2c7abd7644a0026c08a483e020c20ae98e9a4970b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_97817057a152a3ed7c8df9e2c7abd7644a0026c08a483e020c20ae98e9a4970b->leave($__internal_97817057a152a3ed7c8df9e2c7abd7644a0026c08a483e020c20ae98e9a4970b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
