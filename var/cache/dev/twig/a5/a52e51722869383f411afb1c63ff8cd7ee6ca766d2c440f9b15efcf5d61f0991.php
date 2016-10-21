<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_552f0eb211a91d5fa643338b2efb49417b3bb4d7273d07c64c992d4da3d97a26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3caef9e168c78e6864b388790e4c60b4ca8819633aacf389f8fc67c6425f9ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3caef9e168c78e6864b388790e4c60b4ca8819633aacf389f8fc67c6425f9ee5->enter($__internal_3caef9e168c78e6864b388790e4c60b4ca8819633aacf389f8fc67c6425f9ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3caef9e168c78e6864b388790e4c60b4ca8819633aacf389f8fc67c6425f9ee5->leave($__internal_3caef9e168c78e6864b388790e4c60b4ca8819633aacf389f8fc67c6425f9ee5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9dc9b32fd97450fddef7c5ee253f9ab41804d6db2f044cee8046932d67f6cf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc9b32fd97450fddef7c5ee253f9ab41804d6db2f044cee8046932d67f6cf88->enter($__internal_9dc9b32fd97450fddef7c5ee253f9ab41804d6db2f044cee8046932d67f6cf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9dc9b32fd97450fddef7c5ee253f9ab41804d6db2f044cee8046932d67f6cf88->leave($__internal_9dc9b32fd97450fddef7c5ee253f9ab41804d6db2f044cee8046932d67f6cf88_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e61c8290f2f51251656378384049dc77158a14d951c5021f2912eee20dbf406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e61c8290f2f51251656378384049dc77158a14d951c5021f2912eee20dbf406->enter($__internal_8e61c8290f2f51251656378384049dc77158a14d951c5021f2912eee20dbf406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e61c8290f2f51251656378384049dc77158a14d951c5021f2912eee20dbf406->leave($__internal_8e61c8290f2f51251656378384049dc77158a14d951c5021f2912eee20dbf406_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1860d2e7e15b8f90c5de6f6ece81d3238569d15f8743c79c19c033e1393d278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1860d2e7e15b8f90c5de6f6ece81d3238569d15f8743c79c19c033e1393d278->enter($__internal_e1860d2e7e15b8f90c5de6f6ece81d3238569d15f8743c79c19c033e1393d278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1860d2e7e15b8f90c5de6f6ece81d3238569d15f8743c79c19c033e1393d278->leave($__internal_e1860d2e7e15b8f90c5de6f6ece81d3238569d15f8743c79c19c033e1393d278_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
