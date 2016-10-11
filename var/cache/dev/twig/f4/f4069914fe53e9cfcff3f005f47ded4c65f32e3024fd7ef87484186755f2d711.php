<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0bf5448825f160f3153dfa21742f646d82b86b1b9c98fc970ecc3a3940110512 extends Twig_Template
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
        $__internal_d235bddc45a645301f3d431695cbcc512e414bfdc91791813948943c20ffe0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d235bddc45a645301f3d431695cbcc512e414bfdc91791813948943c20ffe0f0->enter($__internal_d235bddc45a645301f3d431695cbcc512e414bfdc91791813948943c20ffe0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d235bddc45a645301f3d431695cbcc512e414bfdc91791813948943c20ffe0f0->leave($__internal_d235bddc45a645301f3d431695cbcc512e414bfdc91791813948943c20ffe0f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
