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
        $__internal_cd82618c2630149a2c2853efb6d6c643d046f14ff869e3bb356a50f392b86a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd82618c2630149a2c2853efb6d6c643d046f14ff869e3bb356a50f392b86a81->enter($__internal_cd82618c2630149a2c2853efb6d6c643d046f14ff869e3bb356a50f392b86a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cd82618c2630149a2c2853efb6d6c643d046f14ff869e3bb356a50f392b86a81->leave($__internal_cd82618c2630149a2c2853efb6d6c643d046f14ff869e3bb356a50f392b86a81_prof);

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
