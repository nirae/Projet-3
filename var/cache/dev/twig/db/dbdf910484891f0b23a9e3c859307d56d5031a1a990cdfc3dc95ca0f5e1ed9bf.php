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
        $__internal_2877e41b08c0fb404bd1daf5c3efd92dc2656c4ad86044db922c78c4c6d5b4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2877e41b08c0fb404bd1daf5c3efd92dc2656c4ad86044db922c78c4c6d5b4f4->enter($__internal_2877e41b08c0fb404bd1daf5c3efd92dc2656c4ad86044db922c78c4c6d5b4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2877e41b08c0fb404bd1daf5c3efd92dc2656c4ad86044db922c78c4c6d5b4f4->leave($__internal_2877e41b08c0fb404bd1daf5c3efd92dc2656c4ad86044db922c78c4c6d5b4f4_prof);

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
