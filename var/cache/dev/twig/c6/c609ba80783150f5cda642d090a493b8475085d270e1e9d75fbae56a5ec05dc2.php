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
        $__internal_8004dbdd48b28f9970c758e3775c27e7be66efd15d63d3cd245aa2540a6843be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8004dbdd48b28f9970c758e3775c27e7be66efd15d63d3cd245aa2540a6843be->enter($__internal_8004dbdd48b28f9970c758e3775c27e7be66efd15d63d3cd245aa2540a6843be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8004dbdd48b28f9970c758e3775c27e7be66efd15d63d3cd245aa2540a6843be->leave($__internal_8004dbdd48b28f9970c758e3775c27e7be66efd15d63d3cd245aa2540a6843be_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_80f4a5b44956927782c2d0a6c739b1bd53d3d902dafd92528101a85ecc9337c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f4a5b44956927782c2d0a6c739b1bd53d3d902dafd92528101a85ecc9337c3->enter($__internal_80f4a5b44956927782c2d0a6c739b1bd53d3d902dafd92528101a85ecc9337c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_80f4a5b44956927782c2d0a6c739b1bd53d3d902dafd92528101a85ecc9337c3->leave($__internal_80f4a5b44956927782c2d0a6c739b1bd53d3d902dafd92528101a85ecc9337c3_prof);

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
