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
        $__internal_4bc6a5aaa08186da7eb17ef5ebd31d0879800ba319042911e6444d843bbecee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc6a5aaa08186da7eb17ef5ebd31d0879800ba319042911e6444d843bbecee0->enter($__internal_4bc6a5aaa08186da7eb17ef5ebd31d0879800ba319042911e6444d843bbecee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4bc6a5aaa08186da7eb17ef5ebd31d0879800ba319042911e6444d843bbecee0->leave($__internal_4bc6a5aaa08186da7eb17ef5ebd31d0879800ba319042911e6444d843bbecee0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf736404a7021b50c531f0a70689b7f5322d0df4c525c9c4814f276d19326bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf736404a7021b50c531f0a70689b7f5322d0df4c525c9c4814f276d19326bd1->enter($__internal_cf736404a7021b50c531f0a70689b7f5322d0df4c525c9c4814f276d19326bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cf736404a7021b50c531f0a70689b7f5322d0df4c525c9c4814f276d19326bd1->leave($__internal_cf736404a7021b50c531f0a70689b7f5322d0df4c525c9c4814f276d19326bd1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52726376b663f6809d4cd60b52102ce66c40751854ee623947adb53b4910fbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52726376b663f6809d4cd60b52102ce66c40751854ee623947adb53b4910fbe1->enter($__internal_52726376b663f6809d4cd60b52102ce66c40751854ee623947adb53b4910fbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_52726376b663f6809d4cd60b52102ce66c40751854ee623947adb53b4910fbe1->leave($__internal_52726376b663f6809d4cd60b52102ce66c40751854ee623947adb53b4910fbe1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4062a1e34a3c09670f11fced917534fa8bfe4847a10d2ec55b1d0fe80bad4616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4062a1e34a3c09670f11fced917534fa8bfe4847a10d2ec55b1d0fe80bad4616->enter($__internal_4062a1e34a3c09670f11fced917534fa8bfe4847a10d2ec55b1d0fe80bad4616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4062a1e34a3c09670f11fced917534fa8bfe4847a10d2ec55b1d0fe80bad4616->leave($__internal_4062a1e34a3c09670f11fced917534fa8bfe4847a10d2ec55b1d0fe80bad4616_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44068623abde98fdfad2230cbed4b510edd717756d375f8948e1295bd18fc21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44068623abde98fdfad2230cbed4b510edd717756d375f8948e1295bd18fc21d->enter($__internal_44068623abde98fdfad2230cbed4b510edd717756d375f8948e1295bd18fc21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44068623abde98fdfad2230cbed4b510edd717756d375f8948e1295bd18fc21d->leave($__internal_44068623abde98fdfad2230cbed4b510edd717756d375f8948e1295bd18fc21d_prof);

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
