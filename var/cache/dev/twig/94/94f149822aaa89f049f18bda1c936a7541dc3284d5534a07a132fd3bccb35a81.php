<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_47060d924f44c64c8289d621ef482ee5d78ff65570d4a72c0aa3be0db61eb8b6 extends Twig_Template
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
        $__internal_ae5e4547af5d7c7be2dd230fd8dfd7c636f5db82dd74131551ab9cd42e66b6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5e4547af5d7c7be2dd230fd8dfd7c636f5db82dd74131551ab9cd42e66b6af->enter($__internal_ae5e4547af5d7c7be2dd230fd8dfd7c636f5db82dd74131551ab9cd42e66b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ae5e4547af5d7c7be2dd230fd8dfd7c636f5db82dd74131551ab9cd42e66b6af->leave($__internal_ae5e4547af5d7c7be2dd230fd8dfd7c636f5db82dd74131551ab9cd42e66b6af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
