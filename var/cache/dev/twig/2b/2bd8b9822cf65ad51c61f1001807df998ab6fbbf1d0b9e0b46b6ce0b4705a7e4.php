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
        $__internal_b90f556e2630ce29b82704cacb0bdd7ab22287b0fb29c9bd1201ac36a6da8c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90f556e2630ce29b82704cacb0bdd7ab22287b0fb29c9bd1201ac36a6da8c5f->enter($__internal_b90f556e2630ce29b82704cacb0bdd7ab22287b0fb29c9bd1201ac36a6da8c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b90f556e2630ce29b82704cacb0bdd7ab22287b0fb29c9bd1201ac36a6da8c5f->leave($__internal_b90f556e2630ce29b82704cacb0bdd7ab22287b0fb29c9bd1201ac36a6da8c5f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_003b017e0cd4852c18f55e691be3543136174c1ec44f21b5a50c03b7cbfae960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003b017e0cd4852c18f55e691be3543136174c1ec44f21b5a50c03b7cbfae960->enter($__internal_003b017e0cd4852c18f55e691be3543136174c1ec44f21b5a50c03b7cbfae960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_003b017e0cd4852c18f55e691be3543136174c1ec44f21b5a50c03b7cbfae960->leave($__internal_003b017e0cd4852c18f55e691be3543136174c1ec44f21b5a50c03b7cbfae960_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e28b308e43c9f6c94005391c357cb27b4d7ff2fc52e29138aefdb3df22c4b3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28b308e43c9f6c94005391c357cb27b4d7ff2fc52e29138aefdb3df22c4b3c1->enter($__internal_e28b308e43c9f6c94005391c357cb27b4d7ff2fc52e29138aefdb3df22c4b3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e28b308e43c9f6c94005391c357cb27b4d7ff2fc52e29138aefdb3df22c4b3c1->leave($__internal_e28b308e43c9f6c94005391c357cb27b4d7ff2fc52e29138aefdb3df22c4b3c1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40eb72cf621d22ce92076d5b8f4d9c8e52656378152d1b3b273f769ddaf360a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40eb72cf621d22ce92076d5b8f4d9c8e52656378152d1b3b273f769ddaf360a->enter($__internal_b40eb72cf621d22ce92076d5b8f4d9c8e52656378152d1b3b273f769ddaf360a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b40eb72cf621d22ce92076d5b8f4d9c8e52656378152d1b3b273f769ddaf360a->leave($__internal_b40eb72cf621d22ce92076d5b8f4d9c8e52656378152d1b3b273f769ddaf360a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8940b51acab35682872205754be2f6d20897e9e73f75bc9ad24d9f67cdf593f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8940b51acab35682872205754be2f6d20897e9e73f75bc9ad24d9f67cdf593f->enter($__internal_f8940b51acab35682872205754be2f6d20897e9e73f75bc9ad24d9f67cdf593f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f8940b51acab35682872205754be2f6d20897e9e73f75bc9ad24d9f67cdf593f->leave($__internal_f8940b51acab35682872205754be2f6d20897e9e73f75bc9ad24d9f67cdf593f_prof);

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
