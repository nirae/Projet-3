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
        $__internal_dd012fa0b6726b712c496987ea8d9dd0b7317974c703e3dee5009679056c2d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd012fa0b6726b712c496987ea8d9dd0b7317974c703e3dee5009679056c2d1e->enter($__internal_dd012fa0b6726b712c496987ea8d9dd0b7317974c703e3dee5009679056c2d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd012fa0b6726b712c496987ea8d9dd0b7317974c703e3dee5009679056c2d1e->leave($__internal_dd012fa0b6726b712c496987ea8d9dd0b7317974c703e3dee5009679056c2d1e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ff675000ec42645f3eafab1a609ac4332fd20c9d0ae857bf21ae912bf29cfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff675000ec42645f3eafab1a609ac4332fd20c9d0ae857bf21ae912bf29cfcd->enter($__internal_3ff675000ec42645f3eafab1a609ac4332fd20c9d0ae857bf21ae912bf29cfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ff675000ec42645f3eafab1a609ac4332fd20c9d0ae857bf21ae912bf29cfcd->leave($__internal_3ff675000ec42645f3eafab1a609ac4332fd20c9d0ae857bf21ae912bf29cfcd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a83f03d65d9697cd7fa8f54c11ee3f6170940bf242527d4988cf8b6a0fa9ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a83f03d65d9697cd7fa8f54c11ee3f6170940bf242527d4988cf8b6a0fa9ea1->enter($__internal_5a83f03d65d9697cd7fa8f54c11ee3f6170940bf242527d4988cf8b6a0fa9ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a83f03d65d9697cd7fa8f54c11ee3f6170940bf242527d4988cf8b6a0fa9ea1->leave($__internal_5a83f03d65d9697cd7fa8f54c11ee3f6170940bf242527d4988cf8b6a0fa9ea1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1bf66e0b4ccb48684e75dd56be7ec3c936f64ca74cf865adcb928d05f08f7022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf66e0b4ccb48684e75dd56be7ec3c936f64ca74cf865adcb928d05f08f7022->enter($__internal_1bf66e0b4ccb48684e75dd56be7ec3c936f64ca74cf865adcb928d05f08f7022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1bf66e0b4ccb48684e75dd56be7ec3c936f64ca74cf865adcb928d05f08f7022->leave($__internal_1bf66e0b4ccb48684e75dd56be7ec3c936f64ca74cf865adcb928d05f08f7022_prof);

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
