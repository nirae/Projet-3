<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_bafd52717b2d066a58351bff5b48ebddec934f0f053773b913b6e35b390a40fb extends Twig_Template
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
        $__internal_41f52610990da4cdbd38a5650fc56fcdaf1a55e3241fcf7327a8c0ad86c5e4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f52610990da4cdbd38a5650fc56fcdaf1a55e3241fcf7327a8c0ad86c5e4c4->enter($__internal_41f52610990da4cdbd38a5650fc56fcdaf1a55e3241fcf7327a8c0ad86c5e4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_41f52610990da4cdbd38a5650fc56fcdaf1a55e3241fcf7327a8c0ad86c5e4c4->leave($__internal_41f52610990da4cdbd38a5650fc56fcdaf1a55e3241fcf7327a8c0ad86c5e4c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
