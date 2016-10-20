<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4e4d3d7f5b2f9438594beb9e87e55c2394e102d386eca86bfe7234b8ff6a9d57 extends Twig_Template
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
        $__internal_3bd524137030681f806bef3176c1e206b02ff75e865fd1e6ccbb589adcbebee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd524137030681f806bef3176c1e206b02ff75e865fd1e6ccbb589adcbebee5->enter($__internal_3bd524137030681f806bef3176c1e206b02ff75e865fd1e6ccbb589adcbebee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3bd524137030681f806bef3176c1e206b02ff75e865fd1e6ccbb589adcbebee5->leave($__internal_3bd524137030681f806bef3176c1e206b02ff75e865fd1e6ccbb589adcbebee5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
