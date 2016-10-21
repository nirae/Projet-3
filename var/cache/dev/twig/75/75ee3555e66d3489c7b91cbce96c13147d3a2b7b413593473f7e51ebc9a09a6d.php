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
        $__internal_7bdead21d527b5308bffa00351382c2775befeed4a48b3fbdad0ef2b3dc0664f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bdead21d527b5308bffa00351382c2775befeed4a48b3fbdad0ef2b3dc0664f->enter($__internal_7bdead21d527b5308bffa00351382c2775befeed4a48b3fbdad0ef2b3dc0664f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7bdead21d527b5308bffa00351382c2775befeed4a48b3fbdad0ef2b3dc0664f->leave($__internal_7bdead21d527b5308bffa00351382c2775befeed4a48b3fbdad0ef2b3dc0664f_prof);

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
