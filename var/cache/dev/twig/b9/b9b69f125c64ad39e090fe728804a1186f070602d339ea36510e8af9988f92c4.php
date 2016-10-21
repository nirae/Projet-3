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
        $__internal_8079d337aab2b6225f574a55b659b868aab16b3316cb0390091b7685f74475dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8079d337aab2b6225f574a55b659b868aab16b3316cb0390091b7685f74475dc->enter($__internal_8079d337aab2b6225f574a55b659b868aab16b3316cb0390091b7685f74475dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8079d337aab2b6225f574a55b659b868aab16b3316cb0390091b7685f74475dc->leave($__internal_8079d337aab2b6225f574a55b659b868aab16b3316cb0390091b7685f74475dc_prof);

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
