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
        $__internal_191e434256cdeb3882573a7fafd278efbf21f52d8b5de74503e9113fc070e53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191e434256cdeb3882573a7fafd278efbf21f52d8b5de74503e9113fc070e53c->enter($__internal_191e434256cdeb3882573a7fafd278efbf21f52d8b5de74503e9113fc070e53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_191e434256cdeb3882573a7fafd278efbf21f52d8b5de74503e9113fc070e53c->leave($__internal_191e434256cdeb3882573a7fafd278efbf21f52d8b5de74503e9113fc070e53c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba87846f4264f81107ae75d67482dc39378dc84e14a06117b75f6eeae10672b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba87846f4264f81107ae75d67482dc39378dc84e14a06117b75f6eeae10672b5->enter($__internal_ba87846f4264f81107ae75d67482dc39378dc84e14a06117b75f6eeae10672b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ba87846f4264f81107ae75d67482dc39378dc84e14a06117b75f6eeae10672b5->leave($__internal_ba87846f4264f81107ae75d67482dc39378dc84e14a06117b75f6eeae10672b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52b0ff57a16952992815112a19ac3c6fba2c241f8340a83bce63403ca4ffc521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b0ff57a16952992815112a19ac3c6fba2c241f8340a83bce63403ca4ffc521->enter($__internal_52b0ff57a16952992815112a19ac3c6fba2c241f8340a83bce63403ca4ffc521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52b0ff57a16952992815112a19ac3c6fba2c241f8340a83bce63403ca4ffc521->leave($__internal_52b0ff57a16952992815112a19ac3c6fba2c241f8340a83bce63403ca4ffc521_prof);

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
