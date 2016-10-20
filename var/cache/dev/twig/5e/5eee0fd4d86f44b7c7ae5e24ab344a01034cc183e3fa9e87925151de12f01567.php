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
        $__internal_685c8e74a72d6fdff0c3fb6179d2d51506133e6a299c5eb3ca8a38f296f3ea59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685c8e74a72d6fdff0c3fb6179d2d51506133e6a299c5eb3ca8a38f296f3ea59->enter($__internal_685c8e74a72d6fdff0c3fb6179d2d51506133e6a299c5eb3ca8a38f296f3ea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_685c8e74a72d6fdff0c3fb6179d2d51506133e6a299c5eb3ca8a38f296f3ea59->leave($__internal_685c8e74a72d6fdff0c3fb6179d2d51506133e6a299c5eb3ca8a38f296f3ea59_prof);

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
