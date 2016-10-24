<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_188f37da57c54d440591d8916fcbe1f7a9876a0db31f6cf65e9baf2ed23b3bc3 extends Twig_Template
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
        $__internal_90ce934fc2163030206990df0c0f4bb26714b633398032dd9e048b78dfe7901d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ce934fc2163030206990df0c0f4bb26714b633398032dd9e048b78dfe7901d->enter($__internal_90ce934fc2163030206990df0c0f4bb26714b633398032dd9e048b78dfe7901d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_90ce934fc2163030206990df0c0f4bb26714b633398032dd9e048b78dfe7901d->leave($__internal_90ce934fc2163030206990df0c0f4bb26714b633398032dd9e048b78dfe7901d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
