<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_44b0b2d41f5b62536c2d095a33033b1e50f3972324af461838f1fa8ca6f02587 extends Twig_Template
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
        $__internal_1b85248594dc63067558302e5e22898b5f36ebc706ca9bae9f880b95dcd971a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b85248594dc63067558302e5e22898b5f36ebc706ca9bae9f880b95dcd971a2->enter($__internal_1b85248594dc63067558302e5e22898b5f36ebc706ca9bae9f880b95dcd971a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1b85248594dc63067558302e5e22898b5f36ebc706ca9bae9f880b95dcd971a2->leave($__internal_1b85248594dc63067558302e5e22898b5f36ebc706ca9bae9f880b95dcd971a2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e35627a8b1360f73c628a474f5d18b31e9f0baf0b0029e7a72e8f641fdb29a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e35627a8b1360f73c628a474f5d18b31e9f0baf0b0029e7a72e8f641fdb29a7->enter($__internal_7e35627a8b1360f73c628a474f5d18b31e9f0baf0b0029e7a72e8f641fdb29a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7e35627a8b1360f73c628a474f5d18b31e9f0baf0b0029e7a72e8f641fdb29a7->leave($__internal_7e35627a8b1360f73c628a474f5d18b31e9f0baf0b0029e7a72e8f641fdb29a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
