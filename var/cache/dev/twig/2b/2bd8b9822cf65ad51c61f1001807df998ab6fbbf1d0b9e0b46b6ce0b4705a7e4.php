<?php

/* base.html.twig */
class __TwigTemplate_e6f97e52f27c85a88ea5bf2edae0f8cc14eb801e40834c60c24440b214a76817 extends Twig_Template
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
        $__internal_a5a621213ee9e1ba6614eaaa2a112cbbb33ace23a6a2097329bed7b4547f2d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a621213ee9e1ba6614eaaa2a112cbbb33ace23a6a2097329bed7b4547f2d21->enter($__internal_a5a621213ee9e1ba6614eaaa2a112cbbb33ace23a6a2097329bed7b4547f2d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a5a621213ee9e1ba6614eaaa2a112cbbb33ace23a6a2097329bed7b4547f2d21->leave($__internal_a5a621213ee9e1ba6614eaaa2a112cbbb33ace23a6a2097329bed7b4547f2d21_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a096732e972d5f92e0d201c0e297a61d981d570e5f251ad7af58c9dea866337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a096732e972d5f92e0d201c0e297a61d981d570e5f251ad7af58c9dea866337->enter($__internal_8a096732e972d5f92e0d201c0e297a61d981d570e5f251ad7af58c9dea866337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a096732e972d5f92e0d201c0e297a61d981d570e5f251ad7af58c9dea866337->leave($__internal_8a096732e972d5f92e0d201c0e297a61d981d570e5f251ad7af58c9dea866337_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b674ca640acf483f64f3e47ff6ed195494b3c2c4b0686302c626e8379d83c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b674ca640acf483f64f3e47ff6ed195494b3c2c4b0686302c626e8379d83c20->enter($__internal_5b674ca640acf483f64f3e47ff6ed195494b3c2c4b0686302c626e8379d83c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b674ca640acf483f64f3e47ff6ed195494b3c2c4b0686302c626e8379d83c20->leave($__internal_5b674ca640acf483f64f3e47ff6ed195494b3c2c4b0686302c626e8379d83c20_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3dd90d1fda988ac155eaa78acbb7dd7f750a75e417f83ffcf6ff1d0d9a316f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3dd90d1fda988ac155eaa78acbb7dd7f750a75e417f83ffcf6ff1d0d9a316f6->enter($__internal_e3dd90d1fda988ac155eaa78acbb7dd7f750a75e417f83ffcf6ff1d0d9a316f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3dd90d1fda988ac155eaa78acbb7dd7f750a75e417f83ffcf6ff1d0d9a316f6->leave($__internal_e3dd90d1fda988ac155eaa78acbb7dd7f750a75e417f83ffcf6ff1d0d9a316f6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f532ea632d065bb5489cebd6c8f15d6b52bde19a55c92c4c5e2e81801fca0cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f532ea632d065bb5489cebd6c8f15d6b52bde19a55c92c4c5e2e81801fca0cfc->enter($__internal_f532ea632d065bb5489cebd6c8f15d6b52bde19a55c92c4c5e2e81801fca0cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f532ea632d065bb5489cebd6c8f15d6b52bde19a55c92c4c5e2e81801fca0cfc->leave($__internal_f532ea632d065bb5489cebd6c8f15d6b52bde19a55c92c4c5e2e81801fca0cfc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
