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
        $__internal_709e02d8883fbac11f9036c131c816127580b65688677f1f01f96c11d313a91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709e02d8883fbac11f9036c131c816127580b65688677f1f01f96c11d313a91e->enter($__internal_709e02d8883fbac11f9036c131c816127580b65688677f1f01f96c11d313a91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_709e02d8883fbac11f9036c131c816127580b65688677f1f01f96c11d313a91e->leave($__internal_709e02d8883fbac11f9036c131c816127580b65688677f1f01f96c11d313a91e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_457d53b155f88c4a8db8d152abb9d8126db1807779b8664e2e878d58fa0479ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457d53b155f88c4a8db8d152abb9d8126db1807779b8664e2e878d58fa0479ad->enter($__internal_457d53b155f88c4a8db8d152abb9d8126db1807779b8664e2e878d58fa0479ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_457d53b155f88c4a8db8d152abb9d8126db1807779b8664e2e878d58fa0479ad->leave($__internal_457d53b155f88c4a8db8d152abb9d8126db1807779b8664e2e878d58fa0479ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14b089b94c9f43f33d661ae4d63de4a705d5a5f8ce223008cbd5e4f16e3ed150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b089b94c9f43f33d661ae4d63de4a705d5a5f8ce223008cbd5e4f16e3ed150->enter($__internal_14b089b94c9f43f33d661ae4d63de4a705d5a5f8ce223008cbd5e4f16e3ed150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_14b089b94c9f43f33d661ae4d63de4a705d5a5f8ce223008cbd5e4f16e3ed150->leave($__internal_14b089b94c9f43f33d661ae4d63de4a705d5a5f8ce223008cbd5e4f16e3ed150_prof);

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
