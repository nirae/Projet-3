<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d2ea120b043937ba5bf8f800d1fc316ac52cdb8d26cfc810fa5a539d16b2272c extends Twig_Template
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
        $__internal_5241a4d81efb08f5bb08a72cbb9f963be5fb9a43912ed78584e2ce3437c562df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5241a4d81efb08f5bb08a72cbb9f963be5fb9a43912ed78584e2ce3437c562df->enter($__internal_5241a4d81efb08f5bb08a72cbb9f963be5fb9a43912ed78584e2ce3437c562df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5241a4d81efb08f5bb08a72cbb9f963be5fb9a43912ed78584e2ce3437c562df->leave($__internal_5241a4d81efb08f5bb08a72cbb9f963be5fb9a43912ed78584e2ce3437c562df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->widget(\$form) ?>
";
    }
}
