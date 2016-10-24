<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_12f209ffcbf12de42322fcb4d14db514a078ce3151b156742a9e0703771607d2 extends Twig_Template
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
        $__internal_dd25ecab33c3dc7f3bacc2b1000004a00e94cca09108bcdd8ca4fd3827e5ee52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd25ecab33c3dc7f3bacc2b1000004a00e94cca09108bcdd8ca4fd3827e5ee52->enter($__internal_dd25ecab33c3dc7f3bacc2b1000004a00e94cca09108bcdd8ca4fd3827e5ee52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_dd25ecab33c3dc7f3bacc2b1000004a00e94cca09108bcdd8ca4fd3827e5ee52->leave($__internal_dd25ecab33c3dc7f3bacc2b1000004a00e94cca09108bcdd8ca4fd3827e5ee52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
