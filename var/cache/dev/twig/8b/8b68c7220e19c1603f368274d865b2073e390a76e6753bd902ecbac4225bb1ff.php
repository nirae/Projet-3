<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_753ad71c3f9c8e48bea4b4469071d78323d07443351dcab03b880b07eedeae51 extends Twig_Template
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
        $__internal_226ca2783fe47eea9dc112a1a381671afc3614381637a96793232de15df02ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226ca2783fe47eea9dc112a1a381671afc3614381637a96793232de15df02ef1->enter($__internal_226ca2783fe47eea9dc112a1a381671afc3614381637a96793232de15df02ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_226ca2783fe47eea9dc112a1a381671afc3614381637a96793232de15df02ef1->leave($__internal_226ca2783fe47eea9dc112a1a381671afc3614381637a96793232de15df02ef1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
