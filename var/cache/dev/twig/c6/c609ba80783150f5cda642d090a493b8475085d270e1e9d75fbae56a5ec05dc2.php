<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5b21237400a53328588c452a2c0bdd335aae884c090222840693403337bfb613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31bbb035595e0a073b69dbe057ed9a66bde76a284b6e94cd1d1ba839396c3f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bbb035595e0a073b69dbe057ed9a66bde76a284b6e94cd1d1ba839396c3f32->enter($__internal_31bbb035595e0a073b69dbe057ed9a66bde76a284b6e94cd1d1ba839396c3f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_31bbb035595e0a073b69dbe057ed9a66bde76a284b6e94cd1d1ba839396c3f32->leave($__internal_31bbb035595e0a073b69dbe057ed9a66bde76a284b6e94cd1d1ba839396c3f32_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f9e0d925f89984baccdefc5eb50435145c823c9e5ab2ceadac8c495914651bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9e0d925f89984baccdefc5eb50435145c823c9e5ab2ceadac8c495914651bf->enter($__internal_8f9e0d925f89984baccdefc5eb50435145c823c9e5ab2ceadac8c495914651bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8f9e0d925f89984baccdefc5eb50435145c823c9e5ab2ceadac8c495914651bf->leave($__internal_8f9e0d925f89984baccdefc5eb50435145c823c9e5ab2ceadac8c495914651bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
