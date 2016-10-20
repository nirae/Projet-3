<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4e21fab197209714431d51aaf3f1a637c54aeae9a7d839414109f9100c1e955b extends Twig_Template
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
        $__internal_8f6d3ba13b0350bf755929891df0b44ed0d436000590d4a56b4a6b8c5dc05246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6d3ba13b0350bf755929891df0b44ed0d436000590d4a56b4a6b8c5dc05246->enter($__internal_8f6d3ba13b0350bf755929891df0b44ed0d436000590d4a56b4a6b8c5dc05246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8f6d3ba13b0350bf755929891df0b44ed0d436000590d4a56b4a6b8c5dc05246->leave($__internal_8f6d3ba13b0350bf755929891df0b44ed0d436000590d4a56b4a6b8c5dc05246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
