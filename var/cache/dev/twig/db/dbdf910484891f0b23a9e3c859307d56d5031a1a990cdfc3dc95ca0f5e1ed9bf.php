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
        $__internal_f7531c6ed4a2006cb9f4a76571f3e750eb40eab5857b069fea835a99f95af71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7531c6ed4a2006cb9f4a76571f3e750eb40eab5857b069fea835a99f95af71f->enter($__internal_f7531c6ed4a2006cb9f4a76571f3e750eb40eab5857b069fea835a99f95af71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f7531c6ed4a2006cb9f4a76571f3e750eb40eab5857b069fea835a99f95af71f->leave($__internal_f7531c6ed4a2006cb9f4a76571f3e750eb40eab5857b069fea835a99f95af71f_prof);

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
