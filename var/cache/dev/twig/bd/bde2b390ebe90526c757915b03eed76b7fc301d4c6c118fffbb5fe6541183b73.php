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
        $__internal_19bc168adfff3bfdbe29ffae2a8085eec2f184ce2c01143e00f4cac0590beecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bc168adfff3bfdbe29ffae2a8085eec2f184ce2c01143e00f4cac0590beecb->enter($__internal_19bc168adfff3bfdbe29ffae2a8085eec2f184ce2c01143e00f4cac0590beecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19bc168adfff3bfdbe29ffae2a8085eec2f184ce2c01143e00f4cac0590beecb->leave($__internal_19bc168adfff3bfdbe29ffae2a8085eec2f184ce2c01143e00f4cac0590beecb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1d0098ec0d90c7aaa1b691061c7074e7c0bbf1ab5a490c748e98dc596b53f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d0098ec0d90c7aaa1b691061c7074e7c0bbf1ab5a490c748e98dc596b53f15->enter($__internal_e1d0098ec0d90c7aaa1b691061c7074e7c0bbf1ab5a490c748e98dc596b53f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e1d0098ec0d90c7aaa1b691061c7074e7c0bbf1ab5a490c748e98dc596b53f15->leave($__internal_e1d0098ec0d90c7aaa1b691061c7074e7c0bbf1ab5a490c748e98dc596b53f15_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e8ee25d81efd7354d780353538af80dab86bb9342c8e9a28935c05c32ce5cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8ee25d81efd7354d780353538af80dab86bb9342c8e9a28935c05c32ce5cd3->enter($__internal_5e8ee25d81efd7354d780353538af80dab86bb9342c8e9a28935c05c32ce5cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e8ee25d81efd7354d780353538af80dab86bb9342c8e9a28935c05c32ce5cd3->leave($__internal_5e8ee25d81efd7354d780353538af80dab86bb9342c8e9a28935c05c32ce5cd3_prof);

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
