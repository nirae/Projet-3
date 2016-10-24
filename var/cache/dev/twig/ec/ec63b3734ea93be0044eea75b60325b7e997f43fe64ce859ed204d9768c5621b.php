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
        $__internal_89c41e5c3099d15f3fe6f13d9e455ed27e7d9e2ad4b0e2cc3e621df2dcce2744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c41e5c3099d15f3fe6f13d9e455ed27e7d9e2ad4b0e2cc3e621df2dcce2744->enter($__internal_89c41e5c3099d15f3fe6f13d9e455ed27e7d9e2ad4b0e2cc3e621df2dcce2744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_89c41e5c3099d15f3fe6f13d9e455ed27e7d9e2ad4b0e2cc3e621df2dcce2744->leave($__internal_89c41e5c3099d15f3fe6f13d9e455ed27e7d9e2ad4b0e2cc3e621df2dcce2744_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_abc206b84f05b0f4ed47c9f8e7841b2da46a57c92a1a7fc97121e1afc39e9baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc206b84f05b0f4ed47c9f8e7841b2da46a57c92a1a7fc97121e1afc39e9baa->enter($__internal_abc206b84f05b0f4ed47c9f8e7841b2da46a57c92a1a7fc97121e1afc39e9baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_abc206b84f05b0f4ed47c9f8e7841b2da46a57c92a1a7fc97121e1afc39e9baa->leave($__internal_abc206b84f05b0f4ed47c9f8e7841b2da46a57c92a1a7fc97121e1afc39e9baa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abc4cbdc97de4576b5cc7827ccbf2aeb0f5fc67b946a35ae7db5e3a35eceb23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc4cbdc97de4576b5cc7827ccbf2aeb0f5fc67b946a35ae7db5e3a35eceb23e->enter($__internal_abc4cbdc97de4576b5cc7827ccbf2aeb0f5fc67b946a35ae7db5e3a35eceb23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_abc4cbdc97de4576b5cc7827ccbf2aeb0f5fc67b946a35ae7db5e3a35eceb23e->leave($__internal_abc4cbdc97de4576b5cc7827ccbf2aeb0f5fc67b946a35ae7db5e3a35eceb23e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8d02ba967fa48d9539a83f3107b138bb6f541361f8b706c4b8303a898c8d1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d02ba967fa48d9539a83f3107b138bb6f541361f8b706c4b8303a898c8d1c9->enter($__internal_c8d02ba967fa48d9539a83f3107b138bb6f541361f8b706c4b8303a898c8d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8d02ba967fa48d9539a83f3107b138bb6f541361f8b706c4b8303a898c8d1c9->leave($__internal_c8d02ba967fa48d9539a83f3107b138bb6f541361f8b706c4b8303a898c8d1c9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_244df565189a7b581a833ad3b936dd700c4e9c15aa770656fdaf78a404ad635b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244df565189a7b581a833ad3b936dd700c4e9c15aa770656fdaf78a404ad635b->enter($__internal_244df565189a7b581a833ad3b936dd700c4e9c15aa770656fdaf78a404ad635b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_244df565189a7b581a833ad3b936dd700c4e9c15aa770656fdaf78a404ad635b->leave($__internal_244df565189a7b581a833ad3b936dd700c4e9c15aa770656fdaf78a404ad635b_prof);

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
