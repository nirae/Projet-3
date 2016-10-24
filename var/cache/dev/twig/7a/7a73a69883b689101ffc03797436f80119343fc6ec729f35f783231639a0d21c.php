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
        $__internal_c098e884bc3d510ab2d2d392faa37c89dd4428d6e1663550fd4ae1aea76d815c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c098e884bc3d510ab2d2d392faa37c89dd4428d6e1663550fd4ae1aea76d815c->enter($__internal_c098e884bc3d510ab2d2d392faa37c89dd4428d6e1663550fd4ae1aea76d815c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c098e884bc3d510ab2d2d392faa37c89dd4428d6e1663550fd4ae1aea76d815c->leave($__internal_c098e884bc3d510ab2d2d392faa37c89dd4428d6e1663550fd4ae1aea76d815c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_83a418e2f2e157a6799d91104b811fed3f38d2419a06db8feb34e741e9b0bb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a418e2f2e157a6799d91104b811fed3f38d2419a06db8feb34e741e9b0bb6e->enter($__internal_83a418e2f2e157a6799d91104b811fed3f38d2419a06db8feb34e741e9b0bb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_83a418e2f2e157a6799d91104b811fed3f38d2419a06db8feb34e741e9b0bb6e->leave($__internal_83a418e2f2e157a6799d91104b811fed3f38d2419a06db8feb34e741e9b0bb6e_prof);

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
