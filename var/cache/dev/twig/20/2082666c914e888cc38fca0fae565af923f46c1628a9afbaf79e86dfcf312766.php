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
        $__internal_198da4100f0650ca2aabd03f098ea585b3119f00f558f4fb4f3af4f40f6613ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198da4100f0650ca2aabd03f098ea585b3119f00f558f4fb4f3af4f40f6613ca->enter($__internal_198da4100f0650ca2aabd03f098ea585b3119f00f558f4fb4f3af4f40f6613ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_198da4100f0650ca2aabd03f098ea585b3119f00f558f4fb4f3af4f40f6613ca->leave($__internal_198da4100f0650ca2aabd03f098ea585b3119f00f558f4fb4f3af4f40f6613ca_prof);

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
