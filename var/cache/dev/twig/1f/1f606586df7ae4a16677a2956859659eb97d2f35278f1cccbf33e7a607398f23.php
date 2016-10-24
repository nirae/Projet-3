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
        $__internal_8432baa8fcf0b1d8791727e1ff191922177f2704194c886ba4c8bdb3050598fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8432baa8fcf0b1d8791727e1ff191922177f2704194c886ba4c8bdb3050598fb->enter($__internal_8432baa8fcf0b1d8791727e1ff191922177f2704194c886ba4c8bdb3050598fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8432baa8fcf0b1d8791727e1ff191922177f2704194c886ba4c8bdb3050598fb->leave($__internal_8432baa8fcf0b1d8791727e1ff191922177f2704194c886ba4c8bdb3050598fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06731c5798b553155e0308f3f267d818d15d506ec83113cc06468ec6c8d69828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06731c5798b553155e0308f3f267d818d15d506ec83113cc06468ec6c8d69828->enter($__internal_06731c5798b553155e0308f3f267d818d15d506ec83113cc06468ec6c8d69828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_06731c5798b553155e0308f3f267d818d15d506ec83113cc06468ec6c8d69828->leave($__internal_06731c5798b553155e0308f3f267d818d15d506ec83113cc06468ec6c8d69828_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5357703c4ad7b4c1a521d0a070730c87357d6d5c5c4f931aef971d4174de4f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5357703c4ad7b4c1a521d0a070730c87357d6d5c5c4f931aef971d4174de4f3d->enter($__internal_5357703c4ad7b4c1a521d0a070730c87357d6d5c5c4f931aef971d4174de4f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5357703c4ad7b4c1a521d0a070730c87357d6d5c5c4f931aef971d4174de4f3d->leave($__internal_5357703c4ad7b4c1a521d0a070730c87357d6d5c5c4f931aef971d4174de4f3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b13fb6ae16e54a76eece5545690e2f7d7a97934577d4779e7ef68d34e62c329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b13fb6ae16e54a76eece5545690e2f7d7a97934577d4779e7ef68d34e62c329->enter($__internal_9b13fb6ae16e54a76eece5545690e2f7d7a97934577d4779e7ef68d34e62c329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b13fb6ae16e54a76eece5545690e2f7d7a97934577d4779e7ef68d34e62c329->leave($__internal_9b13fb6ae16e54a76eece5545690e2f7d7a97934577d4779e7ef68d34e62c329_prof);

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
