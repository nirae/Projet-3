<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7466e4509848fa925b29fc802385ce80b6235063a6e6263fb4d95fc29d0d0538 extends Twig_Template
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
        $__internal_b1961b455c25a054c23821a6fd9db01a4052b22df3495a67842654c327b17629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1961b455c25a054c23821a6fd9db01a4052b22df3495a67842654c327b17629->enter($__internal_b1961b455c25a054c23821a6fd9db01a4052b22df3495a67842654c327b17629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b1961b455c25a054c23821a6fd9db01a4052b22df3495a67842654c327b17629->leave($__internal_b1961b455c25a054c23821a6fd9db01a4052b22df3495a67842654c327b17629_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
