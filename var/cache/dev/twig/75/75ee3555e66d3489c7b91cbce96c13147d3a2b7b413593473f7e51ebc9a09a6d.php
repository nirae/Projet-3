<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_15eaebab8922f4570ef2a461c04c76ab232bc0fbf9d4e3c4e7a1d3f68b33c425 extends Twig_Template
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
        $__internal_a76147366f493ef5fba6014afc0e4dad8010199fb3d8c9d2f7373cdd1c69fcc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76147366f493ef5fba6014afc0e4dad8010199fb3d8c9d2f7373cdd1c69fcc1->enter($__internal_a76147366f493ef5fba6014afc0e4dad8010199fb3d8c9d2f7373cdd1c69fcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a76147366f493ef5fba6014afc0e4dad8010199fb3d8c9d2f7373cdd1c69fcc1->leave($__internal_a76147366f493ef5fba6014afc0e4dad8010199fb3d8c9d2f7373cdd1c69fcc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
