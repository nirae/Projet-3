<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_386bb58c89d83892ca021c7f3e8299cf97112335e11ee593c05f4a25279e2751 extends Twig_Template
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
        $__internal_b264419812708ba2ba67c419a86c1ce4ea7bde8f10111724fe2820c014d39794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b264419812708ba2ba67c419a86c1ce4ea7bde8f10111724fe2820c014d39794->enter($__internal_b264419812708ba2ba67c419a86c1ce4ea7bde8f10111724fe2820c014d39794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b264419812708ba2ba67c419a86c1ce4ea7bde8f10111724fe2820c014d39794->leave($__internal_b264419812708ba2ba67c419a86c1ce4ea7bde8f10111724fe2820c014d39794_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
