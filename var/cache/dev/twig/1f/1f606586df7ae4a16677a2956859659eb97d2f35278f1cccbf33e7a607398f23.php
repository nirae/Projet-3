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
        $__internal_ba0127beb9eed987553c0b1cbfb66567289a18b278d3a78553e37eb1e0a950dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0127beb9eed987553c0b1cbfb66567289a18b278d3a78553e37eb1e0a950dd->enter($__internal_ba0127beb9eed987553c0b1cbfb66567289a18b278d3a78553e37eb1e0a950dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba0127beb9eed987553c0b1cbfb66567289a18b278d3a78553e37eb1e0a950dd->leave($__internal_ba0127beb9eed987553c0b1cbfb66567289a18b278d3a78553e37eb1e0a950dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e95e7b0bbf0fd9393083fe63f8db53ac6f63f3da50022a925beeca5e06582bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e95e7b0bbf0fd9393083fe63f8db53ac6f63f3da50022a925beeca5e06582bd->enter($__internal_4e95e7b0bbf0fd9393083fe63f8db53ac6f63f3da50022a925beeca5e06582bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e95e7b0bbf0fd9393083fe63f8db53ac6f63f3da50022a925beeca5e06582bd->leave($__internal_4e95e7b0bbf0fd9393083fe63f8db53ac6f63f3da50022a925beeca5e06582bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_679cd46b804c23974fe346cdbb221f928e3709f9b859a42306bd2783d19f2299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679cd46b804c23974fe346cdbb221f928e3709f9b859a42306bd2783d19f2299->enter($__internal_679cd46b804c23974fe346cdbb221f928e3709f9b859a42306bd2783d19f2299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_679cd46b804c23974fe346cdbb221f928e3709f9b859a42306bd2783d19f2299->leave($__internal_679cd46b804c23974fe346cdbb221f928e3709f9b859a42306bd2783d19f2299_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_176a94c5dea62138e1493b6a661882036e893170c0154da85fe701677e14d6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176a94c5dea62138e1493b6a661882036e893170c0154da85fe701677e14d6bb->enter($__internal_176a94c5dea62138e1493b6a661882036e893170c0154da85fe701677e14d6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_176a94c5dea62138e1493b6a661882036e893170c0154da85fe701677e14d6bb->leave($__internal_176a94c5dea62138e1493b6a661882036e893170c0154da85fe701677e14d6bb_prof);

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
