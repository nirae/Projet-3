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
        $__internal_3fd347f1873273abb4e3c1537b398d64bfaad7745f76682dbf502f6ba827a1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd347f1873273abb4e3c1537b398d64bfaad7745f76682dbf502f6ba827a1a6->enter($__internal_3fd347f1873273abb4e3c1537b398d64bfaad7745f76682dbf502f6ba827a1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd347f1873273abb4e3c1537b398d64bfaad7745f76682dbf502f6ba827a1a6->leave($__internal_3fd347f1873273abb4e3c1537b398d64bfaad7745f76682dbf502f6ba827a1a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d496119b3e666226a315f32692ffdd2c4b5bf057bbe3263c428d0e2b46911eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d496119b3e666226a315f32692ffdd2c4b5bf057bbe3263c428d0e2b46911eae->enter($__internal_d496119b3e666226a315f32692ffdd2c4b5bf057bbe3263c428d0e2b46911eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d496119b3e666226a315f32692ffdd2c4b5bf057bbe3263c428d0e2b46911eae->leave($__internal_d496119b3e666226a315f32692ffdd2c4b5bf057bbe3263c428d0e2b46911eae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c95b7fb7b0837e7a61fdc6ca33115ef130ff504643bfe46b9522762f07774f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c95b7fb7b0837e7a61fdc6ca33115ef130ff504643bfe46b9522762f07774f2->enter($__internal_6c95b7fb7b0837e7a61fdc6ca33115ef130ff504643bfe46b9522762f07774f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c95b7fb7b0837e7a61fdc6ca33115ef130ff504643bfe46b9522762f07774f2->leave($__internal_6c95b7fb7b0837e7a61fdc6ca33115ef130ff504643bfe46b9522762f07774f2_prof);

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
