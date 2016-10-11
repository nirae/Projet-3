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
        $__internal_dd876a55bf90c685c246a5bbd2fa82b21e86109df22a0cffe52ed043fa476881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd876a55bf90c685c246a5bbd2fa82b21e86109df22a0cffe52ed043fa476881->enter($__internal_dd876a55bf90c685c246a5bbd2fa82b21e86109df22a0cffe52ed043fa476881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dd876a55bf90c685c246a5bbd2fa82b21e86109df22a0cffe52ed043fa476881->leave($__internal_dd876a55bf90c685c246a5bbd2fa82b21e86109df22a0cffe52ed043fa476881_prof);

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
