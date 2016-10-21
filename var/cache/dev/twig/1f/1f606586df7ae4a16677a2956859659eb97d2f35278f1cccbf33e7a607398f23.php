<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2b1f1eff28d63ecfd9cf8df6d104d34d9c9ae55e760b0de8ad2833be0ccf63dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2ca6ff5878c123bf64677ffee491d5eae727db3788db5391a310d8ed71ee5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ca6ff5878c123bf64677ffee491d5eae727db3788db5391a310d8ed71ee5c7->enter($__internal_c2ca6ff5878c123bf64677ffee491d5eae727db3788db5391a310d8ed71ee5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ca6ff5878c123bf64677ffee491d5eae727db3788db5391a310d8ed71ee5c7->leave($__internal_c2ca6ff5878c123bf64677ffee491d5eae727db3788db5391a310d8ed71ee5c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ed411c05af92a1d8503703ea390bccb9b11f85b4ffd51e9b9ed4e69384a82bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed411c05af92a1d8503703ea390bccb9b11f85b4ffd51e9b9ed4e69384a82bf->enter($__internal_6ed411c05af92a1d8503703ea390bccb9b11f85b4ffd51e9b9ed4e69384a82bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6ed411c05af92a1d8503703ea390bccb9b11f85b4ffd51e9b9ed4e69384a82bf->leave($__internal_6ed411c05af92a1d8503703ea390bccb9b11f85b4ffd51e9b9ed4e69384a82bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03d59cdc0519ca603830e4d17d57c4144efe74cc414988290e985321368eb084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d59cdc0519ca603830e4d17d57c4144efe74cc414988290e985321368eb084->enter($__internal_03d59cdc0519ca603830e4d17d57c4144efe74cc414988290e985321368eb084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03d59cdc0519ca603830e4d17d57c4144efe74cc414988290e985321368eb084->leave($__internal_03d59cdc0519ca603830e4d17d57c4144efe74cc414988290e985321368eb084_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f811fe64ac2b15ecbc7f39dfbe8ff3e31a2954ab6b8b3299fec4a913293f194b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f811fe64ac2b15ecbc7f39dfbe8ff3e31a2954ab6b8b3299fec4a913293f194b->enter($__internal_f811fe64ac2b15ecbc7f39dfbe8ff3e31a2954ab6b8b3299fec4a913293f194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f811fe64ac2b15ecbc7f39dfbe8ff3e31a2954ab6b8b3299fec4a913293f194b->leave($__internal_f811fe64ac2b15ecbc7f39dfbe8ff3e31a2954ab6b8b3299fec4a913293f194b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
