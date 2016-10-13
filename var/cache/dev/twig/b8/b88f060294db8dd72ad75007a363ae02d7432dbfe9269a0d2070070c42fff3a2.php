<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bf804485a4652727eb2a90562ba442c5da9fff30387010be58e1020391de62a4 extends Twig_Template
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
        $__internal_b2a36888fc58e4cfe449dec5168e4c17bf32a94d14e15473fad5d416e662356a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a36888fc58e4cfe449dec5168e4c17bf32a94d14e15473fad5d416e662356a->enter($__internal_b2a36888fc58e4cfe449dec5168e4c17bf32a94d14e15473fad5d416e662356a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b2a36888fc58e4cfe449dec5168e4c17bf32a94d14e15473fad5d416e662356a->leave($__internal_b2a36888fc58e4cfe449dec5168e4c17bf32a94d14e15473fad5d416e662356a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
