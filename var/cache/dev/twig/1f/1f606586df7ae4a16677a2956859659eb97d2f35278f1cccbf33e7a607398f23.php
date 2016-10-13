<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2b1f1eff28d63ecfd9cf8df6d104d34d9c9ae55e760b0de8ad2833be0ccf63dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54f5f6869e49668121054ebe430229ca2fa6bf985235db8d12dd8d2be5e19aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f5f6869e49668121054ebe430229ca2fa6bf985235db8d12dd8d2be5e19aff->enter($__internal_54f5f6869e49668121054ebe430229ca2fa6bf985235db8d12dd8d2be5e19aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f5f6869e49668121054ebe430229ca2fa6bf985235db8d12dd8d2be5e19aff->leave($__internal_54f5f6869e49668121054ebe430229ca2fa6bf985235db8d12dd8d2be5e19aff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f16c08a3890e685b6380e38eeac1aed0e98c93f1b10dd11c83b0fe6078c4cce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16c08a3890e685b6380e38eeac1aed0e98c93f1b10dd11c83b0fe6078c4cce8->enter($__internal_f16c08a3890e685b6380e38eeac1aed0e98c93f1b10dd11c83b0fe6078c4cce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f16c08a3890e685b6380e38eeac1aed0e98c93f1b10dd11c83b0fe6078c4cce8->leave($__internal_f16c08a3890e685b6380e38eeac1aed0e98c93f1b10dd11c83b0fe6078c4cce8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c6a5dfa2b0b4628e5fdf3044ebe6a322907d190c75c34fce150ccecd50a44d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6a5dfa2b0b4628e5fdf3044ebe6a322907d190c75c34fce150ccecd50a44d5->enter($__internal_4c6a5dfa2b0b4628e5fdf3044ebe6a322907d190c75c34fce150ccecd50a44d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c6a5dfa2b0b4628e5fdf3044ebe6a322907d190c75c34fce150ccecd50a44d5->leave($__internal_4c6a5dfa2b0b4628e5fdf3044ebe6a322907d190c75c34fce150ccecd50a44d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8785a3632c835a274dae29825d738efc3754a930e5b462b0bcedb53f578eaacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8785a3632c835a274dae29825d738efc3754a930e5b462b0bcedb53f578eaacc->enter($__internal_8785a3632c835a274dae29825d738efc3754a930e5b462b0bcedb53f578eaacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8785a3632c835a274dae29825d738efc3754a930e5b462b0bcedb53f578eaacc->leave($__internal_8785a3632c835a274dae29825d738efc3754a930e5b462b0bcedb53f578eaacc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
