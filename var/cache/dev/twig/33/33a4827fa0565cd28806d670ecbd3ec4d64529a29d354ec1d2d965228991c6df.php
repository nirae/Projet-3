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
        $__internal_5c7a41a4fb29b8e49e74bd64952a6144da6349d4535738ae661f43065e016128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7a41a4fb29b8e49e74bd64952a6144da6349d4535738ae661f43065e016128->enter($__internal_5c7a41a4fb29b8e49e74bd64952a6144da6349d4535738ae661f43065e016128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5c7a41a4fb29b8e49e74bd64952a6144da6349d4535738ae661f43065e016128->leave($__internal_5c7a41a4fb29b8e49e74bd64952a6144da6349d4535738ae661f43065e016128_prof);

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
