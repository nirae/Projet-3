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
        $__internal_c45759989a0ae93b19f8feba4e04ab106426ff0c56a2a4971c2da94ed5f10ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45759989a0ae93b19f8feba4e04ab106426ff0c56a2a4971c2da94ed5f10ed9->enter($__internal_c45759989a0ae93b19f8feba4e04ab106426ff0c56a2a4971c2da94ed5f10ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c45759989a0ae93b19f8feba4e04ab106426ff0c56a2a4971c2da94ed5f10ed9->leave($__internal_c45759989a0ae93b19f8feba4e04ab106426ff0c56a2a4971c2da94ed5f10ed9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_67c556e5610024cad1c216e8d23d0f88f0a19e84e9ca74a1c7bfd6717770ee3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c556e5610024cad1c216e8d23d0f88f0a19e84e9ca74a1c7bfd6717770ee3f->enter($__internal_67c556e5610024cad1c216e8d23d0f88f0a19e84e9ca74a1c7bfd6717770ee3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_67c556e5610024cad1c216e8d23d0f88f0a19e84e9ca74a1c7bfd6717770ee3f->leave($__internal_67c556e5610024cad1c216e8d23d0f88f0a19e84e9ca74a1c7bfd6717770ee3f_prof);

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
