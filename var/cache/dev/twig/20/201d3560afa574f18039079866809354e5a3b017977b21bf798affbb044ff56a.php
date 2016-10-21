<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_305e7f150d9920f2dfb6dcc4735f45a034df9ad486a0872f09d9233e2a021a48 extends Twig_Template
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
        $__internal_d51f92e81aad39766d2b9aca6a405cef8409e87351bb687a631c52409e3c3d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51f92e81aad39766d2b9aca6a405cef8409e87351bb687a631c52409e3c3d65->enter($__internal_d51f92e81aad39766d2b9aca6a405cef8409e87351bb687a631c52409e3c3d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51f92e81aad39766d2b9aca6a405cef8409e87351bb687a631c52409e3c3d65->leave($__internal_d51f92e81aad39766d2b9aca6a405cef8409e87351bb687a631c52409e3c3d65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c847d4ba8863845e956df4a2d663f9b20ec59007a8caf22a0c1b102feb455c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c847d4ba8863845e956df4a2d663f9b20ec59007a8caf22a0c1b102feb455c6b->enter($__internal_c847d4ba8863845e956df4a2d663f9b20ec59007a8caf22a0c1b102feb455c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c847d4ba8863845e956df4a2d663f9b20ec59007a8caf22a0c1b102feb455c6b->leave($__internal_c847d4ba8863845e956df4a2d663f9b20ec59007a8caf22a0c1b102feb455c6b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f8ed40e2492f6ea686b629ff73a35613fba2bef29980ee8e6d0a33cf7243bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8ed40e2492f6ea686b629ff73a35613fba2bef29980ee8e6d0a33cf7243bbf->enter($__internal_4f8ed40e2492f6ea686b629ff73a35613fba2bef29980ee8e6d0a33cf7243bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4f8ed40e2492f6ea686b629ff73a35613fba2bef29980ee8e6d0a33cf7243bbf->leave($__internal_4f8ed40e2492f6ea686b629ff73a35613fba2bef29980ee8e6d0a33cf7243bbf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0547df2b63dd8138350b4e18af6c3138a92f94be233f595236f00d139ef7469c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0547df2b63dd8138350b4e18af6c3138a92f94be233f595236f00d139ef7469c->enter($__internal_0547df2b63dd8138350b4e18af6c3138a92f94be233f595236f00d139ef7469c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0547df2b63dd8138350b4e18af6c3138a92f94be233f595236f00d139ef7469c->leave($__internal_0547df2b63dd8138350b4e18af6c3138a92f94be233f595236f00d139ef7469c_prof);

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
