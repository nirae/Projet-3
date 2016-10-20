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
        $__internal_e8c8171c8f9c09f7a7ee0b4c641d7df1769720596d9cd87a6df0221600a6c2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c8171c8f9c09f7a7ee0b4c641d7df1769720596d9cd87a6df0221600a6c2e2->enter($__internal_e8c8171c8f9c09f7a7ee0b4c641d7df1769720596d9cd87a6df0221600a6c2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e8c8171c8f9c09f7a7ee0b4c641d7df1769720596d9cd87a6df0221600a6c2e2->leave($__internal_e8c8171c8f9c09f7a7ee0b4c641d7df1769720596d9cd87a6df0221600a6c2e2_prof);

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
