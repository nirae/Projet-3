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
        $__internal_63e1d5258a8fe7f7463407b5c5832598ff00c4fa5e084040c953935bf0c82958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e1d5258a8fe7f7463407b5c5832598ff00c4fa5e084040c953935bf0c82958->enter($__internal_63e1d5258a8fe7f7463407b5c5832598ff00c4fa5e084040c953935bf0c82958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e1d5258a8fe7f7463407b5c5832598ff00c4fa5e084040c953935bf0c82958->leave($__internal_63e1d5258a8fe7f7463407b5c5832598ff00c4fa5e084040c953935bf0c82958_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1dc2580f8e9b0a23414b910f3a2cef9d0e370be8ce2c31d5adbfb02b545627bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc2580f8e9b0a23414b910f3a2cef9d0e370be8ce2c31d5adbfb02b545627bb->enter($__internal_1dc2580f8e9b0a23414b910f3a2cef9d0e370be8ce2c31d5adbfb02b545627bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1dc2580f8e9b0a23414b910f3a2cef9d0e370be8ce2c31d5adbfb02b545627bb->leave($__internal_1dc2580f8e9b0a23414b910f3a2cef9d0e370be8ce2c31d5adbfb02b545627bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_733d0fe43aecb754945b2c998200c333273f76f3627d405b1a9457ca0ad5986f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733d0fe43aecb754945b2c998200c333273f76f3627d405b1a9457ca0ad5986f->enter($__internal_733d0fe43aecb754945b2c998200c333273f76f3627d405b1a9457ca0ad5986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_733d0fe43aecb754945b2c998200c333273f76f3627d405b1a9457ca0ad5986f->leave($__internal_733d0fe43aecb754945b2c998200c333273f76f3627d405b1a9457ca0ad5986f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4172ce87c9ed5e4d99d8f3c3b6deb3ea3d4d57870e95bc0d8482c2a48c1e7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4172ce87c9ed5e4d99d8f3c3b6deb3ea3d4d57870e95bc0d8482c2a48c1e7d5->enter($__internal_b4172ce87c9ed5e4d99d8f3c3b6deb3ea3d4d57870e95bc0d8482c2a48c1e7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4172ce87c9ed5e4d99d8f3c3b6deb3ea3d4d57870e95bc0d8482c2a48c1e7d5->leave($__internal_b4172ce87c9ed5e4d99d8f3c3b6deb3ea3d4d57870e95bc0d8482c2a48c1e7d5_prof);

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
