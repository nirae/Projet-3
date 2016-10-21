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
        $__internal_baf428f8b39ab65e029128de8d3d7f4b5f9e4ff7bd0e88438980510450fcbf0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf428f8b39ab65e029128de8d3d7f4b5f9e4ff7bd0e88438980510450fcbf0d->enter($__internal_baf428f8b39ab65e029128de8d3d7f4b5f9e4ff7bd0e88438980510450fcbf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_baf428f8b39ab65e029128de8d3d7f4b5f9e4ff7bd0e88438980510450fcbf0d->leave($__internal_baf428f8b39ab65e029128de8d3d7f4b5f9e4ff7bd0e88438980510450fcbf0d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_58889701f119a2f3f16002f20c0024c8b7f2ac1adb68951be763098e918f1a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58889701f119a2f3f16002f20c0024c8b7f2ac1adb68951be763098e918f1a37->enter($__internal_58889701f119a2f3f16002f20c0024c8b7f2ac1adb68951be763098e918f1a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_58889701f119a2f3f16002f20c0024c8b7f2ac1adb68951be763098e918f1a37->leave($__internal_58889701f119a2f3f16002f20c0024c8b7f2ac1adb68951be763098e918f1a37_prof);

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
