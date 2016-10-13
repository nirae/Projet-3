<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_60d5ce08f97466fc238829750b2c0dbda5d0831709c1cdbdd056b4d442e818a4 extends Twig_Template
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
        $__internal_74b6f1632e7d67c8775f9d4da1deb214b58adee143e5e19215f5a25cbc88e645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b6f1632e7d67c8775f9d4da1deb214b58adee143e5e19215f5a25cbc88e645->enter($__internal_74b6f1632e7d67c8775f9d4da1deb214b58adee143e5e19215f5a25cbc88e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_74b6f1632e7d67c8775f9d4da1deb214b58adee143e5e19215f5a25cbc88e645->leave($__internal_74b6f1632e7d67c8775f9d4da1deb214b58adee143e5e19215f5a25cbc88e645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
