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
        $__internal_86c6aa8d31f0cf8cb0ab6b391cfcb744bc4f8122c59ce134cd841e4049081676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c6aa8d31f0cf8cb0ab6b391cfcb744bc4f8122c59ce134cd841e4049081676->enter($__internal_86c6aa8d31f0cf8cb0ab6b391cfcb744bc4f8122c59ce134cd841e4049081676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86c6aa8d31f0cf8cb0ab6b391cfcb744bc4f8122c59ce134cd841e4049081676->leave($__internal_86c6aa8d31f0cf8cb0ab6b391cfcb744bc4f8122c59ce134cd841e4049081676_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6453598076312d79211c879f4bc6227175fbba92f1a763a62eed21667533730d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6453598076312d79211c879f4bc6227175fbba92f1a763a62eed21667533730d->enter($__internal_6453598076312d79211c879f4bc6227175fbba92f1a763a62eed21667533730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6453598076312d79211c879f4bc6227175fbba92f1a763a62eed21667533730d->leave($__internal_6453598076312d79211c879f4bc6227175fbba92f1a763a62eed21667533730d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ca2578f413ff8894635a3acf0b792c1b1519ed00401623a962260b40eb7bedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca2578f413ff8894635a3acf0b792c1b1519ed00401623a962260b40eb7bedf->enter($__internal_1ca2578f413ff8894635a3acf0b792c1b1519ed00401623a962260b40eb7bedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1ca2578f413ff8894635a3acf0b792c1b1519ed00401623a962260b40eb7bedf->leave($__internal_1ca2578f413ff8894635a3acf0b792c1b1519ed00401623a962260b40eb7bedf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a6a597d27f39a794cc5b407c12c58f33d2aa8a08bebf070997e6bfaa8efcdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6a597d27f39a794cc5b407c12c58f33d2aa8a08bebf070997e6bfaa8efcdba->enter($__internal_9a6a597d27f39a794cc5b407c12c58f33d2aa8a08bebf070997e6bfaa8efcdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9a6a597d27f39a794cc5b407c12c58f33d2aa8a08bebf070997e6bfaa8efcdba->leave($__internal_9a6a597d27f39a794cc5b407c12c58f33d2aa8a08bebf070997e6bfaa8efcdba_prof);

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
