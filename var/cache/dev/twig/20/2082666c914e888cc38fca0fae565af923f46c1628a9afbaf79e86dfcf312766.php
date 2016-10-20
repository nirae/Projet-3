<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6b0709c5f420bf2757f01a737766c629722b3f46e1788cc3943564760df2173f extends Twig_Template
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
        $__internal_40e2a53d48c84176739998c991bdcf5eb96874f73bca71f86dd730b306082079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e2a53d48c84176739998c991bdcf5eb96874f73bca71f86dd730b306082079->enter($__internal_40e2a53d48c84176739998c991bdcf5eb96874f73bca71f86dd730b306082079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_40e2a53d48c84176739998c991bdcf5eb96874f73bca71f86dd730b306082079->leave($__internal_40e2a53d48c84176739998c991bdcf5eb96874f73bca71f86dd730b306082079_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
