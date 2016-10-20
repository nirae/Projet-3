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
        $__internal_6b7795c8314d46c4eaad5c7ca5d73e972c25304793baba1be55d7fbdb47d4081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7795c8314d46c4eaad5c7ca5d73e972c25304793baba1be55d7fbdb47d4081->enter($__internal_6b7795c8314d46c4eaad5c7ca5d73e972c25304793baba1be55d7fbdb47d4081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6b7795c8314d46c4eaad5c7ca5d73e972c25304793baba1be55d7fbdb47d4081->leave($__internal_6b7795c8314d46c4eaad5c7ca5d73e972c25304793baba1be55d7fbdb47d4081_prof);

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
