<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_324a9200124d593c5de9dd5c0bb89271263a4f502083ace4f4ae6e51ede16e38 extends Twig_Template
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
        $__internal_53f9016c5e75bd67ff41b300de522e4faf524aa89163b90826b154e6cea71bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f9016c5e75bd67ff41b300de522e4faf524aa89163b90826b154e6cea71bf5->enter($__internal_53f9016c5e75bd67ff41b300de522e4faf524aa89163b90826b154e6cea71bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_53f9016c5e75bd67ff41b300de522e4faf524aa89163b90826b154e6cea71bf5->leave($__internal_53f9016c5e75bd67ff41b300de522e4faf524aa89163b90826b154e6cea71bf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
