<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_70b980b3205d764381698ac87b452a1e6ff111d75629f1cf68e87a4262f3d28a extends Twig_Template
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
        $__internal_7fa4ab8350bd70c440e8483bbf0ca131acb03e80c228aa09d6ca039d6e85c2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa4ab8350bd70c440e8483bbf0ca131acb03e80c228aa09d6ca039d6e85c2ee->enter($__internal_7fa4ab8350bd70c440e8483bbf0ca131acb03e80c228aa09d6ca039d6e85c2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7fa4ab8350bd70c440e8483bbf0ca131acb03e80c228aa09d6ca039d6e85c2ee->leave($__internal_7fa4ab8350bd70c440e8483bbf0ca131acb03e80c228aa09d6ca039d6e85c2ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
