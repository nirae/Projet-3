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
        $__internal_8c97951b4e4526e0a464c6437b9a7b9840c231df5fbd6f274c5ff365d39606a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c97951b4e4526e0a464c6437b9a7b9840c231df5fbd6f274c5ff365d39606a6->enter($__internal_8c97951b4e4526e0a464c6437b9a7b9840c231df5fbd6f274c5ff365d39606a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c97951b4e4526e0a464c6437b9a7b9840c231df5fbd6f274c5ff365d39606a6->leave($__internal_8c97951b4e4526e0a464c6437b9a7b9840c231df5fbd6f274c5ff365d39606a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94caad011cd42b7581eb893f2573c76920a97997160b0112d92397ee6fc74c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94caad011cd42b7581eb893f2573c76920a97997160b0112d92397ee6fc74c7f->enter($__internal_94caad011cd42b7581eb893f2573c76920a97997160b0112d92397ee6fc74c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94caad011cd42b7581eb893f2573c76920a97997160b0112d92397ee6fc74c7f->leave($__internal_94caad011cd42b7581eb893f2573c76920a97997160b0112d92397ee6fc74c7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65113df5c44ef9c7d7cbc3d22e9889c020ac0b3cf712bab88465a5ddfbafac2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65113df5c44ef9c7d7cbc3d22e9889c020ac0b3cf712bab88465a5ddfbafac2a->enter($__internal_65113df5c44ef9c7d7cbc3d22e9889c020ac0b3cf712bab88465a5ddfbafac2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_65113df5c44ef9c7d7cbc3d22e9889c020ac0b3cf712bab88465a5ddfbafac2a->leave($__internal_65113df5c44ef9c7d7cbc3d22e9889c020ac0b3cf712bab88465a5ddfbafac2a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cba886c9b166fec96c920a66c6507a980c4481c2084c4c3418b35431cdf6bf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba886c9b166fec96c920a66c6507a980c4481c2084c4c3418b35431cdf6bf0b->enter($__internal_cba886c9b166fec96c920a66c6507a980c4481c2084c4c3418b35431cdf6bf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cba886c9b166fec96c920a66c6507a980c4481c2084c4c3418b35431cdf6bf0b->leave($__internal_cba886c9b166fec96c920a66c6507a980c4481c2084c4c3418b35431cdf6bf0b_prof);

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
