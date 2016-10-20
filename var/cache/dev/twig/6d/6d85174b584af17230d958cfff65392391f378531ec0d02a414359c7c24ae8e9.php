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
        $__internal_da27c801b1314cfea6e3c0e9f96e034b2725f81e94ee98b818d6e55571f42858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da27c801b1314cfea6e3c0e9f96e034b2725f81e94ee98b818d6e55571f42858->enter($__internal_da27c801b1314cfea6e3c0e9f96e034b2725f81e94ee98b818d6e55571f42858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_da27c801b1314cfea6e3c0e9f96e034b2725f81e94ee98b818d6e55571f42858->leave($__internal_da27c801b1314cfea6e3c0e9f96e034b2725f81e94ee98b818d6e55571f42858_prof);

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
