<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0d4b6c881af198c2007a6977aaa1014b0da79d88a2787cc25780b5bc3db7eadc extends Twig_Template
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
        $__internal_d7ad62da2ead0748cbaeef10807e2bbdd0bb6b32a739d49799ec0e4f2b1116a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ad62da2ead0748cbaeef10807e2bbdd0bb6b32a739d49799ec0e4f2b1116a8->enter($__internal_d7ad62da2ead0748cbaeef10807e2bbdd0bb6b32a739d49799ec0e4f2b1116a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d7ad62da2ead0748cbaeef10807e2bbdd0bb6b32a739d49799ec0e4f2b1116a8->leave($__internal_d7ad62da2ead0748cbaeef10807e2bbdd0bb6b32a739d49799ec0e4f2b1116a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
