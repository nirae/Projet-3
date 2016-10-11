<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ae8bcba7aefab5f404d0bf5a0791bcd0d481796624188cd5dc563dce741fae92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b02607e5b5ae173844e5d5c1f1375a9381d95c05d97a7679e4c037d3a89d032b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02607e5b5ae173844e5d5c1f1375a9381d95c05d97a7679e4c037d3a89d032b->enter($__internal_b02607e5b5ae173844e5d5c1f1375a9381d95c05d97a7679e4c037d3a89d032b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b02607e5b5ae173844e5d5c1f1375a9381d95c05d97a7679e4c037d3a89d032b->leave($__internal_b02607e5b5ae173844e5d5c1f1375a9381d95c05d97a7679e4c037d3a89d032b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eed37b9307cae93d9e13b452b0827251903095810df4cbc89b01aaaa9b69cc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed37b9307cae93d9e13b452b0827251903095810df4cbc89b01aaaa9b69cc69->enter($__internal_eed37b9307cae93d9e13b452b0827251903095810df4cbc89b01aaaa9b69cc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eed37b9307cae93d9e13b452b0827251903095810df4cbc89b01aaaa9b69cc69->leave($__internal_eed37b9307cae93d9e13b452b0827251903095810df4cbc89b01aaaa9b69cc69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6babcd1fef5499c966c4aa58e65d68c62246ce0b0b168990309ce574cd2e4669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6babcd1fef5499c966c4aa58e65d68c62246ce0b0b168990309ce574cd2e4669->enter($__internal_6babcd1fef5499c966c4aa58e65d68c62246ce0b0b168990309ce574cd2e4669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6babcd1fef5499c966c4aa58e65d68c62246ce0b0b168990309ce574cd2e4669->leave($__internal_6babcd1fef5499c966c4aa58e65d68c62246ce0b0b168990309ce574cd2e4669_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1dec567d8206eb2949e9a27d9d37730b9f5718bc4d9bbb3e65c2fb7c1b8c3302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dec567d8206eb2949e9a27d9d37730b9f5718bc4d9bbb3e65c2fb7c1b8c3302->enter($__internal_1dec567d8206eb2949e9a27d9d37730b9f5718bc4d9bbb3e65c2fb7c1b8c3302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1dec567d8206eb2949e9a27d9d37730b9f5718bc4d9bbb3e65c2fb7c1b8c3302->leave($__internal_1dec567d8206eb2949e9a27d9d37730b9f5718bc4d9bbb3e65c2fb7c1b8c3302_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
