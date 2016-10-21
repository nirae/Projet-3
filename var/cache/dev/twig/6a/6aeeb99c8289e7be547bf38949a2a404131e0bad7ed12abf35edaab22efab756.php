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
        $__internal_23f4510b8906aeae26ed47e6d2c92943e6607d3ceb53a2f9e3a3ee1d1dca63b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f4510b8906aeae26ed47e6d2c92943e6607d3ceb53a2f9e3a3ee1d1dca63b7->enter($__internal_23f4510b8906aeae26ed47e6d2c92943e6607d3ceb53a2f9e3a3ee1d1dca63b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23f4510b8906aeae26ed47e6d2c92943e6607d3ceb53a2f9e3a3ee1d1dca63b7->leave($__internal_23f4510b8906aeae26ed47e6d2c92943e6607d3ceb53a2f9e3a3ee1d1dca63b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8813eb0db3a1f0009680ffb701e5ca8e653e087daa25b877b943e2c0bd2883d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8813eb0db3a1f0009680ffb701e5ca8e653e087daa25b877b943e2c0bd2883d->enter($__internal_c8813eb0db3a1f0009680ffb701e5ca8e653e087daa25b877b943e2c0bd2883d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8813eb0db3a1f0009680ffb701e5ca8e653e087daa25b877b943e2c0bd2883d->leave($__internal_c8813eb0db3a1f0009680ffb701e5ca8e653e087daa25b877b943e2c0bd2883d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b43680273c1986aa5d2cfcf2d3d80cbb8f1a3c0cb912b224293148ab2e3a14f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43680273c1986aa5d2cfcf2d3d80cbb8f1a3c0cb912b224293148ab2e3a14f8->enter($__internal_b43680273c1986aa5d2cfcf2d3d80cbb8f1a3c0cb912b224293148ab2e3a14f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b43680273c1986aa5d2cfcf2d3d80cbb8f1a3c0cb912b224293148ab2e3a14f8->leave($__internal_b43680273c1986aa5d2cfcf2d3d80cbb8f1a3c0cb912b224293148ab2e3a14f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0226d57c02ff7f0e96c35f9917f1474c69d41068d459fe14e8dd9c458d36c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0226d57c02ff7f0e96c35f9917f1474c69d41068d459fe14e8dd9c458d36c14->enter($__internal_e0226d57c02ff7f0e96c35f9917f1474c69d41068d459fe14e8dd9c458d36c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0226d57c02ff7f0e96c35f9917f1474c69d41068d459fe14e8dd9c458d36c14->leave($__internal_e0226d57c02ff7f0e96c35f9917f1474c69d41068d459fe14e8dd9c458d36c14_prof);

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
