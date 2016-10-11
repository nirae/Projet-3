<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aad2a9b61d48d668c34203f079d0e183642cbb1c02483ebe0b50037dab07dd06 extends Twig_Template
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
        $__internal_e2ba3a20097ec0305c21127482adac5beffbb7f2077b4c400978560b34cc15ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ba3a20097ec0305c21127482adac5beffbb7f2077b4c400978560b34cc15ce->enter($__internal_e2ba3a20097ec0305c21127482adac5beffbb7f2077b4c400978560b34cc15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ba3a20097ec0305c21127482adac5beffbb7f2077b4c400978560b34cc15ce->leave($__internal_e2ba3a20097ec0305c21127482adac5beffbb7f2077b4c400978560b34cc15ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f48daf0f4e4d8e3c817d21dfb2bb19f15edaaaee136e42e70b953659c77d53ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48daf0f4e4d8e3c817d21dfb2bb19f15edaaaee136e42e70b953659c77d53ae->enter($__internal_f48daf0f4e4d8e3c817d21dfb2bb19f15edaaaee136e42e70b953659c77d53ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f48daf0f4e4d8e3c817d21dfb2bb19f15edaaaee136e42e70b953659c77d53ae->leave($__internal_f48daf0f4e4d8e3c817d21dfb2bb19f15edaaaee136e42e70b953659c77d53ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d47b0fc7babefdf82c8aa3e3a79a751ffc2462a5b7047b2e10f4f5e6ef78020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d47b0fc7babefdf82c8aa3e3a79a751ffc2462a5b7047b2e10f4f5e6ef78020->enter($__internal_8d47b0fc7babefdf82c8aa3e3a79a751ffc2462a5b7047b2e10f4f5e6ef78020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d47b0fc7babefdf82c8aa3e3a79a751ffc2462a5b7047b2e10f4f5e6ef78020->leave($__internal_8d47b0fc7babefdf82c8aa3e3a79a751ffc2462a5b7047b2e10f4f5e6ef78020_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c849fca18f1a78d74cebd49eede5b64326c6bc747f61a3e8a42649c966eeec06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c849fca18f1a78d74cebd49eede5b64326c6bc747f61a3e8a42649c966eeec06->enter($__internal_c849fca18f1a78d74cebd49eede5b64326c6bc747f61a3e8a42649c966eeec06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c849fca18f1a78d74cebd49eede5b64326c6bc747f61a3e8a42649c966eeec06->leave($__internal_c849fca18f1a78d74cebd49eede5b64326c6bc747f61a3e8a42649c966eeec06_prof);

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
