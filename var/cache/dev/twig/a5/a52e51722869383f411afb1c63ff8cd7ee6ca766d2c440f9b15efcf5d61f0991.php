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
        $__internal_d4bd544629d5eb9aa2d8198527f573a5b6b447f249fab9a0307b28975b0519cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bd544629d5eb9aa2d8198527f573a5b6b447f249fab9a0307b28975b0519cd->enter($__internal_d4bd544629d5eb9aa2d8198527f573a5b6b447f249fab9a0307b28975b0519cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4bd544629d5eb9aa2d8198527f573a5b6b447f249fab9a0307b28975b0519cd->leave($__internal_d4bd544629d5eb9aa2d8198527f573a5b6b447f249fab9a0307b28975b0519cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8984b6c6a43284e59fd99587ece0cba675119160fe484c4f5b46843a27000eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8984b6c6a43284e59fd99587ece0cba675119160fe484c4f5b46843a27000eb9->enter($__internal_8984b6c6a43284e59fd99587ece0cba675119160fe484c4f5b46843a27000eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8984b6c6a43284e59fd99587ece0cba675119160fe484c4f5b46843a27000eb9->leave($__internal_8984b6c6a43284e59fd99587ece0cba675119160fe484c4f5b46843a27000eb9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef3558e54030435b6aad9fd2611c033c6adcae669a6648bd22df3b075d5e6ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3558e54030435b6aad9fd2611c033c6adcae669a6648bd22df3b075d5e6ab4->enter($__internal_ef3558e54030435b6aad9fd2611c033c6adcae669a6648bd22df3b075d5e6ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef3558e54030435b6aad9fd2611c033c6adcae669a6648bd22df3b075d5e6ab4->leave($__internal_ef3558e54030435b6aad9fd2611c033c6adcae669a6648bd22df3b075d5e6ab4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e5b2016f6272e7f5fbd1fa4a4396a7b044037aaafabedf4d492e6b2e61b9e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5b2016f6272e7f5fbd1fa4a4396a7b044037aaafabedf4d492e6b2e61b9e43->enter($__internal_9e5b2016f6272e7f5fbd1fa4a4396a7b044037aaafabedf4d492e6b2e61b9e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e5b2016f6272e7f5fbd1fa4a4396a7b044037aaafabedf4d492e6b2e61b9e43->leave($__internal_9e5b2016f6272e7f5fbd1fa4a4396a7b044037aaafabedf4d492e6b2e61b9e43_prof);

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
