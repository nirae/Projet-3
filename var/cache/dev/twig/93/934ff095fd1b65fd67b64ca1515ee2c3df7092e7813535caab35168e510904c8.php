<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_903518e8fabf96b0ce3f8a504506b82075d4b436d730fa5a04b3eaf7aa6c80a4 extends Twig_Template
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
        $__internal_61fa3bde85a1fb71bc679cc84c62c70c0f38286478b9941a7230502c26726fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fa3bde85a1fb71bc679cc84c62c70c0f38286478b9941a7230502c26726fb3->enter($__internal_61fa3bde85a1fb71bc679cc84c62c70c0f38286478b9941a7230502c26726fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_61fa3bde85a1fb71bc679cc84c62c70c0f38286478b9941a7230502c26726fb3->leave($__internal_61fa3bde85a1fb71bc679cc84c62c70c0f38286478b9941a7230502c26726fb3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
