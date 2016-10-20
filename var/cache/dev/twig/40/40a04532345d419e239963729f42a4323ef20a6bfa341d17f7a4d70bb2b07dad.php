<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f11c63d30200d8ef54d65770ac24be84c6edf734acd27337c942bb659c3a25f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b02f1afe3ef778b9b1cfc378f27bda7bd6d5af8a7a706b609bbe85ea9c825ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b02f1afe3ef778b9b1cfc378f27bda7bd6d5af8a7a706b609bbe85ea9c825ae->enter($__internal_2b02f1afe3ef778b9b1cfc378f27bda7bd6d5af8a7a706b609bbe85ea9c825ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2b02f1afe3ef778b9b1cfc378f27bda7bd6d5af8a7a706b609bbe85ea9c825ae->leave($__internal_2b02f1afe3ef778b9b1cfc378f27bda7bd6d5af8a7a706b609bbe85ea9c825ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
