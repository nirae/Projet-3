<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_17d24eb5d0208ac0cfdbddc99dbe90ba948f20950dea9dd9c9e431cac3533322 extends Twig_Template
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
        $__internal_46ad7fa07d4d4d596d2502f7ee8dc7a8f60fafa37742331c71e1e3dde0c02a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ad7fa07d4d4d596d2502f7ee8dc7a8f60fafa37742331c71e1e3dde0c02a8d->enter($__internal_46ad7fa07d4d4d596d2502f7ee8dc7a8f60fafa37742331c71e1e3dde0c02a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_46ad7fa07d4d4d596d2502f7ee8dc7a8f60fafa37742331c71e1e3dde0c02a8d->leave($__internal_46ad7fa07d4d4d596d2502f7ee8dc7a8f60fafa37742331c71e1e3dde0c02a8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
