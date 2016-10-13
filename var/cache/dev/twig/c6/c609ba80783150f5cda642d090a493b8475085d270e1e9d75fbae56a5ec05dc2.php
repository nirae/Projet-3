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
        $__internal_92613bd7ed160bbc70e84233a0ec49da4e485b4259678f14d3d018a752fe7ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92613bd7ed160bbc70e84233a0ec49da4e485b4259678f14d3d018a752fe7ec8->enter($__internal_92613bd7ed160bbc70e84233a0ec49da4e485b4259678f14d3d018a752fe7ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_92613bd7ed160bbc70e84233a0ec49da4e485b4259678f14d3d018a752fe7ec8->leave($__internal_92613bd7ed160bbc70e84233a0ec49da4e485b4259678f14d3d018a752fe7ec8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_17eb98a0dff72a7832ffc0c20873eac038afff88c25b4ab7416fc0816f2d71f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17eb98a0dff72a7832ffc0c20873eac038afff88c25b4ab7416fc0816f2d71f6->enter($__internal_17eb98a0dff72a7832ffc0c20873eac038afff88c25b4ab7416fc0816f2d71f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_17eb98a0dff72a7832ffc0c20873eac038afff88c25b4ab7416fc0816f2d71f6->leave($__internal_17eb98a0dff72a7832ffc0c20873eac038afff88c25b4ab7416fc0816f2d71f6_prof);

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
