<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cf9a2d8fb615205a1fd941c1350815b73810c892c555ebabf39b4c2cbb6ede2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c624066ebb6d689e922fdb1ddcec8036708247ec18679b3facaf5c85035414b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c624066ebb6d689e922fdb1ddcec8036708247ec18679b3facaf5c85035414b1->enter($__internal_c624066ebb6d689e922fdb1ddcec8036708247ec18679b3facaf5c85035414b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c624066ebb6d689e922fdb1ddcec8036708247ec18679b3facaf5c85035414b1->leave($__internal_c624066ebb6d689e922fdb1ddcec8036708247ec18679b3facaf5c85035414b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd0b43ab289d8f41536e827286c02ffb2d38872f93c37ab224ef0ebba115effc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0b43ab289d8f41536e827286c02ffb2d38872f93c37ab224ef0ebba115effc->enter($__internal_dd0b43ab289d8f41536e827286c02ffb2d38872f93c37ab224ef0ebba115effc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dd0b43ab289d8f41536e827286c02ffb2d38872f93c37ab224ef0ebba115effc->leave($__internal_dd0b43ab289d8f41536e827286c02ffb2d38872f93c37ab224ef0ebba115effc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd05cbb506ddca05984de7bf836ffec3eb1e89b00b5025773842aa239975346b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd05cbb506ddca05984de7bf836ffec3eb1e89b00b5025773842aa239975346b->enter($__internal_bd05cbb506ddca05984de7bf836ffec3eb1e89b00b5025773842aa239975346b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bd05cbb506ddca05984de7bf836ffec3eb1e89b00b5025773842aa239975346b->leave($__internal_bd05cbb506ddca05984de7bf836ffec3eb1e89b00b5025773842aa239975346b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d9539b173bd46ec912207b9dcc78c00de67a5da119fa033f004af4fab032192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9539b173bd46ec912207b9dcc78c00de67a5da119fa033f004af4fab032192->enter($__internal_6d9539b173bd46ec912207b9dcc78c00de67a5da119fa033f004af4fab032192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6d9539b173bd46ec912207b9dcc78c00de67a5da119fa033f004af4fab032192->leave($__internal_6d9539b173bd46ec912207b9dcc78c00de67a5da119fa033f004af4fab032192_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
