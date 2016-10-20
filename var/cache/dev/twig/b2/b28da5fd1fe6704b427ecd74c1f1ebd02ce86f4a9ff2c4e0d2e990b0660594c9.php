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
        $__internal_5e30c2f5d48ad031675ae6cd9813fc7b704c5ff4ad0794a69c0270074ae0d443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e30c2f5d48ad031675ae6cd9813fc7b704c5ff4ad0794a69c0270074ae0d443->enter($__internal_5e30c2f5d48ad031675ae6cd9813fc7b704c5ff4ad0794a69c0270074ae0d443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5e30c2f5d48ad031675ae6cd9813fc7b704c5ff4ad0794a69c0270074ae0d443->leave($__internal_5e30c2f5d48ad031675ae6cd9813fc7b704c5ff4ad0794a69c0270074ae0d443_prof);

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
