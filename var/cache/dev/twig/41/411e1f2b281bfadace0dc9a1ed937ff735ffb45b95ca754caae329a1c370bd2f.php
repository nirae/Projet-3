<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2154ccee288db859a984485346eedae90362e336f28685b780cfb50953725ba3 extends Twig_Template
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
        $__internal_130b6a75995ead0b30dd397661df3b2fb9d9ddb9ba13cda32276f29f10864487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130b6a75995ead0b30dd397661df3b2fb9d9ddb9ba13cda32276f29f10864487->enter($__internal_130b6a75995ead0b30dd397661df3b2fb9d9ddb9ba13cda32276f29f10864487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_130b6a75995ead0b30dd397661df3b2fb9d9ddb9ba13cda32276f29f10864487->leave($__internal_130b6a75995ead0b30dd397661df3b2fb9d9ddb9ba13cda32276f29f10864487_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
