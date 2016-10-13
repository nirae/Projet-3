<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_26e74884a403f39f8acc8a99f42fea47ad5d752cf954db241ba30a2716e7418c extends Twig_Template
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
        $__internal_0d26283eaa8f9733f46771c9006c8ec4d56ac53a6ae36b08157501856893b884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d26283eaa8f9733f46771c9006c8ec4d56ac53a6ae36b08157501856893b884->enter($__internal_0d26283eaa8f9733f46771c9006c8ec4d56ac53a6ae36b08157501856893b884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0d26283eaa8f9733f46771c9006c8ec4d56ac53a6ae36b08157501856893b884->leave($__internal_0d26283eaa8f9733f46771c9006c8ec4d56ac53a6ae36b08157501856893b884_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
