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
        $__internal_202abd90651674ad83dae97dd014df394b9732b395e915102a9d24e90d3700f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202abd90651674ad83dae97dd014df394b9732b395e915102a9d24e90d3700f5->enter($__internal_202abd90651674ad83dae97dd014df394b9732b395e915102a9d24e90d3700f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_202abd90651674ad83dae97dd014df394b9732b395e915102a9d24e90d3700f5->leave($__internal_202abd90651674ad83dae97dd014df394b9732b395e915102a9d24e90d3700f5_prof);

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
