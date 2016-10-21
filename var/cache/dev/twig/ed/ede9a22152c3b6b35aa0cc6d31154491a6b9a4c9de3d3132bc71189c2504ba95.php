<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_59021a3c0d654660c2eec77541bbac7ea2fbbf271688dffdc21673d744abb8fb extends Twig_Template
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
        $__internal_9c5c7197ffa8812caefaf430b88f4a7634be667c55645b2117e7a636bbac7230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5c7197ffa8812caefaf430b88f4a7634be667c55645b2117e7a636bbac7230->enter($__internal_9c5c7197ffa8812caefaf430b88f4a7634be667c55645b2117e7a636bbac7230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9c5c7197ffa8812caefaf430b88f4a7634be667c55645b2117e7a636bbac7230->leave($__internal_9c5c7197ffa8812caefaf430b88f4a7634be667c55645b2117e7a636bbac7230_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
