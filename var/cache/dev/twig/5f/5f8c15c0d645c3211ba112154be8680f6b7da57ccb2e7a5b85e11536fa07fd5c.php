<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_53b565f8727e217246e6f55ffe83aca752261504b52d6800c8016033332f0288 extends Twig_Template
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
        $__internal_224486a0dc3b5376c218acb4215f4a7b4c8d12f715c28a3800cf73037d7f36ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224486a0dc3b5376c218acb4215f4a7b4c8d12f715c28a3800cf73037d7f36ee->enter($__internal_224486a0dc3b5376c218acb4215f4a7b4c8d12f715c28a3800cf73037d7f36ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_224486a0dc3b5376c218acb4215f4a7b4c8d12f715c28a3800cf73037d7f36ee->leave($__internal_224486a0dc3b5376c218acb4215f4a7b4c8d12f715c28a3800cf73037d7f36ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
