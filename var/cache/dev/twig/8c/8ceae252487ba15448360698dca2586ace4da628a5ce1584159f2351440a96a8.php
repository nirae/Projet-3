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
        $__internal_f07118d5ec4ed14e2dd5031a91c8f1199d7ef9567368b3a42324052bacdcbcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07118d5ec4ed14e2dd5031a91c8f1199d7ef9567368b3a42324052bacdcbcd5->enter($__internal_f07118d5ec4ed14e2dd5031a91c8f1199d7ef9567368b3a42324052bacdcbcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f07118d5ec4ed14e2dd5031a91c8f1199d7ef9567368b3a42324052bacdcbcd5->leave($__internal_f07118d5ec4ed14e2dd5031a91c8f1199d7ef9567368b3a42324052bacdcbcd5_prof);

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
