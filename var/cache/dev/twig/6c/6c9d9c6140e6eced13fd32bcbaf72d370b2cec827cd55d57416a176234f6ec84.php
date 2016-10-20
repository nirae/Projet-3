<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3c473eec365090617e5a84b93b97c84381ec6d0b895d894379ab335fa9704573 extends Twig_Template
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
        $__internal_bc52998673345222218952a982d94cb9b0b5073df9e6e00220bb8883b52c012b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc52998673345222218952a982d94cb9b0b5073df9e6e00220bb8883b52c012b->enter($__internal_bc52998673345222218952a982d94cb9b0b5073df9e6e00220bb8883b52c012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bc52998673345222218952a982d94cb9b0b5073df9e6e00220bb8883b52c012b->leave($__internal_bc52998673345222218952a982d94cb9b0b5073df9e6e00220bb8883b52c012b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
