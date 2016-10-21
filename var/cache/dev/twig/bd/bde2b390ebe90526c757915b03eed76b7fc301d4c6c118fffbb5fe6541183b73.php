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
        $__internal_6b9dc1c757acb597185aaf235d15f0a982862456b9bc8b53f826afda51d7ccf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9dc1c757acb597185aaf235d15f0a982862456b9bc8b53f826afda51d7ccf8->enter($__internal_6b9dc1c757acb597185aaf235d15f0a982862456b9bc8b53f826afda51d7ccf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b9dc1c757acb597185aaf235d15f0a982862456b9bc8b53f826afda51d7ccf8->leave($__internal_6b9dc1c757acb597185aaf235d15f0a982862456b9bc8b53f826afda51d7ccf8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c16177cc10432f222d17843a915310133f9998c12d55e78a9427d3fc9cdbdd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16177cc10432f222d17843a915310133f9998c12d55e78a9427d3fc9cdbdd6c->enter($__internal_c16177cc10432f222d17843a915310133f9998c12d55e78a9427d3fc9cdbdd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c16177cc10432f222d17843a915310133f9998c12d55e78a9427d3fc9cdbdd6c->leave($__internal_c16177cc10432f222d17843a915310133f9998c12d55e78a9427d3fc9cdbdd6c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6dba91d3739331b46262ec9dc9c26f72dc88655e5ae27522d4a9d984d9e70f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dba91d3739331b46262ec9dc9c26f72dc88655e5ae27522d4a9d984d9e70f3->enter($__internal_e6dba91d3739331b46262ec9dc9c26f72dc88655e5ae27522d4a9d984d9e70f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6dba91d3739331b46262ec9dc9c26f72dc88655e5ae27522d4a9d984d9e70f3->leave($__internal_e6dba91d3739331b46262ec9dc9c26f72dc88655e5ae27522d4a9d984d9e70f3_prof);

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
