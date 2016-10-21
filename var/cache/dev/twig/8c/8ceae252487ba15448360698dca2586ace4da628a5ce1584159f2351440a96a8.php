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
        $__internal_850106f58e7ab7b7663ebf54d013150f42cca3022d1155a4bbb0387b0503c9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850106f58e7ab7b7663ebf54d013150f42cca3022d1155a4bbb0387b0503c9ad->enter($__internal_850106f58e7ab7b7663ebf54d013150f42cca3022d1155a4bbb0387b0503c9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_850106f58e7ab7b7663ebf54d013150f42cca3022d1155a4bbb0387b0503c9ad->leave($__internal_850106f58e7ab7b7663ebf54d013150f42cca3022d1155a4bbb0387b0503c9ad_prof);

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
