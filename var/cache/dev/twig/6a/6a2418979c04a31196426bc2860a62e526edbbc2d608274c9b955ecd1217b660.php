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
        $__internal_ae7a7b5c1fef2e9355659f65b1da687e8020285a5b3eb9fa217cd7415f18bb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7a7b5c1fef2e9355659f65b1da687e8020285a5b3eb9fa217cd7415f18bb62->enter($__internal_ae7a7b5c1fef2e9355659f65b1da687e8020285a5b3eb9fa217cd7415f18bb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ae7a7b5c1fef2e9355659f65b1da687e8020285a5b3eb9fa217cd7415f18bb62->leave($__internal_ae7a7b5c1fef2e9355659f65b1da687e8020285a5b3eb9fa217cd7415f18bb62_prof);

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
