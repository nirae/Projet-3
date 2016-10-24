<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_8319d8feee1dc4be67b70c113009e34d83398dc181259798c1d7efececef22ad extends Twig_Template
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
        $__internal_e3b61a29bb98700ebd862c0522943589e1533f61f58544a36f0cd25730b0f0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b61a29bb98700ebd862c0522943589e1533f61f58544a36f0cd25730b0f0d9->enter($__internal_e3b61a29bb98700ebd862c0522943589e1533f61f58544a36f0cd25730b0f0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e3b61a29bb98700ebd862c0522943589e1533f61f58544a36f0cd25730b0f0d9->leave($__internal_e3b61a29bb98700ebd862c0522943589e1533f61f58544a36f0cd25730b0f0d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
