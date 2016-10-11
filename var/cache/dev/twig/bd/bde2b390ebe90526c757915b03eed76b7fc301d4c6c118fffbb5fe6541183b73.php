<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8dbec7abe7904827906a4c8d496596e4d96e0b3da767e050f95532bbc53b8971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0969088629279923ba7963d2e032b2cdbe0339941bf1af3beef639fc09b01e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0969088629279923ba7963d2e032b2cdbe0339941bf1af3beef639fc09b01e6b->enter($__internal_0969088629279923ba7963d2e032b2cdbe0339941bf1af3beef639fc09b01e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0969088629279923ba7963d2e032b2cdbe0339941bf1af3beef639fc09b01e6b->leave($__internal_0969088629279923ba7963d2e032b2cdbe0339941bf1af3beef639fc09b01e6b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98776819a82d7c579ce114b7b122f14465ae3028a5481c548d3f867bb3566a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98776819a82d7c579ce114b7b122f14465ae3028a5481c548d3f867bb3566a38->enter($__internal_98776819a82d7c579ce114b7b122f14465ae3028a5481c548d3f867bb3566a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_98776819a82d7c579ce114b7b122f14465ae3028a5481c548d3f867bb3566a38->leave($__internal_98776819a82d7c579ce114b7b122f14465ae3028a5481c548d3f867bb3566a38_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c25008e2f0871df8c681e7c7e8cb221de70c770aecdb6c581e1cad34df4f1deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25008e2f0871df8c681e7c7e8cb221de70c770aecdb6c581e1cad34df4f1deb->enter($__internal_c25008e2f0871df8c681e7c7e8cb221de70c770aecdb6c581e1cad34df4f1deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c25008e2f0871df8c681e7c7e8cb221de70c770aecdb6c581e1cad34df4f1deb->leave($__internal_c25008e2f0871df8c681e7c7e8cb221de70c770aecdb6c581e1cad34df4f1deb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
