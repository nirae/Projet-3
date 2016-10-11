<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d9905b54092cc00c31b7d3251df91acb7ae374a6dacd88a80e9dcd73f738b5c5 extends Twig_Template
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
        $__internal_f30e1054178154afde62277f2fbb75111a9ae98af739a9990660b8c12c92f417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30e1054178154afde62277f2fbb75111a9ae98af739a9990660b8c12c92f417->enter($__internal_f30e1054178154afde62277f2fbb75111a9ae98af739a9990660b8c12c92f417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f30e1054178154afde62277f2fbb75111a9ae98af739a9990660b8c12c92f417->leave($__internal_f30e1054178154afde62277f2fbb75111a9ae98af739a9990660b8c12c92f417_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
