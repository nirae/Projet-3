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
        $__internal_27498828c860d909233bf68425bc135335a513bb0aaac558faf91a614b98cca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27498828c860d909233bf68425bc135335a513bb0aaac558faf91a614b98cca2->enter($__internal_27498828c860d909233bf68425bc135335a513bb0aaac558faf91a614b98cca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_27498828c860d909233bf68425bc135335a513bb0aaac558faf91a614b98cca2->leave($__internal_27498828c860d909233bf68425bc135335a513bb0aaac558faf91a614b98cca2_prof);

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
