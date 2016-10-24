<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_59021a3c0d654660c2eec77541bbac7ea2fbbf271688dffdc21673d744abb8fb extends Twig_Template
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
        $__internal_621590cffd79e9a463d23333cdeae32734fff660a927d343e502a5084d285c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621590cffd79e9a463d23333cdeae32734fff660a927d343e502a5084d285c14->enter($__internal_621590cffd79e9a463d23333cdeae32734fff660a927d343e502a5084d285c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_621590cffd79e9a463d23333cdeae32734fff660a927d343e502a5084d285c14->leave($__internal_621590cffd79e9a463d23333cdeae32734fff660a927d343e502a5084d285c14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
