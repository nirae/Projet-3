<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_686cffbe192c0e60e63f913ba464eaa6b277a9270702048699e8b6f669cf3fa0 extends Twig_Template
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
        $__internal_ca52ae5c07ffcdf7f1a19e1a2c67f516427d60b3c2276328b1e141d8b7ae4403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca52ae5c07ffcdf7f1a19e1a2c67f516427d60b3c2276328b1e141d8b7ae4403->enter($__internal_ca52ae5c07ffcdf7f1a19e1a2c67f516427d60b3c2276328b1e141d8b7ae4403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ca52ae5c07ffcdf7f1a19e1a2c67f516427d60b3c2276328b1e141d8b7ae4403->leave($__internal_ca52ae5c07ffcdf7f1a19e1a2c67f516427d60b3c2276328b1e141d8b7ae4403_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
