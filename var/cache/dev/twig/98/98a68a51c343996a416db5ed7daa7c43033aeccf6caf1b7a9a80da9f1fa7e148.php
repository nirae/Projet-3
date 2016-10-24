<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c5a8a613f4f94a3887cc3b25f04961a3ab68c3342a080e3bc1c0eb4b3cfc6b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_cac134d05e3c77028042a79c91f851e6340cf745e3e968ea0a436ca3d2a74990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac134d05e3c77028042a79c91f851e6340cf745e3e968ea0a436ca3d2a74990->enter($__internal_cac134d05e3c77028042a79c91f851e6340cf745e3e968ea0a436ca3d2a74990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac134d05e3c77028042a79c91f851e6340cf745e3e968ea0a436ca3d2a74990->leave($__internal_cac134d05e3c77028042a79c91f851e6340cf745e3e968ea0a436ca3d2a74990_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a38b09cf90800fbc169c27c5962a0f4fed5763ba3a4f370186d8c52fbf532989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38b09cf90800fbc169c27c5962a0f4fed5763ba3a4f370186d8c52fbf532989->enter($__internal_a38b09cf90800fbc169c27c5962a0f4fed5763ba3a4f370186d8c52fbf532989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a38b09cf90800fbc169c27c5962a0f4fed5763ba3a4f370186d8c52fbf532989->leave($__internal_a38b09cf90800fbc169c27c5962a0f4fed5763ba3a4f370186d8c52fbf532989_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31841059681f90bc2a904a405dbdf7909df9fba39f32530a1601c8943c7370c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31841059681f90bc2a904a405dbdf7909df9fba39f32530a1601c8943c7370c9->enter($__internal_31841059681f90bc2a904a405dbdf7909df9fba39f32530a1601c8943c7370c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31841059681f90bc2a904a405dbdf7909df9fba39f32530a1601c8943c7370c9->leave($__internal_31841059681f90bc2a904a405dbdf7909df9fba39f32530a1601c8943c7370c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
