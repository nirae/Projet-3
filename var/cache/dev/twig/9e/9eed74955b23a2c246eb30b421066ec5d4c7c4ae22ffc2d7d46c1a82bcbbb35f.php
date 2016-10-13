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
        $__internal_e4531ed75c84daaf64abf4aebe2dfbbbb1581426547b7b94b2084b7490f55573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4531ed75c84daaf64abf4aebe2dfbbbb1581426547b7b94b2084b7490f55573->enter($__internal_e4531ed75c84daaf64abf4aebe2dfbbbb1581426547b7b94b2084b7490f55573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e4531ed75c84daaf64abf4aebe2dfbbbb1581426547b7b94b2084b7490f55573->leave($__internal_e4531ed75c84daaf64abf4aebe2dfbbbb1581426547b7b94b2084b7490f55573_prof);

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
