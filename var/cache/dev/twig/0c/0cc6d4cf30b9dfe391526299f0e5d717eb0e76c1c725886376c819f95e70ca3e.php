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
        $__internal_e4c249b797c16d11c0bf9efdf2b6dba093fa87ef7408aa1fe78443640ebdef9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c249b797c16d11c0bf9efdf2b6dba093fa87ef7408aa1fe78443640ebdef9d->enter($__internal_e4c249b797c16d11c0bf9efdf2b6dba093fa87ef7408aa1fe78443640ebdef9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e4c249b797c16d11c0bf9efdf2b6dba093fa87ef7408aa1fe78443640ebdef9d->leave($__internal_e4c249b797c16d11c0bf9efdf2b6dba093fa87ef7408aa1fe78443640ebdef9d_prof);

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
