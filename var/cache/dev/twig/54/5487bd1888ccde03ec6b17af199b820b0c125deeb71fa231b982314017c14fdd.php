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
        $__internal_17c4504a5adba724188dfb594f46be36587de9c5b552884ad27f363e6792e59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c4504a5adba724188dfb594f46be36587de9c5b552884ad27f363e6792e59b->enter($__internal_17c4504a5adba724188dfb594f46be36587de9c5b552884ad27f363e6792e59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c4504a5adba724188dfb594f46be36587de9c5b552884ad27f363e6792e59b->leave($__internal_17c4504a5adba724188dfb594f46be36587de9c5b552884ad27f363e6792e59b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2541b489b5bb6c598028e8666709e73ce2d596a133f58d6b66e2042947445461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2541b489b5bb6c598028e8666709e73ce2d596a133f58d6b66e2042947445461->enter($__internal_2541b489b5bb6c598028e8666709e73ce2d596a133f58d6b66e2042947445461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2541b489b5bb6c598028e8666709e73ce2d596a133f58d6b66e2042947445461->leave($__internal_2541b489b5bb6c598028e8666709e73ce2d596a133f58d6b66e2042947445461_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1484d21d7a0537852409a1b253f46e3869b1d972bedc2b185116e5ab2f09a5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1484d21d7a0537852409a1b253f46e3869b1d972bedc2b185116e5ab2f09a5e7->enter($__internal_1484d21d7a0537852409a1b253f46e3869b1d972bedc2b185116e5ab2f09a5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1484d21d7a0537852409a1b253f46e3869b1d972bedc2b185116e5ab2f09a5e7->leave($__internal_1484d21d7a0537852409a1b253f46e3869b1d972bedc2b185116e5ab2f09a5e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b45711beded0a1b067d08fb761799132c84aa9ca6ca4579526e9bf318ec9f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b45711beded0a1b067d08fb761799132c84aa9ca6ca4579526e9bf318ec9f3a->enter($__internal_2b45711beded0a1b067d08fb761799132c84aa9ca6ca4579526e9bf318ec9f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2b45711beded0a1b067d08fb761799132c84aa9ca6ca4579526e9bf318ec9f3a->leave($__internal_2b45711beded0a1b067d08fb761799132c84aa9ca6ca4579526e9bf318ec9f3a_prof);

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
