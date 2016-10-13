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
        $__internal_69f4530a2d07af6aa6f8772170d9610594394d4334181ee4f73f18577f1d9a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f4530a2d07af6aa6f8772170d9610594394d4334181ee4f73f18577f1d9a3e->enter($__internal_69f4530a2d07af6aa6f8772170d9610594394d4334181ee4f73f18577f1d9a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f4530a2d07af6aa6f8772170d9610594394d4334181ee4f73f18577f1d9a3e->leave($__internal_69f4530a2d07af6aa6f8772170d9610594394d4334181ee4f73f18577f1d9a3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80b04a02fcca5e5989f2252f9951e0c5627529db0d7dfd553c513bac459fb371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b04a02fcca5e5989f2252f9951e0c5627529db0d7dfd553c513bac459fb371->enter($__internal_80b04a02fcca5e5989f2252f9951e0c5627529db0d7dfd553c513bac459fb371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_80b04a02fcca5e5989f2252f9951e0c5627529db0d7dfd553c513bac459fb371->leave($__internal_80b04a02fcca5e5989f2252f9951e0c5627529db0d7dfd553c513bac459fb371_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f120af53ea838ab621e7b259eecc0c466774ed0d18a7e9ecb03f25e90ac9d1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f120af53ea838ab621e7b259eecc0c466774ed0d18a7e9ecb03f25e90ac9d1b3->enter($__internal_f120af53ea838ab621e7b259eecc0c466774ed0d18a7e9ecb03f25e90ac9d1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f120af53ea838ab621e7b259eecc0c466774ed0d18a7e9ecb03f25e90ac9d1b3->leave($__internal_f120af53ea838ab621e7b259eecc0c466774ed0d18a7e9ecb03f25e90ac9d1b3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2faba2a25d2b52fcf5293c53a83a7ba0fb45be75fdfd3b67f3340dce3617759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2faba2a25d2b52fcf5293c53a83a7ba0fb45be75fdfd3b67f3340dce3617759->enter($__internal_e2faba2a25d2b52fcf5293c53a83a7ba0fb45be75fdfd3b67f3340dce3617759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e2faba2a25d2b52fcf5293c53a83a7ba0fb45be75fdfd3b67f3340dce3617759->leave($__internal_e2faba2a25d2b52fcf5293c53a83a7ba0fb45be75fdfd3b67f3340dce3617759_prof);

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
