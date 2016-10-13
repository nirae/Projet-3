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
        $__internal_71bcb75df90a397ad5fc986c6aafdea8e8dce5d0611040f0e081a9b23aed37dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71bcb75df90a397ad5fc986c6aafdea8e8dce5d0611040f0e081a9b23aed37dc->enter($__internal_71bcb75df90a397ad5fc986c6aafdea8e8dce5d0611040f0e081a9b23aed37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_71bcb75df90a397ad5fc986c6aafdea8e8dce5d0611040f0e081a9b23aed37dc->leave($__internal_71bcb75df90a397ad5fc986c6aafdea8e8dce5d0611040f0e081a9b23aed37dc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0c71a964165787b83fc4f41f08bd0a0ad3fe10b53627a4772084e63f4c01ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c71a964165787b83fc4f41f08bd0a0ad3fe10b53627a4772084e63f4c01ea2->enter($__internal_e0c71a964165787b83fc4f41f08bd0a0ad3fe10b53627a4772084e63f4c01ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e0c71a964165787b83fc4f41f08bd0a0ad3fe10b53627a4772084e63f4c01ea2->leave($__internal_e0c71a964165787b83fc4f41f08bd0a0ad3fe10b53627a4772084e63f4c01ea2_prof);

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
