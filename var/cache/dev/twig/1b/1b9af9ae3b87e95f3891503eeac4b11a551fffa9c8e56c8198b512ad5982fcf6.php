<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4e21fab197209714431d51aaf3f1a637c54aeae9a7d839414109f9100c1e955b extends Twig_Template
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
        $__internal_76916c94d0c9a1112e1ce1b5d6637a947fd2e892c4a014d472870faaf984952d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76916c94d0c9a1112e1ce1b5d6637a947fd2e892c4a014d472870faaf984952d->enter($__internal_76916c94d0c9a1112e1ce1b5d6637a947fd2e892c4a014d472870faaf984952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_76916c94d0c9a1112e1ce1b5d6637a947fd2e892c4a014d472870faaf984952d->leave($__internal_76916c94d0c9a1112e1ce1b5d6637a947fd2e892c4a014d472870faaf984952d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
