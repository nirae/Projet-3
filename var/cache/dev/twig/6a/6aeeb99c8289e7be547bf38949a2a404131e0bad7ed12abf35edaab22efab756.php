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
        $__internal_c4d8ec5de3f34376445f6c290330c91144a092d7aeb47314fd416153093288f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d8ec5de3f34376445f6c290330c91144a092d7aeb47314fd416153093288f2->enter($__internal_c4d8ec5de3f34376445f6c290330c91144a092d7aeb47314fd416153093288f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d8ec5de3f34376445f6c290330c91144a092d7aeb47314fd416153093288f2->leave($__internal_c4d8ec5de3f34376445f6c290330c91144a092d7aeb47314fd416153093288f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5905d9f249f99748103d67fb20adf32915f2222c0a76b95e1b55d737ffdfbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5905d9f249f99748103d67fb20adf32915f2222c0a76b95e1b55d737ffdfbff->enter($__internal_b5905d9f249f99748103d67fb20adf32915f2222c0a76b95e1b55d737ffdfbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5905d9f249f99748103d67fb20adf32915f2222c0a76b95e1b55d737ffdfbff->leave($__internal_b5905d9f249f99748103d67fb20adf32915f2222c0a76b95e1b55d737ffdfbff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a45e36c60e16e2683ca238be060021baf62e8c52be01c623f81532d4fc35993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a45e36c60e16e2683ca238be060021baf62e8c52be01c623f81532d4fc35993->enter($__internal_2a45e36c60e16e2683ca238be060021baf62e8c52be01c623f81532d4fc35993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a45e36c60e16e2683ca238be060021baf62e8c52be01c623f81532d4fc35993->leave($__internal_2a45e36c60e16e2683ca238be060021baf62e8c52be01c623f81532d4fc35993_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f2c0d984c3c0bb998cfcc1de40ee65f217fd4f28013c008c176c29b651c0b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2c0d984c3c0bb998cfcc1de40ee65f217fd4f28013c008c176c29b651c0b20->enter($__internal_3f2c0d984c3c0bb998cfcc1de40ee65f217fd4f28013c008c176c29b651c0b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f2c0d984c3c0bb998cfcc1de40ee65f217fd4f28013c008c176c29b651c0b20->leave($__internal_3f2c0d984c3c0bb998cfcc1de40ee65f217fd4f28013c008c176c29b651c0b20_prof);

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
