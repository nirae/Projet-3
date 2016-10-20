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
        $__internal_41ce3924a387a8107ddc59bec8ea95dba5d6c415e1a1036a5e8ec1ec4abb89fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ce3924a387a8107ddc59bec8ea95dba5d6c415e1a1036a5e8ec1ec4abb89fe->enter($__internal_41ce3924a387a8107ddc59bec8ea95dba5d6c415e1a1036a5e8ec1ec4abb89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_41ce3924a387a8107ddc59bec8ea95dba5d6c415e1a1036a5e8ec1ec4abb89fe->leave($__internal_41ce3924a387a8107ddc59bec8ea95dba5d6c415e1a1036a5e8ec1ec4abb89fe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_60404cff84eb1a2a0030c8a6cd0ff2431d6be930a0ae547e9459fb96cf93a3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60404cff84eb1a2a0030c8a6cd0ff2431d6be930a0ae547e9459fb96cf93a3f6->enter($__internal_60404cff84eb1a2a0030c8a6cd0ff2431d6be930a0ae547e9459fb96cf93a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_60404cff84eb1a2a0030c8a6cd0ff2431d6be930a0ae547e9459fb96cf93a3f6->leave($__internal_60404cff84eb1a2a0030c8a6cd0ff2431d6be930a0ae547e9459fb96cf93a3f6_prof);

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
