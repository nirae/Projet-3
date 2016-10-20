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
        $__internal_89097f2b82170423e5a385d4110b537651308e430b8c4c1cd2f66044ac896e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89097f2b82170423e5a385d4110b537651308e430b8c4c1cd2f66044ac896e75->enter($__internal_89097f2b82170423e5a385d4110b537651308e430b8c4c1cd2f66044ac896e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_89097f2b82170423e5a385d4110b537651308e430b8c4c1cd2f66044ac896e75->leave($__internal_89097f2b82170423e5a385d4110b537651308e430b8c4c1cd2f66044ac896e75_prof);

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
