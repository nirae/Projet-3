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
        $__internal_aab2106db2e24894261dc6ed76de206dbc148628e510b3fe4d0b916b864908b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab2106db2e24894261dc6ed76de206dbc148628e510b3fe4d0b916b864908b7->enter($__internal_aab2106db2e24894261dc6ed76de206dbc148628e510b3fe4d0b916b864908b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_aab2106db2e24894261dc6ed76de206dbc148628e510b3fe4d0b916b864908b7->leave($__internal_aab2106db2e24894261dc6ed76de206dbc148628e510b3fe4d0b916b864908b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a93509154a39d71c408a830a60cb4158b8df9787a4fa9c76c1776bc7c507246f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93509154a39d71c408a830a60cb4158b8df9787a4fa9c76c1776bc7c507246f->enter($__internal_a93509154a39d71c408a830a60cb4158b8df9787a4fa9c76c1776bc7c507246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a93509154a39d71c408a830a60cb4158b8df9787a4fa9c76c1776bc7c507246f->leave($__internal_a93509154a39d71c408a830a60cb4158b8df9787a4fa9c76c1776bc7c507246f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de1ae32a7f370ba778d308f7e7a4399734459ad3899c6ddb286aa601b517c16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1ae32a7f370ba778d308f7e7a4399734459ad3899c6ddb286aa601b517c16d->enter($__internal_de1ae32a7f370ba778d308f7e7a4399734459ad3899c6ddb286aa601b517c16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_de1ae32a7f370ba778d308f7e7a4399734459ad3899c6ddb286aa601b517c16d->leave($__internal_de1ae32a7f370ba778d308f7e7a4399734459ad3899c6ddb286aa601b517c16d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da00b1d443c78f7b50775a610571119934e231c21fd961fcd35260d3010cbc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da00b1d443c78f7b50775a610571119934e231c21fd961fcd35260d3010cbc0b->enter($__internal_da00b1d443c78f7b50775a610571119934e231c21fd961fcd35260d3010cbc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da00b1d443c78f7b50775a610571119934e231c21fd961fcd35260d3010cbc0b->leave($__internal_da00b1d443c78f7b50775a610571119934e231c21fd961fcd35260d3010cbc0b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_565a41327e1488c3d35ed1f2edbb8e4f415d92d73f3ea925fe721baff7586c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565a41327e1488c3d35ed1f2edbb8e4f415d92d73f3ea925fe721baff7586c76->enter($__internal_565a41327e1488c3d35ed1f2edbb8e4f415d92d73f3ea925fe721baff7586c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_565a41327e1488c3d35ed1f2edbb8e4f415d92d73f3ea925fe721baff7586c76->leave($__internal_565a41327e1488c3d35ed1f2edbb8e4f415d92d73f3ea925fe721baff7586c76_prof);

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
