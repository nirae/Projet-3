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
        $__internal_e0b075daa0fad5b11307e90de75892cf8389137ea96fc5cc04a6234639d63f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b075daa0fad5b11307e90de75892cf8389137ea96fc5cc04a6234639d63f2a->enter($__internal_e0b075daa0fad5b11307e90de75892cf8389137ea96fc5cc04a6234639d63f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e0b075daa0fad5b11307e90de75892cf8389137ea96fc5cc04a6234639d63f2a->leave($__internal_e0b075daa0fad5b11307e90de75892cf8389137ea96fc5cc04a6234639d63f2a_prof);

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
