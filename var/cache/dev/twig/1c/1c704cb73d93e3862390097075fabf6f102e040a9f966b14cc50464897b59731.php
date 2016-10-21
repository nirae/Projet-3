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
        $__internal_05b5cde594a09302a54a4664643e38dfd95fc96448d83091e3f69b240632576f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b5cde594a09302a54a4664643e38dfd95fc96448d83091e3f69b240632576f->enter($__internal_05b5cde594a09302a54a4664643e38dfd95fc96448d83091e3f69b240632576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_05b5cde594a09302a54a4664643e38dfd95fc96448d83091e3f69b240632576f->leave($__internal_05b5cde594a09302a54a4664643e38dfd95fc96448d83091e3f69b240632576f_prof);

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
