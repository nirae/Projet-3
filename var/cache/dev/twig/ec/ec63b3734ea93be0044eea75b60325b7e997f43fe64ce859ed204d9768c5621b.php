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
        $__internal_9c7fa2547b87114ed138dceb8987f204c952f81b683e81e4446d082fa314f4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7fa2547b87114ed138dceb8987f204c952f81b683e81e4446d082fa314f4e9->enter($__internal_9c7fa2547b87114ed138dceb8987f204c952f81b683e81e4446d082fa314f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9c7fa2547b87114ed138dceb8987f204c952f81b683e81e4446d082fa314f4e9->leave($__internal_9c7fa2547b87114ed138dceb8987f204c952f81b683e81e4446d082fa314f4e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d067e14a6e2c99da14d2fcd5702980034247c286b1304aa841d045618a40210a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d067e14a6e2c99da14d2fcd5702980034247c286b1304aa841d045618a40210a->enter($__internal_d067e14a6e2c99da14d2fcd5702980034247c286b1304aa841d045618a40210a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d067e14a6e2c99da14d2fcd5702980034247c286b1304aa841d045618a40210a->leave($__internal_d067e14a6e2c99da14d2fcd5702980034247c286b1304aa841d045618a40210a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc02a7741a9c2343b94901adabcfa9d65e6314348cd1625a3007aa5eaa3f6922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc02a7741a9c2343b94901adabcfa9d65e6314348cd1625a3007aa5eaa3f6922->enter($__internal_cc02a7741a9c2343b94901adabcfa9d65e6314348cd1625a3007aa5eaa3f6922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc02a7741a9c2343b94901adabcfa9d65e6314348cd1625a3007aa5eaa3f6922->leave($__internal_cc02a7741a9c2343b94901adabcfa9d65e6314348cd1625a3007aa5eaa3f6922_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_61c1d2c241ddef076bba846e5c4976d69c29f06531cbff79bc00ca8690c89ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c1d2c241ddef076bba846e5c4976d69c29f06531cbff79bc00ca8690c89ad7->enter($__internal_61c1d2c241ddef076bba846e5c4976d69c29f06531cbff79bc00ca8690c89ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61c1d2c241ddef076bba846e5c4976d69c29f06531cbff79bc00ca8690c89ad7->leave($__internal_61c1d2c241ddef076bba846e5c4976d69c29f06531cbff79bc00ca8690c89ad7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6e2ea3310201f52319c5494a8def42b773c2f5b82e76b043632fa8c57ad3cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e2ea3310201f52319c5494a8def42b773c2f5b82e76b043632fa8c57ad3cba->enter($__internal_d6e2ea3310201f52319c5494a8def42b773c2f5b82e76b043632fa8c57ad3cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d6e2ea3310201f52319c5494a8def42b773c2f5b82e76b043632fa8c57ad3cba->leave($__internal_d6e2ea3310201f52319c5494a8def42b773c2f5b82e76b043632fa8c57ad3cba_prof);

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
