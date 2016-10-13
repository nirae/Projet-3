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
        $__internal_92e6be83a50164a513a641db0de3751d7dc58e16bb4f07380190be638a40e42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e6be83a50164a513a641db0de3751d7dc58e16bb4f07380190be638a40e42c->enter($__internal_92e6be83a50164a513a641db0de3751d7dc58e16bb4f07380190be638a40e42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_92e6be83a50164a513a641db0de3751d7dc58e16bb4f07380190be638a40e42c->leave($__internal_92e6be83a50164a513a641db0de3751d7dc58e16bb4f07380190be638a40e42c_prof);

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
