<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_629482d372fece4d8ee39dc005653228abe8d51760826313aa1eb65854790bc7 extends Twig_Template
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
        $__internal_9431f49b1d6ee8605f4ee5a078248a24874d793c06df94b8d1a0f1f90f4a6cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9431f49b1d6ee8605f4ee5a078248a24874d793c06df94b8d1a0f1f90f4a6cea->enter($__internal_9431f49b1d6ee8605f4ee5a078248a24874d793c06df94b8d1a0f1f90f4a6cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9431f49b1d6ee8605f4ee5a078248a24874d793c06df94b8d1a0f1f90f4a6cea->leave($__internal_9431f49b1d6ee8605f4ee5a078248a24874d793c06df94b8d1a0f1f90f4a6cea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
