<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_42d501818395a3d99c96fa9776c74cebb09ec61f46b84604d243321feb94ed33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e4351f1ced3ddc023bb8fcf95084c8c4820ceea5e1c8a8adfd35b6ed202ecd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4351f1ced3ddc023bb8fcf95084c8c4820ceea5e1c8a8adfd35b6ed202ecd2b->enter($__internal_e4351f1ced3ddc023bb8fcf95084c8c4820ceea5e1c8a8adfd35b6ed202ecd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4351f1ced3ddc023bb8fcf95084c8c4820ceea5e1c8a8adfd35b6ed202ecd2b->leave($__internal_e4351f1ced3ddc023bb8fcf95084c8c4820ceea5e1c8a8adfd35b6ed202ecd2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34dc29dd654ce9e393a1a9aa1e77afc933e51532da5248659bf85a07bdeff620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34dc29dd654ce9e393a1a9aa1e77afc933e51532da5248659bf85a07bdeff620->enter($__internal_34dc29dd654ce9e393a1a9aa1e77afc933e51532da5248659bf85a07bdeff620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_34dc29dd654ce9e393a1a9aa1e77afc933e51532da5248659bf85a07bdeff620->leave($__internal_34dc29dd654ce9e393a1a9aa1e77afc933e51532da5248659bf85a07bdeff620_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb1dffdb3cc58d198fc5b9f64c163628e4348da6115e691deda7e7c518e27b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1dffdb3cc58d198fc5b9f64c163628e4348da6115e691deda7e7c518e27b5f->enter($__internal_cb1dffdb3cc58d198fc5b9f64c163628e4348da6115e691deda7e7c518e27b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cb1dffdb3cc58d198fc5b9f64c163628e4348da6115e691deda7e7c518e27b5f->leave($__internal_cb1dffdb3cc58d198fc5b9f64c163628e4348da6115e691deda7e7c518e27b5f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa40b4652ac44b0f4b12e9f969aa2b2e3c377ada2640b5e80a2cbbf8e1809707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa40b4652ac44b0f4b12e9f969aa2b2e3c377ada2640b5e80a2cbbf8e1809707->enter($__internal_fa40b4652ac44b0f4b12e9f969aa2b2e3c377ada2640b5e80a2cbbf8e1809707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fa40b4652ac44b0f4b12e9f969aa2b2e3c377ada2640b5e80a2cbbf8e1809707->leave($__internal_fa40b4652ac44b0f4b12e9f969aa2b2e3c377ada2640b5e80a2cbbf8e1809707_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
