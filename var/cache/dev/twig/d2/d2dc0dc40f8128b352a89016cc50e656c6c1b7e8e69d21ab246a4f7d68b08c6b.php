<?php

/* base.html.twig */
class __TwigTemplate_dbba3c70e089dea84235b8340e875a5b7fc05eaa265d6ef8cc70a8e97d836bf4 extends Twig_Template
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
        $__internal_3888214bacc905bfeaecb0b2d8b45996abc5b828b42f2e31cbe80537b2897e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3888214bacc905bfeaecb0b2d8b45996abc5b828b42f2e31cbe80537b2897e41->enter($__internal_3888214bacc905bfeaecb0b2d8b45996abc5b828b42f2e31cbe80537b2897e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3888214bacc905bfeaecb0b2d8b45996abc5b828b42f2e31cbe80537b2897e41->leave($__internal_3888214bacc905bfeaecb0b2d8b45996abc5b828b42f2e31cbe80537b2897e41_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b5be367a3259d367c2944f97737f0375d92c89f4eb9b62033921c7fef1abd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5be367a3259d367c2944f97737f0375d92c89f4eb9b62033921c7fef1abd8d->enter($__internal_1b5be367a3259d367c2944f97737f0375d92c89f4eb9b62033921c7fef1abd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1b5be367a3259d367c2944f97737f0375d92c89f4eb9b62033921c7fef1abd8d->leave($__internal_1b5be367a3259d367c2944f97737f0375d92c89f4eb9b62033921c7fef1abd8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e61e8186241760793082ebde762992960782677ef4ae142de21ddfcdc536eecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61e8186241760793082ebde762992960782677ef4ae142de21ddfcdc536eecf->enter($__internal_e61e8186241760793082ebde762992960782677ef4ae142de21ddfcdc536eecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e61e8186241760793082ebde762992960782677ef4ae142de21ddfcdc536eecf->leave($__internal_e61e8186241760793082ebde762992960782677ef4ae142de21ddfcdc536eecf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dece617fd14b44dacddc8cab2b5853cbde898a87377fbf8fceee9635eb28e6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dece617fd14b44dacddc8cab2b5853cbde898a87377fbf8fceee9635eb28e6dd->enter($__internal_dece617fd14b44dacddc8cab2b5853cbde898a87377fbf8fceee9635eb28e6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dece617fd14b44dacddc8cab2b5853cbde898a87377fbf8fceee9635eb28e6dd->leave($__internal_dece617fd14b44dacddc8cab2b5853cbde898a87377fbf8fceee9635eb28e6dd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8fa3f60957f20ee1c2686315e9816ab1af52a5c5df517474f98ef2a4de4e9df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa3f60957f20ee1c2686315e9816ab1af52a5c5df517474f98ef2a4de4e9df0->enter($__internal_8fa3f60957f20ee1c2686315e9816ab1af52a5c5df517474f98ef2a4de4e9df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8fa3f60957f20ee1c2686315e9816ab1af52a5c5df517474f98ef2a4de4e9df0->leave($__internal_8fa3f60957f20ee1c2686315e9816ab1af52a5c5df517474f98ef2a4de4e9df0_prof);

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
