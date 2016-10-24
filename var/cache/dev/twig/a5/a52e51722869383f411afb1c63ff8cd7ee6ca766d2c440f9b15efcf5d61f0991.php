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
        $__internal_ab21183b30b1a63800882ec9684864833eaaa6fa64c8b177a34ea05708bbd3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab21183b30b1a63800882ec9684864833eaaa6fa64c8b177a34ea05708bbd3fc->enter($__internal_ab21183b30b1a63800882ec9684864833eaaa6fa64c8b177a34ea05708bbd3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab21183b30b1a63800882ec9684864833eaaa6fa64c8b177a34ea05708bbd3fc->leave($__internal_ab21183b30b1a63800882ec9684864833eaaa6fa64c8b177a34ea05708bbd3fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7581424b83ef89303cd7f5e474fd171f1dd6acf7034b6d7f4be3a703b3739b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7581424b83ef89303cd7f5e474fd171f1dd6acf7034b6d7f4be3a703b3739b06->enter($__internal_7581424b83ef89303cd7f5e474fd171f1dd6acf7034b6d7f4be3a703b3739b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7581424b83ef89303cd7f5e474fd171f1dd6acf7034b6d7f4be3a703b3739b06->leave($__internal_7581424b83ef89303cd7f5e474fd171f1dd6acf7034b6d7f4be3a703b3739b06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d80b42b09f92d84a74ba20b87b979f75215f16e5a28078e98641813cfe756d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80b42b09f92d84a74ba20b87b979f75215f16e5a28078e98641813cfe756d35->enter($__internal_d80b42b09f92d84a74ba20b87b979f75215f16e5a28078e98641813cfe756d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d80b42b09f92d84a74ba20b87b979f75215f16e5a28078e98641813cfe756d35->leave($__internal_d80b42b09f92d84a74ba20b87b979f75215f16e5a28078e98641813cfe756d35_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10ad61e59e7895beb52cbae6b363d2cc13a6325b6044aaa60bd2600c95cb4e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ad61e59e7895beb52cbae6b363d2cc13a6325b6044aaa60bd2600c95cb4e43->enter($__internal_10ad61e59e7895beb52cbae6b363d2cc13a6325b6044aaa60bd2600c95cb4e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10ad61e59e7895beb52cbae6b363d2cc13a6325b6044aaa60bd2600c95cb4e43->leave($__internal_10ad61e59e7895beb52cbae6b363d2cc13a6325b6044aaa60bd2600c95cb4e43_prof);

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
