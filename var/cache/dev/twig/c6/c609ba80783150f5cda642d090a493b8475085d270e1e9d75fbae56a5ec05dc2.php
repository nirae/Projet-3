<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5b21237400a53328588c452a2c0bdd335aae884c090222840693403337bfb613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a01c18bcf48117b6f43e976d725b0dceaae417fc753b4ac3c4978a46e7d08c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01c18bcf48117b6f43e976d725b0dceaae417fc753b4ac3c4978a46e7d08c45->enter($__internal_a01c18bcf48117b6f43e976d725b0dceaae417fc753b4ac3c4978a46e7d08c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a01c18bcf48117b6f43e976d725b0dceaae417fc753b4ac3c4978a46e7d08c45->leave($__internal_a01c18bcf48117b6f43e976d725b0dceaae417fc753b4ac3c4978a46e7d08c45_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d6f31f7f4ae6afd7b2064cdf4f5d2341c2a4796e8ba84e1a6ca20a779b6abdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6f31f7f4ae6afd7b2064cdf4f5d2341c2a4796e8ba84e1a6ca20a779b6abdd->enter($__internal_6d6f31f7f4ae6afd7b2064cdf4f5d2341c2a4796e8ba84e1a6ca20a779b6abdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6d6f31f7f4ae6afd7b2064cdf4f5d2341c2a4796e8ba84e1a6ca20a779b6abdd->leave($__internal_6d6f31f7f4ae6afd7b2064cdf4f5d2341c2a4796e8ba84e1a6ca20a779b6abdd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
