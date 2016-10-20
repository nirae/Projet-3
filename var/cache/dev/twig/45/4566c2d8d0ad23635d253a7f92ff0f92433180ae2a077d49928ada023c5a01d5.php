<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a26e143598b4d46de543dfb4cd5b1d06f789ceb3558b4cd88ffed1fbdff675ab extends Twig_Template
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
        $__internal_bc06d252c9bdf741deaadb4e19b498817af3caddebc84778f0e16df39836bff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc06d252c9bdf741deaadb4e19b498817af3caddebc84778f0e16df39836bff4->enter($__internal_bc06d252c9bdf741deaadb4e19b498817af3caddebc84778f0e16df39836bff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bc06d252c9bdf741deaadb4e19b498817af3caddebc84778f0e16df39836bff4->leave($__internal_bc06d252c9bdf741deaadb4e19b498817af3caddebc84778f0e16df39836bff4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
