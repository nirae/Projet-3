<?php

/* ::base.html.twig */
class __TwigTemplate_8205ed026d2837e7854b93dbcaf95d1c97e9d799b0739b6f8db5dbb1c4f704ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9406a1285c69325eea356da6bd8d3952f9cc1cbc8016a6d99d45b22b1773186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9406a1285c69325eea356da6bd8d3952f9cc1cbc8016a6d99d45b22b1773186->enter($__internal_b9406a1285c69325eea356da6bd8d3952f9cc1cbc8016a6d99d45b22b1773186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b9406a1285c69325eea356da6bd8d3952f9cc1cbc8016a6d99d45b22b1773186->leave($__internal_b9406a1285c69325eea356da6bd8d3952f9cc1cbc8016a6d99d45b22b1773186_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34af5d43715a8966166da4e454a3f11c15f2c97e34afc0ade5c110463749d920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34af5d43715a8966166da4e454a3f11c15f2c97e34afc0ade5c110463749d920->enter($__internal_34af5d43715a8966166da4e454a3f11c15f2c97e34afc0ade5c110463749d920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_34af5d43715a8966166da4e454a3f11c15f2c97e34afc0ade5c110463749d920->leave($__internal_34af5d43715a8966166da4e454a3f11c15f2c97e34afc0ade5c110463749d920_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6abba3baa566aa396783098e45fa67e4dac79b65cc4807e48ff0412d9b8c5299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abba3baa566aa396783098e45fa67e4dac79b65cc4807e48ff0412d9b8c5299->enter($__internal_6abba3baa566aa396783098e45fa67e4dac79b65cc4807e48ff0412d9b8c5299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6abba3baa566aa396783098e45fa67e4dac79b65cc4807e48ff0412d9b8c5299->leave($__internal_6abba3baa566aa396783098e45fa67e4dac79b65cc4807e48ff0412d9b8c5299_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeae40bcd0e02114f035e8eb68b2dfa8c5693c8c036c53d424c78781734954a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeae40bcd0e02114f035e8eb68b2dfa8c5693c8c036c53d424c78781734954a6->enter($__internal_aeae40bcd0e02114f035e8eb68b2dfa8c5693c8c036c53d424c78781734954a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aeae40bcd0e02114f035e8eb68b2dfa8c5693c8c036c53d424c78781734954a6->leave($__internal_aeae40bcd0e02114f035e8eb68b2dfa8c5693c8c036c53d424c78781734954a6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f65f686aaee51508909bcdfd5350f160bf9437321481389463697c5678b3b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f65f686aaee51508909bcdfd5350f160bf9437321481389463697c5678b3b6f->enter($__internal_9f65f686aaee51508909bcdfd5350f160bf9437321481389463697c5678b3b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9f65f686aaee51508909bcdfd5350f160bf9437321481389463697c5678b3b6f->leave($__internal_9f65f686aaee51508909bcdfd5350f160bf9437321481389463697c5678b3b6f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
