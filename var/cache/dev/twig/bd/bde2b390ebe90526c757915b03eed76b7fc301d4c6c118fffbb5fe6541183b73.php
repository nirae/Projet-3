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
        $__internal_2a53bfd243849affa1894ceb8c75c37d7fde7cdcc97a9952138e5efdcf20187d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a53bfd243849affa1894ceb8c75c37d7fde7cdcc97a9952138e5efdcf20187d->enter($__internal_2a53bfd243849affa1894ceb8c75c37d7fde7cdcc97a9952138e5efdcf20187d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a53bfd243849affa1894ceb8c75c37d7fde7cdcc97a9952138e5efdcf20187d->leave($__internal_2a53bfd243849affa1894ceb8c75c37d7fde7cdcc97a9952138e5efdcf20187d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05728b6daf43ebae50a990e6b7e1351f8c2637bb6f76db64b818044bf1105c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05728b6daf43ebae50a990e6b7e1351f8c2637bb6f76db64b818044bf1105c19->enter($__internal_05728b6daf43ebae50a990e6b7e1351f8c2637bb6f76db64b818044bf1105c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05728b6daf43ebae50a990e6b7e1351f8c2637bb6f76db64b818044bf1105c19->leave($__internal_05728b6daf43ebae50a990e6b7e1351f8c2637bb6f76db64b818044bf1105c19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_47f086da130d89d2d94644c8eb41a5b55d057d789d749825b869aea282ba3c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f086da130d89d2d94644c8eb41a5b55d057d789d749825b869aea282ba3c3a->enter($__internal_47f086da130d89d2d94644c8eb41a5b55d057d789d749825b869aea282ba3c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47f086da130d89d2d94644c8eb41a5b55d057d789d749825b869aea282ba3c3a->leave($__internal_47f086da130d89d2d94644c8eb41a5b55d057d789d749825b869aea282ba3c3a_prof);

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
