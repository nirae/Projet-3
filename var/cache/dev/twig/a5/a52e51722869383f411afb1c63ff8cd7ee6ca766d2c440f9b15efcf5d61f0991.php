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
        $__internal_cc42c1f85fbb70a8990f636dff5758bedad734481a4fe3e783787e43125d3f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc42c1f85fbb70a8990f636dff5758bedad734481a4fe3e783787e43125d3f2a->enter($__internal_cc42c1f85fbb70a8990f636dff5758bedad734481a4fe3e783787e43125d3f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc42c1f85fbb70a8990f636dff5758bedad734481a4fe3e783787e43125d3f2a->leave($__internal_cc42c1f85fbb70a8990f636dff5758bedad734481a4fe3e783787e43125d3f2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4626d9aef9f9ecabaf72e821f370f2f07cefb283dd36bc56ce869df7d8562cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4626d9aef9f9ecabaf72e821f370f2f07cefb283dd36bc56ce869df7d8562cae->enter($__internal_4626d9aef9f9ecabaf72e821f370f2f07cefb283dd36bc56ce869df7d8562cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4626d9aef9f9ecabaf72e821f370f2f07cefb283dd36bc56ce869df7d8562cae->leave($__internal_4626d9aef9f9ecabaf72e821f370f2f07cefb283dd36bc56ce869df7d8562cae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fc3289f64ed407e6cf4c3e6e1c5899d25bef8e2080e89479c05fd93b904b465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc3289f64ed407e6cf4c3e6e1c5899d25bef8e2080e89479c05fd93b904b465->enter($__internal_6fc3289f64ed407e6cf4c3e6e1c5899d25bef8e2080e89479c05fd93b904b465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6fc3289f64ed407e6cf4c3e6e1c5899d25bef8e2080e89479c05fd93b904b465->leave($__internal_6fc3289f64ed407e6cf4c3e6e1c5899d25bef8e2080e89479c05fd93b904b465_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a320d89e28c86e7438572e80c30fbd960fbe5cb58919cb4d4292cb11c2bc19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a320d89e28c86e7438572e80c30fbd960fbe5cb58919cb4d4292cb11c2bc19a->enter($__internal_9a320d89e28c86e7438572e80c30fbd960fbe5cb58919cb4d4292cb11c2bc19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a320d89e28c86e7438572e80c30fbd960fbe5cb58919cb4d4292cb11c2bc19a->leave($__internal_9a320d89e28c86e7438572e80c30fbd960fbe5cb58919cb4d4292cb11c2bc19a_prof);

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
