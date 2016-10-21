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
        $__internal_2708244d730d961786d24217c6ea04c3d32d1ae565ff2da1a7455a20b63e45e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2708244d730d961786d24217c6ea04c3d32d1ae565ff2da1a7455a20b63e45e0->enter($__internal_2708244d730d961786d24217c6ea04c3d32d1ae565ff2da1a7455a20b63e45e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2708244d730d961786d24217c6ea04c3d32d1ae565ff2da1a7455a20b63e45e0->leave($__internal_2708244d730d961786d24217c6ea04c3d32d1ae565ff2da1a7455a20b63e45e0_prof);

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
