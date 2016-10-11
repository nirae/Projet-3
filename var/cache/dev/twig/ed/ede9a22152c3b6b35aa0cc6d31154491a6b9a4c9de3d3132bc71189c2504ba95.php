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
        $__internal_16ec08dff83fbd42aeffcc27ea39f51bc9ff1dad5e3e8a61d1d5b95d5f6ca801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ec08dff83fbd42aeffcc27ea39f51bc9ff1dad5e3e8a61d1d5b95d5f6ca801->enter($__internal_16ec08dff83fbd42aeffcc27ea39f51bc9ff1dad5e3e8a61d1d5b95d5f6ca801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_16ec08dff83fbd42aeffcc27ea39f51bc9ff1dad5e3e8a61d1d5b95d5f6ca801->leave($__internal_16ec08dff83fbd42aeffcc27ea39f51bc9ff1dad5e3e8a61d1d5b95d5f6ca801_prof);

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
