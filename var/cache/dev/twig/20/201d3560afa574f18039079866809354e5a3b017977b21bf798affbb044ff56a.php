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
        $__internal_375571c5508752211e6631f4a93b887c6c21fb016acbd199095b38a1106079aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375571c5508752211e6631f4a93b887c6c21fb016acbd199095b38a1106079aa->enter($__internal_375571c5508752211e6631f4a93b887c6c21fb016acbd199095b38a1106079aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375571c5508752211e6631f4a93b887c6c21fb016acbd199095b38a1106079aa->leave($__internal_375571c5508752211e6631f4a93b887c6c21fb016acbd199095b38a1106079aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6a34f7f2f2d4f10d0bbd71d0b7e92882e7e1b2f0f90194981c2c6d70f9d5e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a34f7f2f2d4f10d0bbd71d0b7e92882e7e1b2f0f90194981c2c6d70f9d5e9d->enter($__internal_f6a34f7f2f2d4f10d0bbd71d0b7e92882e7e1b2f0f90194981c2c6d70f9d5e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f6a34f7f2f2d4f10d0bbd71d0b7e92882e7e1b2f0f90194981c2c6d70f9d5e9d->leave($__internal_f6a34f7f2f2d4f10d0bbd71d0b7e92882e7e1b2f0f90194981c2c6d70f9d5e9d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fe335d2c746289b2aeab53a76bd032107c8c95bec762debd6f921048963bb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe335d2c746289b2aeab53a76bd032107c8c95bec762debd6f921048963bb71->enter($__internal_9fe335d2c746289b2aeab53a76bd032107c8c95bec762debd6f921048963bb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9fe335d2c746289b2aeab53a76bd032107c8c95bec762debd6f921048963bb71->leave($__internal_9fe335d2c746289b2aeab53a76bd032107c8c95bec762debd6f921048963bb71_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec60554f544c95509b6784dad96847f51e7a9c2165e5992cbde09060c85153ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec60554f544c95509b6784dad96847f51e7a9c2165e5992cbde09060c85153ea->enter($__internal_ec60554f544c95509b6784dad96847f51e7a9c2165e5992cbde09060c85153ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ec60554f544c95509b6784dad96847f51e7a9c2165e5992cbde09060c85153ea->leave($__internal_ec60554f544c95509b6784dad96847f51e7a9c2165e5992cbde09060c85153ea_prof);

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
