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
        $__internal_fec53703c7c66a881458e2051ea9fb515e1606f1bdd6080aa39f73d201392166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec53703c7c66a881458e2051ea9fb515e1606f1bdd6080aa39f73d201392166->enter($__internal_fec53703c7c66a881458e2051ea9fb515e1606f1bdd6080aa39f73d201392166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fec53703c7c66a881458e2051ea9fb515e1606f1bdd6080aa39f73d201392166->leave($__internal_fec53703c7c66a881458e2051ea9fb515e1606f1bdd6080aa39f73d201392166_prof);

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
